<?php

class AdministrationController extends \BaseController {

	//Admin Show Dashboard
	public function dashboard(){
		$data = Auth::Admin()->get();
		$admin = Administration::findOrFail($data->id);
		return View::make('admin.dashboard')->withAdmin($admin);}

	//Show Students
	public function showStudents(){
		$students = Student::all();
		if(Auth::Admin()->check()){
			return Response::json($students);
		}
		else{
			return Redirect::intended('/');
		}
		
	}
	//Edit Students
	public function editStudents($id){
		$data = Input::all();
		DB::table('students')
		->where('id', $id)
		->update($data);
		return Response::json(array('success' => true));
	}
	//Create Students
	public function createStudents(){
		$data = Input::all();
		DB::table('students')
		->insert($data);
		return Response::json(array('success' => true));
	}
	//Delete Students
	public function deleteStudents($id){
		DB::table('students')
		->where('id', $id)
		->delete();
		return Response::json(array('success' => true));
	}
	//Show Teachers
	public function showTeachers(){
		$teachers = Teacher::all();
		if(Auth::Admin()->check()){
			return Response::json($teachers);
		}
		else{
			return Redirect::intended('/');
		}
		
	}
	//Edit Teachers
	public function editTeachers($id){
		$data = Input::all();
		DB::table('teachers')
		->where('id', $id)
		->update($data);
		return Response::json(array('success' => true));
	}

	//Create Teachers
	public function createTeachers(){
		$data = Input::all();
		DB::table('teachers')
		->insert($data);
		return Response::json(array('success' => true));
	}
	//Delete Teachers
	public function deleteTeachers($id){
		DB::table('teachers')
		->where('id', $id)
		->delete();
		return Response::json(array('success' => true));
	}
	
}