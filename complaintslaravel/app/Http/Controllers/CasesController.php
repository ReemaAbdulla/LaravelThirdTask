<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasesController extends Controller
{
    //
    public function index(){
    	return view('manage_cases');
    }
     public function store(){

    	dd('123');
    }
}
