<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crimetype;
use App\Crime;
use Session;

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
}
