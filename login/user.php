<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  ?>
<title>Untitled Document</title>
</head>

<body>
<p>Successfully Login</p><br/>
<?php
	$link = mysqli_connect("localhost", "root", "", "dreampark");
	$id = $_GET['id'];
	$query = mysqli_query($link, "SELECT * FROM user_registration WHERE UserID = '$id'"); //to add LIMIT 1
	$data = mysqli_fetch_array($query);
	echo "Welcome to Dream Park School, " . $data['FirstName'] . " " . $data['LastName'] . "</br>";
	echo "<p>Edit your profile </p><a href='update.php?id=" . $id . "'><input type='submit' value='Edit' /></a>";
	
?>


</body>
</html>