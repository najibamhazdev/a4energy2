<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cigarette;

class CigarettesController extends Controller
{
    public function index()
    {
        $cigarettes = Cigarette::latest()->get();
        return view('cigarettes.index', compact("cigarettes"));
        //return response()->json($cigarettes);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        //dd($categories);
        return view('cigarettes.forms.create',compact('categories'))->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cigarette = new Cigarette([
            'name' => $request->get('name'),
            'category_id' => $request->get('category_id'),
            'maxqty' =>  $request->get('maxqty'),
            'ord' => $request->get('ord')
          ]);
          $cigarette->save();
          return redirect()->route('cigarettes.index')
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
