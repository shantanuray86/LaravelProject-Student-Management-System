<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Department;
use App\Classes;
use App\Subject;
use App\Teachersubjectrelation;
use App\Teacherclassrelation;
use App\User;
use Hash;

class TeacherController extends Controller
{
	public function __construct()
    {
        /*
            This controller functions are guared by the admin guard. 
        */
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $datas = Teacher::all();

        return view('admin.teacher.teacherlist',compact('datas'));
    }

    public function create()
    {
        $departments = Department::all();
        $classes = Classes::all();
        $subjects = Subject::all();

        return view('admin.teacher.addTeacher',compact('departments','classes','subjects'));
    }

    public function save(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        /*
            Store the teacher information in the teachers table. 
        */

        $teacher_id = Teacher::create([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'mother_name' => $request->mother_name,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'home_number' => $request->home_number,
        ]);

        /*
            Store the teacher information in the user table. 
        */

        $user_id = User::create([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'mother_name' => $request->mother_name,
            'present_address' => $request->present_address,
            'role' => "teacher",
            'password' => Hash::make($request->phone_number),

        ]);
        /*
            Store the teacher ID and Subject ID in the teachersubjectrelation table. 
        */
        foreach($request->subject_id as $subject){

            Teachersubjectrelation::create([
                'teacher_id' =>$teacher_id->id,
                'subject_id' =>$subject
                ]);
        }

        /*
            Store the teacher ID and Class ID in the teacherClassrelation table. 
        */
        foreach($request->classes_id as $class){

            Teacherclassrelation::create([
                'teacher_id' =>$teacher_id->id,
                'classes_id' =>$class
                ]);
        }

        return redirect()->back()->with('status','Teacher successfully saved');
    }
}
