<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	$departmentList = Department::all();
    	return view('admin.departmentList',compact('departmentList'));
    }
    // Add Department Form
    public function create()
    {
        return view('admin.department.create');
    }
    // Save the depatment title
    public function save(Request $request)
    {
        $this->validate($request,[
            'title' => 'required'
        ]);

        Department::create([
            'title' => $request->title
        ]);

        return redirect('/admin/departmentlist')->with('status','Department successfully saved');
    }

    public function edit($id)
    {
        $department = Department::find($id);

        return view('admin.department.edit',compact('department'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'title' => 'required'
        ]);

        $dept = Department::find($id);

        $dept->title = $request->title;

        $dept->save();

        return redirect('/admin/departmentlist')->with('status','Department successfully updated');
    }

    public function delete($id)
    {
        $dept = Department::find($id);
        $dept->delete();

        return redirect()->back()->with('status','Department record deleted');
    }

}
