<?php
    include("connection.php");
    include("index.php");
    $sql =  $conn->query("SELECT * FROM courses");
    $sql1 =  $conn->query("SELECT * FROM courses INNER JOIN colleges ON courses.college_id = colleges.college_id");
?>
<table border="1">
  <thead align="center">
    <td colspan="11"><a href="add_course.php">Add Course</a></td>
  </thead>
  <tr align="center">
    <td>Course Name</td>
    <td>College Name</td>
    <td colspan="2">Action</td>
  </tr>

  <?php while($fetch = $sql->fetch_array()){ ?>
  <?php while($fetch = $sql1->fetch_array()){ ?>
    <tr>
      <td><?php echo $fetch['course_name']?></td>
      <td><?php echo $fetch['college_name']?></td>
      <td><a href="edit_course.php?id=<?php echo $fetch['course_id']?>">Edit</td>
      <td><a href="delete_course.php?id=<?php echo $fetch['course_id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
    </tr>
  <?php }?> 
  <?php }?> 
</table>



