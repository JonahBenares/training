<?php
	include("connection.php");
	$id=$_GET['id'];

	$query = $conn->query("DELETE FROM courses WHERE course_id = '$id'");

	if($query){
		echo "<script>alert('Successfully Deleted'); </script>";
		echo "<script>document.location='list_course.php'</script>";
	} else {
		echo "Error";
	}
?>