<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect('/login');
});

//Auth::routes();

// This is the user dashboard common to all teacher,student etc.
Route::get('/home', 'HomeController@index')->name('home');
// User Logout Function
Route::post('/logout', 'Auth\LoginController@userLogout')->name('logout');

/**
* Disable the Register User Option for the normal users.
  Since Teacher, 
* Student and in future staffs could be added from respective add portal inside admin   
* portal. 
*/
Auth::routes(['register' => false,'login'=>true]);

//Admin Login, Logout, Dashbaord Routes
Route::get('/admin/loginform', 'Admin\AdminloginController@showloginform')->name('admin.login');
Route::post('/admin/logout', 'Admin\AdminLoginController@adminLogout')->name('admin.logout');

Route::post('/admin/login/submit', 'Admin\AdminloginController@login')->name('admin.login.submit');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

//Admin Student Routes
Route::get('/admin/registerStudent', 'AdminController@registerStudent')->name('registerStudent');
Route::post('/admin/saveregisterStudent', 'AdminController@saveregisterStudent')->name('saveregisterStudent');



// Admin Class Routes
Route::get('/admin/classlist', 'ClassController@index')->name('classlist');
/**
* Since this route does not have a controller, the protected guard 'auth:admin' is 
* applied directly to the route instead of writing it in the controller.
*/
Route::get('/admin/class/add', function(){
	return view('admin.class.create');
})->middleware('auth:admin');
Route::post('/admin/class/save', 'ClassController@save')->name('classsave');
Route::get('/admin/class/edit/{id}', 'ClassController@edit')->name('classedit');
Route::post('/admin/class/update/{id}', 'ClassController@update')->name('classupdate');
Route::delete('/admin/class/delete/{id}', 'ClassController@delete')->name('classdelete');

// Admin Department Routes
Route::get('/admin/departmentlist', 'DepartmentController@index')->name('departmentlist');
Route::get('/admin/department/add', 'DepartmentController@create')->name('departmentadd');
Route::post('/admin/depatment/save', 'DepartmentController@save')->name('departmentsave');
Route::get('/admin/department/edit/{id}', 'DepartmentController@edit')->name('departmentedit');
Route::post('/admin/department/update/{id}', 'DepartmentController@update')->name('departmentupdate');
Route::delete('/admin/department/delete/{id}', 'DepartmentController@delete')->name('departmentdelete');

// Admin Student Routes
Route::get('/admin/studentlist', 'StudentController@index')->name('studentlist');
Route::get('/admin/student/add', 'StudentController@create')->name('studentadd');
Route::post('/admin/student/save', 'StudentController@save')->name('studentsave');
Route::get('/admin/student/edit/{id}', 'StudentController@edit')->name('studentedit');
Route::post('/admin/student/update/{id}', 'StudentController@update')->name('studentupdate');
Route::delete('/admin/student/delete/{id}', 'StudentController@delete')->name('studentdelete');

// Admin Subject Routes
Route::get('/admin/subjectlist', 'SubjectController@index')->name('subjectlist');
Route::get('/admin/subject/add', 'SubjectController@create')->name('subjectadd');
Route::post('/admin/subject/save', 'SubjectController@save')->name('subjectsave');

// Admin Teacher Routes
Route::middleware([teacher::class])->group(function(){
	Route::get('/teacher/dashbaord', 'HomeController@teacherdashboard')->name('teacherdashboard');
});
Route::get('/admin/teacherlist', 'TeacherController@index')->name('teacherlist');
Route::get('/admin/teacher/add', 'TeacherController@create')->name('teacheradd');
Route::post('/admin/teacher/save', 'TeacherController@save')->name('teachersave');

// Admin Class Management
Route::get('/admin/classmanagementlist', 'ClassManagementController@index')->name('classmanagementlist');


/**
* User Routes 
*/

Route::get('/teacher/dashboard', 'Users\TeacherController@index')->name('teacherdashboard');

