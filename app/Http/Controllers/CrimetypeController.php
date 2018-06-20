<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crimetype;
use Session;

class CrimetypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crimetypes = Crimetype::all();

        return view('crimetype.index')->withcrimetypes($crimetypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crimetype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //object model Crimetype
        $crimetype = new Crimetype;

        //validate
        $this->validate($request, array(
            'type'=>'required|max:255',
            'description'=>'required|max:255'
        ));
        //store to database
        $crimetype->type=$request->input('type');
        $crimetype->description=$request->input('description');

        $crimetype->save();

        session::flash('success', 'Added crime Type successfully');
        //redirect
        return redirect()->route('crimetypes.index');

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
        $crimetype = Crimetype::find($id);

        return view('crimetype.edit', ['crimetype' => $crimetype]);
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
        $crimetype = Crimetype::find($id);

            //validation
        $this->validate($request, array(
            'type'=>'required|max:255',
            'description'=>'required|max:255'
        ));
        //store to database
        $crimetype->type=$request->input('type');
        $crimetype->description=$request->input('description');

        $crimetype->save();

        session::flash('success', 'Updated crime Type successfully');
        //redirect
        return redirect()->route('crimetypes.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crimetype = Crimetype::find($id);
        $crimetype->delete();

        session::flash('success', 'Deleted crime Type successfully');
        //redirect
        return redirect()->route('crimetypes.index');
    }
}
