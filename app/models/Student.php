<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Student extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;



	protected $fillable = array('name', 
								'lastName',
								'email',
								'password',
								'dob',
								'pob',
								'gender',
								'level',
								'option',
								'section',
								'group',
								'subGroup');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'students';
	//Login Rules
	public static $rules = [
		'email' => 'required|email|exists:students,email',
		'password' => 'required'
	];
	public static $updateRules = [
		'name' => 'required'
	];
	//Error Messages
	public static $messages = [
		'required' => 'Le champ :attribute est obligatoire'
	];
	//Signup Rules
	public static $signupRules = [
		'email' => 'required|email|unique:students,email',
		'password' => 'required',
		'password_confirmation' => 'required|same:password'
	];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	//Student Propreties*
	//level Proprety
	public static $level = [
		'L1' => 'L1',
		'L2' => 'L2',
		'L3' => 'L3',
		'M1' => 'M1',
		'M2' => 'M2',
	];
	//Option Proprety
	public static $options = [
		'Trans commun' => 'Trans commun',
		'Automatique' => 'Automatique',
		'Informatique' => 'Informatique',
	];
	//Section Proprety
	public static $sections = [
		'1' => 'Section 1',
		'2' => 'Section 2',
		'3' => 'Section 3',
	];
	//Group Proprety
	public static $groups = [
		'1' => 'Groupe 1',
		'2' => 'Groupe 2'
	];

	//SubGroup Proprety
	public static $subgroups = [
		'1' => 'Sous-Groupe 11',
		'2' => 'Sous-Groupe 21'
	];

}
