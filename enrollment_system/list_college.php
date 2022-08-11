<?php 
  include("connection.php");
  include("index.php");
// collect data in db
  $sql =  $conn->query("SELECT * FROM colleges");
?>
<table border="1">
  <thead align="center">
    <td colspan="11"><a href="add_college.php">Add College</a></td>
  </thead>
  <tr align="center">
      <td>College Name</td>
      <td colspan="2">Action</td>
    </tr>
<!-- to display data in page -->
  <?php while($fetch = $sql->fetch_array()){ ?>
      <tr>
        <td><?php echo $fetch['college_name']?></td>
        <td><a href="edit_college.php?id=<?php echo $fetch['college_id']?>">Edit</a></td>
        <td><a href="delete_college.php?id=<?php echo $fetch['college_id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
      </tr>
  <?php }?> 
</table>