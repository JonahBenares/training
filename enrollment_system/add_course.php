<?php
	include("connection.php");
  	include("index.php");
    // $sql =  $conn->query("SELECT * FROM colleges");

	if(isset($_POST['add_course'])){
		$insert = $conn->query("INSERT INTO courses (course_name, college_id) VALUES ('$_POST[course_name]', '$_POST[college_id]')");
		if($insert){
			echo "<script>alert('Succesfully Added'); </script>";
			echo "<script>document.location='list_course.php'</script>";
		} else {
			echo "Error";
		}
	}
?>

<form method="POST">
	<table border="1">
		<thead>
			<tr>
				<td colspan='2'><center>Add Course</center></td>
			</tr>
		</thead>
	    <tr>
			<td>Course Name</td>
			<td><input type="text" name="course_name"></td>
	    </tr>
	    <tr>
			<td>College</td>
			<td>
				<select name="college_id">
					<option value="">---Select College---</option>
					<?php 
				      	$sql = "SELECT * FROM colleges ";
				      	$res =  $conn->query($sql);
				      	while($fetch = $res->fetch_array()){ ?>
				      		<option value="<?php echo $fetch['college_id'] ?>"><?php echo $fetch['college_name']; ?></option>
 						<?php } ?>
			    </select>
			</td>
	    </tr>
	    <tr>
	    	<td colspan='2'><center><input type="submit" name="add_course" value="Add Course"></center></td>
	    </tr>
	</table>
</form>
<form>
	
</form>
