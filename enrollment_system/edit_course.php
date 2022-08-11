<?php 
	include("connection.php");
	$id=$_GET['id'];
	$query = $conn->query("SELECT * FROM courses WHERE course_id = '$id'"); 
	$fetch = $query->fetch_assoc(); 

	if(isset($_POST['edit_course'])){
		$sql = $conn->query("UPDATE courses SET course_name='$_POST[course_name]', college_id='$_POST[college_id]' WHERE course_id='$id'");
		if($sql){
			echo "<script>alert('Succesfully Edited'); </script>";
			echo "<script>document.location='list_course.php'</script>";
		} else {
			echo "error";
		}
	}

?>
<form method="POST">
	<table >
		<tr>
			<td>Course Name:</td>
			<td><input type="text" name="course_name" style="width:100%" value="<?php echo (empty($id) ? '' : $fetch['course_name']); ?>"></td>
		</tr>
		<tr>
			<td>College</td>
		
			<td>
				<select name="college_id">
					<option value="<?php echo (empty($id) ? '' : $fetch['college_id']); ?>">
					<?php
						$sql1 =  $conn->query("SELECT * FROM courses INNER JOIN colleges ON courses.college_id = colleges.college_id WHERE course_id = '$id'");
							while($fetch = $sql1->fetch_array()){?>
							<?php echo (empty($id) ? '' : $fetch['college_name']); ?>	
					</option>
					<?php }?>
							<?php 
					      	$sql = "SELECT * FROM colleges ";
					      	$res =  $conn->query($sql);
					      	while($fetch = $res->fetch_array()){ 	
					    ?>
				      		<option value="<?php echo $fetch['college_id'] ?>"><?php echo $fetch['college_name']; ?></option>
 						<?php }?>
			    </select>
			</td>
		</tr>
		<tr>
			<td colspan='2'><center><input type="submit" name="edit_course" value="Edit Course"></center></td>
		</tr>
	</table>
	<input type='hidden' name='id' value="<?php echo (empty($id) ? '' : $id); ?>">
</form>





