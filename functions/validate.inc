<?php
	function validateEmail(&$errors, $field_list, $field_name)
	{
		
		$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
			$errors[$field_name] = 'Email Required';
		else if (!preg_match($pattern, $field_list[$field_name]))
			$errors[$field_name] = 'Invalid Email';
	}
	
	function validateUser(&$errors, $field_list, $field_name)
	{
		
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
			$errors[$field_name] = 'User Name Required';
		
			
	}
	
	function validatePassword(&$errors, $field_list, $field_name, $field_name2){
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
			$errors[$field_name] = 'Passwords Required';
		else if(strlen($field_list[$field_name]) < 8)
			$errors[$field_name] = 'Passwords needs to be more than eight characters';
		else if($field_list[$field_name2] != $field_list[$field_name])
			$errors[$field_name] = 'Passwords Do Not Match';


			
	}
?>