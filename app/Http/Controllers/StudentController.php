<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use App\StudentSubject;
use App\Department;
use App\Classes;
use App\User;
use Hash;


class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $datas = Student::all();

        return view('admin.student.index',compact('datas'));
    }

    public function create()
    {
        $departments = Department::all();
        $classes = Classes::all();

        return view('admin.student.create',compact('departments','classes'));
    }

    public function save(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        Student::create([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'roll' => $request->roll,
            'reg_id' => $request->reg_id,
            'department_id' => $request->department_id,
            'classes_id' => $request->classes_id,
            'mother_name' => $request->mother_name,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'title' => $request->title,
            'home_number' => $request->home_number,
        ]);

        /**
        * Save the Student information in the User table.
        **/

        $user_id = User::create([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'mother_name' => $request->mother_name,
            'present_address' => $request->present_address,
            'role' => "student",
            'password' => Hash::make($request->phone_number),

        ]);

        //return redirect()->back()->with('status','Student successfully saved');
        return redirect('/admin/studentlist')->with('status','Student successfully saved');
        

    }

    public function edit($id)
    {
        $data = Student::find($id);
        $departments = Department::all();
        $classes = Classes::all();

        return view('admin.student.edit',compact('data','departments','classes'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        $data = Student::find($id);

        $data->update($request->all());

        return redirect('/admin/studentlist')->with('status','Student successfully updated');
    }

    public function delete($id)
    {
        $data = Student::find($id);
        $data->delete();

        return redirect('/admin/studentlist')->with('status','Student record deleted');
    }



    // Make the student class dpeartment subject relation
    public function studentSubjectRelation(Request $request, $id)
    {
      if($request->subject)
      {
        //dd($request);
        $this->validate($request,[
            'subject' => 'required',
        ]);
        //echo($id); die();

        StudentSubject::create([
            'subject'    => $request->subject,
            'student_id' => $id,
            ]);
        return redirect()->back();
      } 
      $subjects = Subject::all();
      $mysubjects = StudentSubject::where('student_id',$id)->get(); 
      return view('admin/student/studentSubjectRelation',compact('subjects','mysubjects'));
    }

}
