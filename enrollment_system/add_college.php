<?php
	include("connection.php");
  	include("index.php");

	if(isset($_POST['add_college'])){
		$insert = $conn->query("INSERT INTO colleges (college_name) VALUES ('$_POST[college_name]')");
		if($insert){
			echo "<script>alert('Succesfully Added'); </script>";
			echo "<script>document.location='list_college.php'</script>";
		} else {
			echo "Error";
		}
	}
?>

<form method="POST">
	<table border="1">
		<thead>
			<tr>
				<td colspan='2'><center>Add College</center></td>
			</tr>
		</thead>
	    <tr>
			<td>College</td>
			<td><input type="text" name="college_name"></td>
	    </tr>
	    <tr>
	    	<td colspan='2'><center><input type="submit" name="add_college" value="Add College"></center></td>
	    </tr>
	</table>
</form>