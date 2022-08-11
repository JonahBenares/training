<?php 
//db connection
	include("connection.php");

	$id=$_GET['id'];

//call data from database
	$query = $conn->query("SELECT * FROM students WHERE student_id = '$id'"); 
//to display data in page
	$fetch = $query->fetch_assoc(); 

//trigger if button is click
	if(isset($_POST['edit_student'])){
//query to update data in database
		$sql = $conn->query("UPDATE students SET lastname='$_POST[lastname]', firstname='$_POST[firstname]', middlename='$_POST[middlename]',
		address='$_POST[address]', phone_no='$_POST[phone_no]', year_level='$_POST[year_level]', hs_graduated='$_POST[hs_graduated]',
		hs_year_graduated='$_POST[hs_year_graduated]' WHERE student_id='$id'");
//checker output
		if($sql){
			echo "<script>alert('Succesfully Edited'); </script>";
			echo "<script>document.location='list_student.php'</script>";
		} else {
			echo "error";
		}
	}

?>

<form method="POST">
	<table >
		<tr>
			<td>First Name:</td>
			<td><input type="text" name="firstname" value="<?php echo (empty($id) ? '' : $fetch['firstname']); ?>"></td>
		</tr>
		<tr>
			<td>Middle Name:</td>
			<td><input type="text" name="middlename" value="<?php echo (empty($id) ? '' : $fetch['middlename']); ?>"></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" name="lastname" value="<?php echo (empty($id) ? '' : $fetch['lastname']); ?>"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><textarea name='address'><?php echo (empty($id) ? '' : $fetch['address']); ?></textarea></td>
		</tr>
		<tr>
			<td>Phone No:</td>
			<td><input type="text" name="phone_no" value="<?php echo (empty($id) ? '' : $fetch['phone_no']); ?>"></td>
		</tr>
		<tr>
			<td>Year Level:</td>
			<td><input type="text" name="year_level" value="<?php echo (empty($id) ? '' : $fetch['year_level']); ?>"></td>
		</tr>
		<tr>
			<td>Highshchool Graduated</td>
			<td><input type="text" name="hs_graduated" value="<?php echo (empty($id) ? '' : $fetch['hs_graduated']); ?>"></td>
		</tr>
		<tr>
			<td>Highshchool Year Graduated</td>
			<td><input type="text" name="hs_year_graduated" value="<?php echo (empty($id) ? '' : $fetch['hs_year_graduated']); ?>"></td>
		</tr>
		<tr>
			<td colspan='2'><center><input type="submit" name="edit_student" value="Edit Student"></center></td>
		</tr>
	</table>
	<input type='hidden' name='id' value="<?php echo (empty($id) ? '' : $id); ?>">
</form>
