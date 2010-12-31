<?php

class main_controller
{
	// API
	public $controller_api = array(
		'rest'=>array('json')
	);
	
	
	// Index
	public function index()
	{
		echo 'SWEEET!!!';
	}
	
	
	// REST API
	public function rest()
	{
		$api = api::get();
		$args = func_get_args();
		
		
		// Normal request
		if(!$api)
		{
			print_r($args);
		}
		
		// JSON API request
		else
		{
			echo json_encode($args,TRUE);
		}
	}
}