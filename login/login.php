<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Page</title>
</head>

<body>
<form name="login" action="" method="post">
	<table>
        <tr>
        	<td>Username</td>
            <td><input type="text" name="userName" required="required" /></td>
        </tr>
        <tr>
        	<td>Password:</td>
            <td><input type="password" name="password" required="required" /></td>
        </tr>
        <tr>
        	<td><input type="submit" name="login" value="Login" /></td>
        </tr>
 
    </table>
</form>
<?php
	global $query;
	if (isset($_POST["login"])) {
		$link = mysqli_connect("localhost","root","", "dreampark");
		/*if (!$link) {
		   die('Could not connect: ' . mysqli_error());
		}
		else
		{
		echo "Mysql Connected Successfully";
		}*/
		//$user_name = $_POST["userName"];
		$password = md5($_POST["password"]); 
		$query = mysqli_query($link, "SELECT * FROM user_registration WHERE UserName = '$_POST[userName]' &&
		 Password = '$password'");
		$count = mysqli_num_rows($query);
		$data = mysqli_fetch_array($query);
		echo $count;
		if ($count>0) {
		 
		 	//echo "<a href='user.php?" .$data['UserID'] . "'>" . "Welcome, " . $data['FirstName'] . " " . $data['LastName'] . " to Dream Park School" .  "</a>";
			/*?>
            <script type="text/javascript">
				window.location("user.php?
			
            <?php
				$data['UserId'];
			?>
				
				 ");
			</script>
            
            <?php*/
			header("location: user.php?id=" . $data['UserID']);
		}
		else
		{
		?>
        <script type="text/javascript">
		 	alert("username or password incorrect!");
		 </script>
        <?php
		}
			
	
		
	}

?>
</body>
</html>