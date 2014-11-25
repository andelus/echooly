<?php

class Administration extends Eloquent{
	           
	protected $fillable = array();
	protected $table = 'administration';
	
	public static $rules = [
		'email' => 'required|email|exists:administration,email',
		'password' => 'required'
	];
	//Error Messages
	public static $messages = [
		'required' => 'Le champ :attribute est obligatoire'
	];

}