<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\StudentSubject;

class StudentController extends Controller
{
    public function myclass($user_id)
    {
    	$myclass = Student::find($user_id);
    	 $mysubjects = StudentSubject::where('student_id',$user_id)->get();
    	return view('/student/myclass',compact('myclass','mysubjects'));
    }

    public function myinfo($user_id)
    {
    	$myinfo = Student::find($user_id);
    	return view('/student/myinfo',compact('myinfo'));
    }

}



