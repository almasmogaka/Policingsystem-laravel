<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test; 
use App\Crime;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $crimes = crime::orderBy('id','desc')->paginate(10);

        return view('admins.index')->withcrimes($crimes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      /**  $test = new Test;

        $this->validate($request, array(
            'fname'=>'required',
            'lname'=>'required',
            'address'=>'required',
            'p_residence'=>'required',
            'phone_no'=>'required',
            'l_occurred'=>'required',
            'l_address'=>'required',
            'op'=>'required',
            'suspect'=>'required',           


        ));

        $test->fname=$request->fname;
        $test->lname=$request->lname;
        $test->address=$request->address;
        $test->p_residence=$request->p_residence;
        $test->phone_no=$request->phone_no;
        $test->l_occurred=$request->l_occurred;
        $test->l_address=$request->l_address;
        $test->op=$request->op;
        $test->suspect=$request->suspect;       
        
        
        $test->save();
        */
    }
        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crime = Crime::find($id);

        return view('admins.show')->withcrime($crime);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
