<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    //
    public function index(){

    	$admin=new Admin();
    	$admins=$admin::all();
          //dd($admins);


    	/*return view('manage_admin',[
    		'admins'=>$admins
    	]);*/
    	// we can write the array in another way using compact 
    	return view('manage_admin',compact('admins'));
    }

    public function store(Request $request){

    	$validatedData=$request->validate([
    		'admin_email'=>'email|required',
    		'admin_password'=>'required',
    		'admin_fullname'=>'required',
    		'admin_dept'=>'required',
    		'admin_type'=>'required']);



    	$admin = new Admin();

    	$admin ->admin_email = $request->admin_email;
    	$admin->admin_password = $request->admin_password;
    	$admin->admin_fullname = $request->admin_fullname;
    	$admin->admin_dept = $request->admin_dept;
    	$admin->admin_type = $request->admin_type;

    	$admin->save();

    	return redirect('/manage_admin');

    	
    }
}
