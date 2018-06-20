<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function background(){
    	return view('home.background');
    }
    public function planning(){
    	return view('home.planning');
    }
    public function mission(){
    	return view('home.mission');
    }
    public function homepage(){
    	return view('home.homepage');
    }    
    public function welcome2(){
    	return view('welcome2');
    }
}
