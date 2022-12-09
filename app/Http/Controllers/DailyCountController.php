<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cigarette;
use App\Models\CigarettesCount;
use App\Models\DailyCount;

class DailyCountController extends Controller
{
    public function index()
    {
        $dailycounts = DailyCount::latest()->get();
        return view('dailycount.index', compact("dailycounts"));
        //return response()->json($cigarettes);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cigarettes = Cigarette::orderBy('ord','ASC')->get();
        
        return view('dailycount.forms.create',compact('cigarettes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $dailycount = new DailyCount([
            'empl_name' => $request->get('empl_name'),
            'date' => date('Y-m-d' , strtotime($request->get('date'))),
            'note' =>  $request->get('note')
          ]);
          $dailycount->save();
          $dailycount_id = $dailycount->id;
          $cigarettes = Cigarette::get();
          //dd($dailycount_id);
          foreach ($cigarettes as $cigarette)
          {
            $qty = 0;
            if($request->get('cigarette_qty_'.$cigarette->id) > 0){
                $qty = $request->get('cigarette_qty_'.$cigarette->id);
            }
            $cig_count= new CigarettesCount([
                'dailycount_id' => $dailycount_id,
                'cigarette_id' => $request->get('cigarette_id_'.$cigarette->id),
                'qty' => $qty
            ]);
            $cig_count->save();
          }


          return redirect()->route('dailycount.index')
                        ->with('success','Category created successfully.');
          
          //return response()->json('Successfully added');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cigarette = Cigarette::find($id);
        $categories = Category::get();
        return view('cigarettes.forms.edit', compact('cigarette','categories'));
        
        //return response()->json($cigarette);
    }



    public function delete($id)
    {
        $cigarette = Cigarette::find($id);
        $categories = Category::get();
        return view('cigarettes.forms.delete', compact('cigarette','categories'));
        
        //return response()->json($cigarette);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($id);
        $cigarette = Cigarette::find($id);
        $cigarette->category_id = $request->get('category_id');
        $cigarette->name = $request->get('name');
        $cigarette->maxqty = $request->get('maxqty');
        $cigarette->ord = $request->get('ord');
        $cigarette->save();

        return redirect()->route('cigarettes.index')
                        ->with('success','Record Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cigarette = Cigarette::find($id);
        $cigarette->delete();

        return redirect()->route('cigarettes.index')
                        ->with('success','Record Deleted successfully.');
        
        //return response()->json('Successfully Deleted');
    }
}
