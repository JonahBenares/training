<?php 

	include("connection.php");

	$sql =  $conn->query("SELECT * FROM employees");

?>

<a href='add.php'>ADD</a><br>
<table border='1'>
	<tr>
		<td>Employee Name</td>
		<td>Birthday</td>
		<td>Age</td>
		<td>Position</td>
		<td>Company</td>
		<td>Address</td>
		<td>Phone #</td>
	</tr>
	<?php while($fetch = $sql->fetch_array()){ ?>
		<tr>
			<td><?php echo $fetch['lname'] .", ". $fetch['fname'] ." ". $fetch['mname']; ?></td>
			<td><?php echo $fetch['birthday']; ?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	<?php } ?>
</table>
	