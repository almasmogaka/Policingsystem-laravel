<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Crime;
use App\Crimetype;
use App\state;
use Session;
use Image;
//use App\Http\Controllers\Auth;
use Auth;

class CrimeController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crimes = Crime::orderBy('id', 'desc')->paginate(10);

        return view('crimes.index')->withcrimes($crimes);

         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = state::all();
        $crimetypes = Crimetype::all();
        
        return view('crimes.create')->withcrimetypes($crimetypes)->withstates($states);
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, array(            
            'name'=>'required',            
            'phone_no'=>'required|regex:/(07)[0-9]{8}/',
            'description'=>'required',
            'l_occurred'=>'required',
            'l_address'=>'required',
            'evidence' => 'sometimes',
            'date'=>'required',            
            'm_taken'=>'required',
            'state_id'=>'integer|required',
            'crimetype_id'=>'integer|required'
        ));

        //store to database
        $crime = new Crime;
        $user = Auth::user()->name;
        
        $crime->name=$request->name;
        $crime->recordedby=$user;
        $crime->phone_no=$request->phone_no;
        $crime->description=$request->description;
        $crime->l_occurred=$request->l_occurred;
        $crime->l_address=$request->l_address;
        if ($request->hasFile('evidence')) {
            $image = $request->file('evidence');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(100, 50)->save($location);
  
            $crime->evidence = $filename;
          }
          if ($location = public_path('images/KenyaPolice.jpg')) {
        
            $crime->logo ='KenyaPolice.jpg' ;
          }
        $crime->date=$request->date;
        $crime->m_taken=$request->m_taken;
        $crime->state_id=$request->state_id;
        $crime->crimetype_id=$request->crimetype_id;      

        $crime->save();

       Session::flash('success','Crime has been successfully saved');

       return redirect()->route('crimes.index');     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crime = crime::find($id);

        return view('crimes.show')->withcrime($crime);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crime = Crime::find($id);
        $states = State::all();
        $st = array();
        foreach ($states as $state){
        $st[$state->id] = $state->status;
    }
        return view('crimes.edit')->withcrime($crime)->withstates($st);
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
        $crime = Crime::find($id);
        //validate
         $this->validate($request, array(            
            'name'=>'required',            
            'phone_no'=>'required|regex:/(07)[0-9]{8}/',
            'description'=>'required',
            'l_occurred'=>'required',
            'l_address'=>'required',
            'date'=>'required',            
            'm_taken'=>'required',
            'state_id'=>'integer|required'
            
        ));

        //store to database               
        $crime->name=$request->name;
        $crime->phone_no=$request->phone_no;
        $crime->description=$request->description;
        $crime->l_occurred=$request->l_occurred;
        $crime->l_address=$request->l_address;
        $crime->date=$request->date;
        $crime->m_taken=$request->m_taken;
        $crime->state_id=$request->state_id;
        

        $crime->save();

       Session::flash('success','Crime has been successfully Updated');

       return redirect()->route('crimes.index');

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
