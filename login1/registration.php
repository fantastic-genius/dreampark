<?php
include "../includes/header.inc.php";

?>
<form name="registration" action="../includes/register.inc.php" method="post">
	<table>
    	<tr>
        	<td>First Name:</td>
            <td><input type="text" name="firstName" required="required" oninvalid="this.setCustomValidity('Please enter your first name')" oninput="setCustomValidity('')"/><span>*</span></td>
        </tr>
        <tr>
        	<td>Last Name:</td>
            <td><input type="text" name="lastName" required="required" oninvalid="this.setCustomValidity('Please enter your last name')" oninput="setCustomValidity('')" /><span>*</span></td>
        </tr>
        <tr>
        	<td>Middle Name:</td>
            <td><input type="text" name="middleName" /></td>
        </tr>
        <tr>
        	<td>Class:</td>
            <td><input type="text" name="class" required="required" oninvalid="this.setCustomValidity('Please enter your class')" oninput="setCustomValidity('')" /><span>*</span></td>
        </tr>
        <tr>
        	<td>Gender</td>
            <td><input id="male" type="radio" name="gender" value="male" required="required" />Male <input id="female" type="radio" name="gender" value="female" />Female <span>*</span></td>
            
        </tr>
        <tr>
        	<td>Username</td>
            <td><input type="text" name="userName" required="required" oninvalid="this.setCustomValidity('Please enter your username')" oninput="setCustomValidity('')"/><span>*</span></td>
        </tr>
        <tr>
        	<td>Password:</td>
            <td><input type="password" name="password" required="required" oninvalid="this.setCustomValidity('Please enter your password')" oninput="setCustomValidity('')" /><span>*</span></td>
        </tr>
        <tr>
        	<td><input type="submit" name="register" value="Register" /></td>
        </tr>
 
    </table>
</form>


</body>
</html>