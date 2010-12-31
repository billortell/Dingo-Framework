<?php

class validate_controller
{
	public $autoload_library = array('validate');
	
	// Length
	public function length()
	{
		var_dump(valid::length(1,10,'evan'));
		var_dump(valid::length(1,10,'evan byrne'));
		var_dump(valid::length(1,10,'evan thomas byrne'));
		var_dump(valid::length(1,10,''));
		var_dump(valid::length(1,3,'evan'));
		var_dump(valid::length(4,10,'evan'));
		var_dump(valid::length(5,10,'evan'));
		var_dump(valid::length(5,6,'evan b'));
	}
}