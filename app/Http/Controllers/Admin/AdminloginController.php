<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminloginController extends Controller
{
    protected $redirectTo = '/admin/dashboard';
	public function __construct()
    {
        $this->middleware('guest:admin')->except(['adminLogout']);
    }

    public function showloginform()
    {
    	return view('auth/adminlogin');
    }

    public function login(Request $request)
    {

    	// validate the form data.
    	$this->validate($request,[
    			'email' =>'required|email',
    			'password' =>'required|min:6'

    		]);

    	// Attempt to log the user in.
    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' =>$request->password], $request->remember)) {
//echo "Helloworld"; die();
    		// if successful, then redirect to the intended location.
    		return redirect()->intended(route('admin.dashboard'));

		}else{
            // if unsuccessful, then redirect to the login page with error message.
            return redirect('/')->with('status', 'Email or Password is Incorrect');
            
        }


    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/loginform');
    }
}
