<?php

class session_controller
{
	public $autoload_library = array('db','session');
	
	// View
	public function index()
	{
		echo session::get('name');
	}
	
	// Set
	public function set()
	{
		session::set('name','Joe');
		echo session::get('name');
	}
	
	// Delete
	public function delete()
	{
		session::delete('name');
	}
}