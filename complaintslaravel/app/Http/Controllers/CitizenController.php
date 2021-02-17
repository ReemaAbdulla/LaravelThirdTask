<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;

class CitizenController extends Controller
{
    //
    public function index(){

    	$cit=new Citizen();
    	$citi=$cit::all();

     
    	return view('manage_citizen',[
    		'citi'=>$citi]);
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
    		//'mobile_number'=>'required',
    		'gender'=>'required',
    		'password'=>'required'

    	]);

        $cit=new Citizen();
        $cit->n_id        =$request->n_id;
        $cit->nationality =$request->nationality;
        $cit->first_name  =$request->first_name;
        $cit->sec_name    =$request->sec_name;
        $cit->third_name  =$request->third_name;
        $cit->last_name   =$request->last_name;
        $cit->city        =$request->city;
        $cit->address     =$request->address;
        $cit->mobile_number =$request->mobile_number;
        $cit->gender      =$request->gender;
        $cit->password    =$request->password;
        
        $cit->save();

        return redirect('/manage_citizen');

    

    	
    }

}
