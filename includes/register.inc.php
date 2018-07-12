<?php
	include "../includes/constant.php";
	
	$first_name = $last_name = $middle_name = $class = $gender = $username = $password = "";
	$first_name_err = $last_name_err = $class_err = $gender_err = $username_err = $password_err = "";
		
		
		$first_name = test_input($_POST['firstName']);
		$last_name = test_input($_POST['lastName']);
		$middle_name = test_input($_POST['middleName']);
		$class = test_input($_POST['class']);
		$gender = test_input($_POST['gender']);
		$username = test_input($_POST['userName']);
		$password = test_input(md5($_POST['password']));
		
	
	function test_input($data_input){
		$data_input = trim($data_input);
		$data_input = stripslashes($data_input);
		$data_input = htmlspecialchars($data_input);
		return $data_input;
	}

	
	
	if (isset($_POST["register"])) {
		$link = mysqli_connect("$DB_HOST","$DB_USERNAME","$DB_PASSWORD", "$DB_NAME");
		
		if (!$link) {
		   die('Could not connect: ' . mysqli_error());
		}
		$query = mysqli_query($link, "INSERT INTO user_registration(FirstName,LastName,MiddleName,Class,Gender,UserName,Password) VALUES('$first_name', '$last_name', '$middle_name', '$class', '$gender', '$username', '$password')");
		if ($query) {
		 ?>
         <script type="text/javascript">
		 	alert("You have succesfully registered!");
		 </script>
         <?php
		 header("Location: ../login1/registration.php");
		}
		else
		{
		?>
        <script type="text/javascript">
		 	alert("you have not filled a field properly. check through your data");
		 </script>
        <?php
		}
			
	
		
	}

?>