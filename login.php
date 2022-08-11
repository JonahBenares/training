<?php
session_start();
	include("connection.php");

	if(isset($_POST['login'])){

		$uname = $_POST['username'];
		$pw= md5($_POST['password']);
		echo "SELECT * FROM students where username = '$uname' AND password = '$pw'";
		$result = $conn->query("SELECT * FROM students where username = '$uname' AND password = '$pw'");
		$rows = $result->num_rows;
		
		echo $rows;
		
	}

?>

<form method="POST">
	Username:<input type='text' name='username'>
	Password:<input type='password' name='password'>
	<input type='submit' name='login' value="Login">
</form>