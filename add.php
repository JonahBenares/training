<?php 

	include("connection.php");
	

	if(isset($_POST['add_employee'])){

		$bday = date("Y-m-d", strtotime($_POST['birthday']));

	

		$insert = $conn->query("INSERT INTO employees (fname, mname, lname,birthday,position,company,address,phone_no) VALUES ('$_POST[fname]', '$_POST[mname]', '$_POST[lname]', '$bday', '$_POST[position]','$_POST[company]','$_POST[address]','$_POST[phone]')");
		if($insert){
			echo "Successfully saved!";
		} else {
			echo "Error";
		}
	}

?>

<form method="POST">
	<table >
		<tr>
			<td>First Name:</td>
			<td><input type="text" name="fname"></td>
		</tr>
		<tr>
			<td>Middle Name:</td>
			<td><input type="text" name="mname"></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" name="lname"></td>
		</tr>
		<tr>
			<td>Birthday:</td>
			<td><input type="date" name="birthday"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><textarea name='address' rows='5' cols='25'></textarea></td>
		</tr>
		<tr>
			<td>Phone #:</td>
			<td><input type="number" name="phone"></td>
		</tr>
		<tr>
			<td>Position:</td>
			<td><input type="text" name="position"></td>
		</tr>
		<tr>
			<td>Company:</td>
			<td><input type="text" name="company"></td>
		</tr>
		<tr>
			<td colspan='2'><center><input type="submit" name="add_employee" value="ADD EMPLOYEE"></center></td>
		</tr>
	</table>
</form>
