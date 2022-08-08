<?php 
  include("connection.php");
// collect data in db
  $sql =  $conn->query("SELECT * FROM students");
?>
<table border="1">
  <thead align="center">
    <td colspan="11"><a href="add_student.php">ADD NEW STUDENT</a></td>
  </thead>
  <tr align="center">
      <td>STUDENT ID</td>
      <td>LAST NAME</td>
      <td>FIRST NAME</td>
      <td>MIDDLE NAME</td>
      <td>ADDRESS</td>
      <td>PHONE NO.</td>
      <td>YEAR LEVEL</td>
      <td>HIGHSCHOOL GRADUATED</td>
      <td>HIGHSCHOOL YEAR GRADUATED</td>
      <td colspan="2">ACTION</td>
    </tr>
<!-- to display data in page -->
  <?php while($fetch = $sql->fetch_array()){ ?>
      <tr>
        <td><?php echo $fetch['student_id']?></td>
        <td><?php echo $fetch['lastname']?></td>
        <td><?php echo $fetch['firstname']?></td>
        <td><?php echo $fetch['middlename']?></td>
        <td><?php echo $fetch['address']?></td>
        <td><?php echo $fetch['phone_no']?></td>
        <td><?php echo $fetch['year_level']?></td>
        <td><?php echo $fetch['hs_graduated']?></td>
        <td><?php echo $fetch['hs_year_graduated']?></td>
        <td><a href="edit_student.php?id=<?php echo $fetch['student_id']?>">EDIT</a></td>
        <td><a href="delete_student.php?id=<?php echo $fetch['student_id']?>">DELETE</a></td>
      </tr>
  <?php }?> 
</table>

