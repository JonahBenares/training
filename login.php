<?php
session_start();
	include("enrollment_system/connection.php");

	if(isset($_POST['login'])){

		$uname = $_POST['username'];
		$pw= md5($_POST['password']);
		
		$sql = $conn->query("SELECT * FROM students where username = '$uname' AND password = '$pw'");
		$rows = $sql->num_rows;
		if($rows>0){
			$sql2 = $conn->query("SELECT * FROM students where username = '$uname' AND password = '$pw'");
			$fetch = $sql2->fetch_array();

			$_SESSION['id']=$fetch['student_id'];
			$_SESSION['fullname']=$fetch['firstname'] . " " . $fetch['lastname'];
			

		}
		
	}


?>

<form method="POST">
	Username:<input type='text' name='username'>
	Password:<input type='password' name='password'>
	<input type='submit' name='login' value="Login">
</form>
