<?php
	include("connection.php");
	$id=$_GET['id'];

	$query = $conn->query("DELETE FROM colleges WHERE college_id = '$id'");

	if($query){
		echo "<script>alert('Successfully Deleted'); </script>";
		echo "<script>document.location='list_college.php'</script>";
	} else {
		echo "Error";
	}
?>