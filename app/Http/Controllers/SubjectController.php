<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	$subjectList = Subject::all();
    	return view('admin.subject.subjectList',compact('subjectList'));
    }

    // Add Subject Form
    public function create()
    {
        return view('admin.subject.addSubject');
    }
    // Save the Subject title
    public function save(Request $request)
    {
        $this->validate($request,[
            'title' => 'required'
        ]);

        Subject::create([
            'title' => $request->title
        ]);

        return redirect('/admin/subjectlist')->with('status','Subject successfully saved');
    }
}
