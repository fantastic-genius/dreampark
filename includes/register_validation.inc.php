<?php
	global $first_name_err; global $last_name_err; global $class_err;
	global $gender_err; global $username_err; global $password_err;
	$first_name = $last_name = $middle_name = $class = $gender = $username = $password = "";
	$first_name_err = $last_name_err = $class_err = $gender_err = $username_err = $password_err = "";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(empty($_POST['firstName'])){
			$first_name_err = "First Name is required";
		}else{
			$first_name = test_input($_POST['firstName']);
		}
		if(empty($_POST['lastName'])){
			$last_name_err = "Last Name is required";
		}else{
			$last_name = test_input($_POST['lastName']);
		}
		if(empty($_POST['middleName'])){
			$middle_name = "";
		}else{
			$middle_name = test_input($_POST['middleName']);
		}
		if(empty($_POST['class'])){
			$class_err = "Class is required";
		}else{
			$class = test_input($_POST['class']);
		}
		if(empty($_POST['gender'])){
			$gender_err = "Gender is required";
		}else{
			$gender = test_input($_POST['gender']);
		}
		if(empty($_POST['username'])){
			$username_err = "Username is required";
		}else{
			$username = test_input($_POST['username']);
		}
		if(empty($_POST['password'])){
			$password_err = "Password is required";
		}else{
			$password = test_input(md5($_POST['password']));
		}
		
	}
	
	function test_input($data_input){
		$data_input = trim($data_input);
		$data_input = stripslashes($data_input);
		$data_input = htmlspecialchars($data_input);
		return $data_input;
	}
	

?>