<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
// use Validator;
use DB;

class ClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	$classlist = Classes::all();
    	//$classlist = DB::table('classes')->get();
    	//print_r($classlist);
    	return view('admin.classList',compact('classlist'));
    }

    // Save the Class
    public function save(Request $request)
    {
        $this->validate($request,[
            'title' => 'required'
            ]);

        Classes::create([
            'title' => $request->title
        ]);

        return redirect('/admin/classlist')->with('status','Class successfully saved');

    }

    public function edit($id)
    {
        $data = Classes::find($id);

        return view('admin.class.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'title' => 'required'
        ]);

        $data = Classes::find($id);

        $data->title = $request->title;

        $data->save();

        // return redirect()->back()->with('status','Class successfully updated');
        return redirect('/admin/classlist')->with('status','Class successfully updated');
    }

    public function delete($id)
    {
        $data = Classes::find($id);
        $data->delete();

        // return redirect()->back()->with('status','Class record deleted');
        return redirect()->back()->with('status','Department record deleted');
    }
}
