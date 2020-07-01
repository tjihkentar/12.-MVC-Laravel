<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form(){
    	return view('form');
    }

    public function welcome(){
    	return view('welcome');
    }

    public function welcome_post(Request $request){
    	//dd($request->all());
    	$fname = $request['fname'];
    	$lname = $request['lname'];
    	$welcome_post = $fname. " " . $lname;

    	return view('welcome', $welcome_post);
    }

}
