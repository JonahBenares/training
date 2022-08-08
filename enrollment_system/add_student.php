<?php
	include("connection.php");

	if(isset($_POST['add_student'])){
		$insert = $conn->query("INSERT INTO students (lastname, firstname, middlename, address, phone_no, year_level, hs_graduated, hs_year_graduated) VALUES ('$_POST[lastname]', '$_POST[firstname]', '$_POST[middlename]', '$_POST[address]','$_POST[phone_no]','$_POST[year_level]','$_POST[hs_graduated]','$_POST[hs_year_graduated]')");
		if($insert){
			echo "Successfully saved!";
		} else {
			echo "Error";
		}
	}
?>

<form method="POST">
	<table border="1">
		<thead>
			<tr>
				<td colspan='2'><center>ADD NEW STUDENT</center></td>
			</tr>
		</thead>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lastname"></td>
	    </tr>
	    <tr>
	    	<td>First Name</td>
	    	<td><input type="text" name="firstname"></td>
	    </tr>
	    <tr>
	    	<td>Middle Name</td>
	    	<td><input type="text" name="middlename"></td>
	    </tr>
	    <tr>
	    	<td>Address</td>
	    	<td><textarea name="address"></textarea></td>
	    </tr>
	    <tr>
	    	<td>Phone No.</td>
	    	<td><input type="text" name="phone_no"></td>
	    </tr>
	    <tr>
	    	<td>Year Level</td>
	    	<td><input type="text" name="year_level"></td>
	    </tr>
	    <tr>
	    	<td>Highshchool Graduated</td>
	    	<td><input type="text" name="hs_graduated"></td>
	    </tr>
	    <tr>
	    	<td>Highshchool Graduated Year</td>
	    	<td><input type="text" name="hs_year_graduated"></td>
	    </tr>
	    <tr>
	    	<td colspan='2'><center><input type="submit" name="add_student" value="ADD NEW STUDENT"></center></td>
	    </tr>
	</table>
</form>