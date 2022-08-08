<?php
	include("connection.php");
	$id=$_GET['id'];

	$query = $conn->query("DELETE FROM students WHERE student_id = '$id'");

	if($query){
		echo "Successfully deleted!";
	} else {
		echo "Error";
	}
?>