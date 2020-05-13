<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassManagement extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	$classmanagementlist = ClassManagement::all();
    	//$classlist = DB::table('classes')->get();
    	//print_r($classlist);
    	return view('admin.classManagement.classmanagementList',compact('classmanagementlist'));
    }
}
