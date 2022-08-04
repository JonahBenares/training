<?php 

	include("connection.php");

	$id=$_GET['id'];

	$query = $conn->query("SELECT * FROM employees WHERE employee_id = '$id'");
	$fetch = $query->fetch_assoc();

	if(isset($_POST['update_employee'])){

		$sql = $conn->query("UPDATE employees SET fname='$_POST[fname]', lname='$_POST[lname]', mname='$_POST[mname]',
		mname='$_POST[mname]', birthday='$_POST[birthday]', address='$_POST[address]', phone_no='$_POST[phone]',
		company='$_POST[company]', position='$_POST[position]' WHERE employee_id='$_POST[id]'");

		if($sql){
			
			echo "Successfully updated!";
		} else {
			echo "error";
		}
	}

?>

<form method="POST">
	<table >
		<tr>
			<td>First Name:</td>
			<td><input type="text" name="fname" value="<?php echo (empty($id) ? '' : $fetch['fname']); ?>"></td>
		</tr>
		<tr>
			<td>Middle Name:</td>
			<td><input type="text" name="mname" value="<?php echo (empty($id) ? '' : $fetch['mname']); ?>"></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" name="lname" value="<?php echo (empty($id) ? '' : $fetch['lname']); ?>"></td>
		</tr>
		<tr>
			<td>Birthday:</td>
			<td><input type="date" name="birthday" value="<?php echo (empty($id) ? '' : $fetch['birthday']); ?>"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><textarea name='address' rows='5' cols='25'><?php echo (empty($id) ? '' : $fetch['address']); ?></textarea></td>
		</tr>
		<tr>
			<td>Phone #:</td>
			<td><input type="number" name="phone" value="<?php echo (empty($id) ? '' : $fetch['phone_no']); ?>"></td>
		</tr>
		<tr>
			<td>Position:</td>
			<td><input type="text" name="position" value="<?php echo (empty($id) ? '' : $fetch['position']); ?>"></td>
		</tr>
		<tr>
			<td>Company:</td>
			<td><input type="text" name="company" value="<?php echo (empty($id) ? '' : $fetch['company']); ?>"></td>
		</tr>
		<tr>
			<td colspan='2'><center><input type="submit" name="update_employee" value="UPDATE EMPLOYEE"></center></td>
		</tr>
	</table>

	<input type='hidden' name='id' value="<?php echo (empty($id) ? '' : $id); ?>">
</form>
