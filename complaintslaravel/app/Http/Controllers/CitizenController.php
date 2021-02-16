<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitizenController extends Controller
{
    //
    public function index(){

     
    	return view('manage_citizen');
    }

    public function store(Request $request){

    	$validatedData=$request->validate([
    		'n_id'=>'required',
    		'nationality'=>'required',
    		'first_name'=>'required',
    		'sec_name'=>'required',
    		'third_name'=>'required',
    		'last_name'=>'required',
    		'city'=>'required',
    		'address'=>'required',
    		'mobile_number'=>'required',
    		'gender'=>'required',
    		'password'=>'required'

    	]);

    	return redirect('/manage_citizen');

    	
    }

}
