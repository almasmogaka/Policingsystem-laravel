<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Crimetype;
use App\Crime;
use Session;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $found = $request->input('search');

        $crimes = Crime::orderBy('id', 'desc')->search($found)->paginate(2);

        return view('home')->withcrimes($crimes, $found);

        
    }
    public function about(){
        return view('pages.about');
    }
    public function postsearch(Request $request) {
        //get the string data from the search form
        $search = $request->input('search');

        //checks the database if the record exists
        $crimes = DB::table('crimes')->where('name', 'LIKE', '%'.$search . '%');

        return view('home', compact('crimes', 'search'));
    }
}
