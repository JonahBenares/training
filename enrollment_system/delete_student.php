<?php
	include("connection.php");
	$id=$_GET['id'];

	$query = $conn->query("DELETE FROM students WHERE student_id = '$id'");

	if($query){
		echo "<script>alert('Successfully Deleted'); </script>";
		echo "<script>document.location='list_student.php'</script>";
	} else {
		echo "Error";
	}
?>