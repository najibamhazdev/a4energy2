<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cigarette;

class CigarettesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('cigarettes.forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cigarette = new cigarette([
            'name' => $request->get('name'),
            'ord' => $request->get('ord')
          ]);
          $cigarette->save();
          return redirect()->route('cigarettes.index')
                        ->with('success','Record created successfully.');
          
          //return response()->json('Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('cigarettes.forms.edit', compact('cigarette'));
        
        //return response()->json($cigarette);
    }



    public function delete($id)
    {
        $cigarette = Cigarette::find($id);
        return view('cigarettes.forms.delete', compact('cigarette'));
        
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
        $cigarette->name = $request->get('name');
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
