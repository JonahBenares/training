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
		<td></td>
	</tr>
	<?php while($fetch = $sql->fetch_array()){ ?>
		<?php 
			$bday=$fetch['birthday'];
			$query = $conn->query("SELECT FROM employees WHERE birthday = '$bday'");
			$currentDate = date("d-m-Y");
			$age = date_diff(date_create($bday), date_create($currentDate));	
		?>
		<tr>
			<td><?php echo $fetch['lname'] .", ". $fetch['fname'] ." ". $fetch['mname']; ?></td>
			<td><?php echo $fetch['birthday']; ?></td>
			<td><?php echo $age->format("%y");?></td>
			<td><?php echo $fetch['position']; ?></td>
			<td><?php echo $fetch['company']; ?></td>
			<td><?php echo $fetch['address']; ?></td>
			<td><?php echo $fetch['phone_no']; ?></td>
			<td><a href="update.php?id=<?php echo $fetch['employee_id']; ?>">[Edit]</a>
				<a href="delete.php?id=<?php echo $fetch['employee_id']; ?>">[Delete]</a></td>
		</tr>
	<?php } ?>
</table>
		