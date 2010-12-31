<?php

class user_controller
{
	public $autoload_library = array('db','session','user');
	
	// View
	public function index()
	{
		echo user::id();
	}
	
	// Create
	public function create()
	{
		user::create(array(
			'username'=>'evan',
			'email'=>'evantbyrne@gmail.com',
			'password'=>'test',
			'type'=>'admin'
		));
	}
	
	// Delete
	public function delete()
	{
		user::delete('evan');
	}
	
	// Login
	public function login()
	{
		user::login('evan','test');
		echo user::id();
	}
	
	// Logout
	public function logout()
	{
		user::logout();
	}
}