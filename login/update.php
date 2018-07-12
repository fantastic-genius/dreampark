<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update</title>
</head>

<body>


<?php
$link = mysqli_connect("localhost", "root", "", "dreampark");
$id = $_GET['id'];
$query = mysqli_query($link, "SELECT * FROM user_registration WHERE UserID = '$id'");
if($query){
	$data = mysqli_fetch_array($query);
	?>
    <form name="update" action="" method="post">
	<table>
    	<tr>
        	<td>First Name:</td>
        	<td><input type="text" name="firstName" value="<?php echo $data['FirstName'];  ?>"/></td>
        </tr>
        <tr>
        	<td>Last Name:</td>
            <td><input type="text" name="lastName" required="required" value="<?php echo $data['LastName'];  ?>" /></td>
        </tr>
        <tr>
        	<td>Middle Name:</td>
            <td><input type="text" name="middleName" required="required" value="<?php echo $data['MiddleName'];  ?>" /></td>
        </tr>
        <tr>
        	<td>Class:</td>
            <td><input type="text" name="class" required="required" value="<?php echo $data['Class'];  ?>"/></td>
        </tr>
        <tr>
        	<td>Gender</td>
            <td>
            	<input id="male" type="radio" name="gender" <?php if($data['Gender'] == "male") { echo "checked";}  ?>  value="male"/>Male 
                <input id="female" type="radio" name="gender" <?php if($data['Gender'] == "female") { echo "checked";}  ?> value="female"/>Female
             </td>
   
        </tr>
        <tr>
        	<td><input type="submit" name="update" value="Update" /></td>
        </tr>
    
    </table>

</form>
    
    <?php
	
	if (isset($_POST["update"])){
		$data_update = mysqli_query($link, "UPDATE user_registration  
				SET FirstName = '$_POST[firstName]', 
					LastName = '$_POST[lastName]',
					MiddleName = '$_POST[middleName]',
					Class = '$_POST[class]',
					Gender = '$_POST[gender]'
				WHERE UserID = '$id'");
		if($data_update){
			
			?>
            <script type="text/javascript">
				alert("Update successful");
				<?php
				header("location: update.php?id=" . $id);
				?>
			</script>
            <?php
			
		}
		
	}
	
}


?>

</body>
</html>