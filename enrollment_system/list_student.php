<?php 
  include("connection.php");
  include("index.php");
// collect data in db
  $sql =  $conn->query("SELECT * FROM students");
?>
<table border="1">
  <thead align="center">
    <td colspan="11"><a href="add_student.php">Add Student</a></td>
  </thead>
  <tr align="center">
      <td>Student ID</td>
      <td>Last Name</td>
      <td>First Name</td>
      <td>Middle Name</td>
      <td>Address</td>
      <td>Phone No.</td>
      <td>Year Level</td>
      <td>Highschool Graduated</td>
      <td>Highschool Year Graduated</td>
      <td colspan="2">Action</td>
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
        <td><a href="edit_student.php?id=<?php echo $fetch['student_id']?>">Edit</a></td>
        <td><a href="delete_student.php?id=<?php echo $fetch['student_id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
      </tr>
  <?php }?> 
</table>

