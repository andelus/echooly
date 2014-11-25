<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/********************
***Teacher Routing***
*******************/
Route::group(array('before' => 'Teacherauth'), function()
{
    Route::get('Teachers', array('uses' => 'TeacherController@dashboard', 'as' => 'teacher.dashboard'));
});
//Login Route
Route::group(array('prefix' => 'Teachers'), function() {
    Route::get('login', array('uses' => 'TeacherAuthController@getLogin', 'as' => 'teacher.auth.login'));
    Route::post('login', array('uses' => 'TeacherAuthController@postLogin', 'as' => 'teacher.auth.login.post'));
    Route::get('logout', array('uses' => 'TeacherAuthController@logout', 'as' => 'teacher.auth.logout'));
    Route::get('signup', array('uses' => 'TeacherController@signup', 'as' => 'teacher.signup'));
    Route::post('signup', array('uses' => 'TeacherController@postSignup', 'as' => 'teacher.signup.post'));
    //Route::get('courses', array('uses' => 'CourseController@getCourses', 'as' => 'teacher.courses'));
    //Route::post('courses', array('uses' => 'CourseController@postCourses', 'as' => 'teacher.courses.post'));

});

/********************
***Student Routing***
*******************/
Route::group(array('before' => 'Studentauth'), function()
{
    Route::get('Students', array('uses' => 'StudentController@dashboard', 'as' => 'student.dashboard'));
});
//Login Route
Route::group(array('prefix' => 'Students'), function() {
    Route::get('login', array('uses' => 'StudentAuthController@getLogin', 'as' => 'student.auth.login'));
    Route::post('login', array('uses' => 'StudentAuthController@postLogin', 'as' => 'student.auth.login.post'));
    Route::get('logout', array('uses' => 'StudentAuthController@logout', 'as' => 'student.auth.logout'));
    Route::get('signup', array('uses' => 'StudentController@signup', 'as' => 'student.signup'));
    Route::post('signup', array('uses' => 'StudentController@postSignup', 'as' => 'student.signup.post'));
    Route::get('courses', array('uses' => 'CourseController@getCourses', 'as' => 'student.courses'));

});

Route::get('/', 'HomeController@showWelcome');
/********************
***Administration Routing***
*******************/
Route::group(array('before' => 'Adminauth'), function()
{
    Route::get('Administration', array('uses' => 'AdministrationController@dashboard', 'as' => 'admin.dashboard'));
});
//Login Route
Route::group(array('prefix' => 'Administration'), function() {
    Route::get('login', array('uses' => 'AdministrationAuthController@getLogin', 'as' => 'admin.auth.login'));
    Route::post('login', array('uses' => 'AdministrationAuthController@postLogin', 'as' => 'admin.auth.login.post'));
    Route::get('logout', array('uses' => 'AdministrationAuthController@logout', 'as' => 'admin.auth.logout'));

});









/***API DATA**/
Route::group(array('prefix' => 'api'), function(){
    Route::get('courses/{id}', array('uses' => 'CourseController@getJson', 'as' => 'student.api.courses'));
/*API Route for Student CRUD */ 
    Route::get('admin/students', array('uses' => 'AdministrationController@showStudents', 'as' => 'admin.show.students'));
    Route::put('admin/students/edit/{id}', array('uses'=>'AdministrationController@editStudents', 'as' => 'admin.edit.students'));
    Route::post('admin/students/create', array('uses'=>'AdministrationController@createStudents', 'as' => 'admin.create.students'));
    Route::delete('admin/students/delete/{id}', array('uses'=>'AdministrationController@deleteStudents', 'as' => 'admin.delete.students'));
/*API Route for teachers CRUD*/
    Route::get('admin/teachers', array('uses' => 'AdministrationController@showTeachers', 'as' => 'admin.show.teachers'));
    Route::put('admin/teachers/edit/{id}', array('uses'=>'AdministrationController@editTeachers', 'as' => 'admin.edit.teachers'));
    Route::post('admin/teachers/create', array('uses'=>'AdministrationController@createTeachers', 'as' => 'admin.create.teachers'));
    Route::delete('admin/teachers/delete/{id}', array('uses'=>'AdministrationController@deleteTeachers', 'as' => 'admin.delete.teachers'));

});

