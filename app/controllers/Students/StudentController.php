<?php

class StudentController extends \BaseController {
	public function __construct(){

        $this->beforeFilter('csrf', array('on' => 'post'));
        
    }
	/**
	 * Display a listing of students
	 *
	 * @return Response
	 */
	public function dashboard()
	{
		$data = Auth::Student()->get();
		$student = Student::findOrFail($data->id);
		return View::make('students.dashboard')
		->withStudent($student);
	}

	/**
	 * Show the form for creating a new student
	 *
	 * @return Response
	 */
	public function signup()
	{
		return View::make('students.signup');
	}

	/***Store a new student***/

	public function postSignup(){
		$data = Input::all();
		//SignUp Validation
		$validator = Validator::make($data,Student::$signupRules,Student::$messages);
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}
		//Hashing The Password
		$data['password'] = Hash::make($data['password']);
		//Creating a new Student
		$student = Student::create($data);

		
		
		return Redirect::route('student.dashboard');
	}
	
}
