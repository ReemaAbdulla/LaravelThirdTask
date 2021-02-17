<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cases;

class CasesController extends Controller
{
    //
    public function index(){

    	$case=new Cases();
    	$case1=$case::all();


    	return view('manage_cases',['case1'=>$case1]);
    }
     public function store(Request $request){

     	$validatedData=$request->validate([
    		
    		'case_date'=>'required',
    		'case_time'=>'required',
    		'case_type'=>'required',
    		'directory_name'=>'required',
    		'case_priority'=>'required',
    		'case_status'=>'required',
    		'case_entry'=>'required',
    		'case_desc'=>'required',
    		'case_emp_note'=>'required'

    									]);



			$case = new Cases();
    	    $case ->case_day = $request->case_day;
    	    $case ->case_date = $request->case_date;
    	    $case ->case_time = $request->case_time;
    	    $case ->case_type = $request->case_type;
    	    $case ->directory_name = $request->directory_name;
    	    $case ->case_priority = $request->case_priority;
    	    $case ->case_status = $request->case_status;
    	    $case ->case_entry = $request->case_entry;
    	    $case ->case_desc = $request->case_desc;
    	    $case ->case_emp_note = $request->case_emp_note;
    	     
    	     $case->save();

    	     return redirect('/manage_cases');


    }
}
