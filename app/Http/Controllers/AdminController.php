<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dashboard()
    {
        return view('admin.adminDashboard');
    }

    public function registerStudent()
    {
        return view('admin.registerStudent');
    }

    public function saveregisterStudent(Request $request)
    {
        //dd($request);
         $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        return User::create([
            
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);
      
    }
}
