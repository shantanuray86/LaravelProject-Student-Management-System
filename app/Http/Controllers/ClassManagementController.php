<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassManagement;
use App\Teacher;
//use App\Class;

class ClassManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	$classmanagementlist = Teacher::all();
    	//$classlist = DB::table('classes')->get();
    	//print_r($classlist);
    	return view('admin.classManagement.classmanagementList',compact('classmanagementlist'));
    }
}
