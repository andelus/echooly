<?php

class AdministrationAuthController extends \BaseController {
public function __construct(){

        $this->beforeFilter('csrf', array('on' => 'post'));
    }
	//Login View
        public function getLogin(){
            if(Auth::Teacher()->check()){
            return Redirect::route('teacher.dashboard');
        }
        else if(Auth::Student()->check()){
            return Redirect::route('student.dashboard');
        }
        else{
            return View::make('auth.login');
        }
	}
	//Post Login
	public function postLogin(){
                    //Getting the data from the inputs
    	$data = Input::all();
                    //Vaidation of the data with $rules of the Student model
    	$validator = Validator::make($data, Administration::$rules, Administration::$messages);
                   if($validator->fails())
                {
                    return Redirect::back()->withErrors($validator)->withInput();
                }
        //Checking the input data with our custom Auth System        
        if(Auth::Admin()->attempt(
                array('email' => Input::get('email'), 'password' => Input::get('password'))))
        {
            return Redirect::intended('/Administration');
        }
        return Redirect::route('admin.auth.login');
	}
    //Logout
    public function logout(){
        Auth::Admin()->logout();
        return Redirect::route('admin.auth.login');
    }
}