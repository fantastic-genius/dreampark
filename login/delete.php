<?php
$link = mysqli_connect("localhost", "root", "", "dreampark");
if(isset($_POST['delete'])){
	$id = $_POST['id'];
	$query = mysqli_query($link, "DELETE FROM user_registration WHERE UserID = '$id'"); //to add LIMIT 1
	if($query){
		header("Location: admin.php");
	}else{
		echo "Error deleting record". mysqli_error($link);
	}
}

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$data_update = mysqli_query($link, "UPDATE user_registration  
				SET FirstName = '$_POST[firstName]', 
					LastName = '$_POST[lastName]',
					MiddleName = '$_POST[middleName]',
					Class = '$_POST[class]',
					Gender = '$_POST[gender]',
					Username = '$_POST[username]'
				WHERE UserID = '$id'");
		if($data_update){
			
			?>
            <script type="text/javascript">
				alert("Update successful");
				<?php
				header("Location: admin.php");
				?>
			</script>
            <?php
				
	}
}
		

?>