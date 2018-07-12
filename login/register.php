<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Page</title>
</head>

<body>
<form name="registration" action="" method="post">
	<table>
    	<tr>
        	<td>First Name:</td>
            <td><input type="text" name="firstName" required="required" /></td>
        </tr>
        <tr>
        	<td>Last Name:</td>
            <td><input type="text" name="lastName" required="required" /></td>
        </tr>
        <tr>
        	<td>Middle Name:</td>
            <td><input type="text" name="middleName" required="required" /></td>
        </tr>
        <tr>
        	<td>Class:</td>
            <td><input type="text" name="class" required="required" /></td>
        </tr>
        <tr>
        	<td>Gender</td>
            <td><input type="radio" name="gender" value="male" checked />Male <input type="radio" name="gender" value="female" />Female</td>
        </tr>
        <tr>
        	<td>Username</td>
            <td><input type="text" name="userName" required="required" /></td>
        </tr>
        <tr>
        	<td>Password:</td>
            <td><input type="password" name="password" required="required" /></td>
        </tr>
        <tr>
        	<td><input type="submit" name="register" value="Register" /></td>
            
        </tr>
 
    </table>
</form>
<?php
	if (isset($_POST["register"])) {
		$link = mysqli_connect("localhost","root","", "dreampark");
		/*if (!$link) {
		   die('Could not connect: ' . mysqli_error());
		}
		else
		{
		echo "Mysql Connected Successfully";
		}*/
		$password = md5($_POST["password"]);
		$query = mysqli_query($link, "INSERT INTO user_registration(FirstName,LastName,MiddleName,Class,Gender,UserName,Password) VALUES('$_POST[firstName]', '$_POST[lastName]', '$_POST[middleName]', '$_POST[class]', '$_POST[gender]', '$_POST[userName]', '$password')");
		if ($query) {
		 ?>
         <script type="text/javascript">
		 	alert("You have succesfully registered!");
		 </script>
         <?php
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
</body>
</html>