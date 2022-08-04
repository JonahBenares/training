<?php
	include("connection.php");
	$id=$_GET['id'];

	$query = $conn->query("DELETE FROM employees WHERE employee_id = '$id'");

	if($query){
		echo "Successfully deleted!";
	} else {
		echo "Error";
	}
?>