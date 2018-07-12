<table>
	<tr>
		<th style="padding-right: 50px;">First Name</th>
        <th style="padding-right: 50px;">Last Name</th>
        <th style="padding-right: 50px;">Middle Name</th>
        <th style="padding-right: 50px;">Class</th>
        <th style="padding-right: 50px;">Gender</th>
        <th style="padding-right: 50px;">Username</th>
        
    </tr>
    	<?php

			$link = mysqli_connect("localhost", "root", "", "dreampark");
			//$id = $_GET['id'];
			$query = mysqli_query($link, "SELECT * FROM user_registration");
			
				
			$count = mysqli_num_rows($query);
			if ($count > 0) {
			 
				while($data = mysqli_fetch_assoc($query)) {
					echo "<form name='delete' action='delete.php' method='post'>
						<tr><td><input type='hidden' name='id' value='" . $data['UserID']  ."'/>
						<input type='text' name='firstName' value='" . $data['FirstName'] . "' required='required' /></td>
						<td><input type='text' name='lastName' value='" . $data['LastName'] . "' required='required' /></td>
						<td><input type='text' name='middleName' value='" . $data['MiddleName'] . "'/></td>
						<td><input type='text' name='class' value='" . $data['Class'] . "' required='required' /></td>
						<td><input type='text' name='gender' value='" . $data['Gender'] . "' required='required' /></td>
						<td><input type='text' name='username' value='" . $data['Username'] . "' required='required' /></td>
						<td><input type='submit' name='delete' value='Delete'/></td>
						<td><input type='submit' name='update' value='Update'/></td>
					</tr></form>";
					
							
				}
			}
				
			
			
		?>

</table>


