<?php 
//db connection
    include("connection.php");

    $id=$_GET['id'];

    $query = $conn->query("SELECT * FROM colleges WHERE college_id = '$id'"); 
    $fetch = $query->fetch_assoc(); 

    if(isset($_POST['edit_college'])){
        $sql = $conn->query("UPDATE colleges SET college_name='$_POST[college_name]' WHERE college_id='$id'");
        if($sql){
            echo "<script>alert('Succesfully Edited'); </script>";
            echo "<script>document.location='list_college.php'</script>";
        } else {
            echo "error";
        }
    }
?>

<form method="POST">
    <table >
        <tr>
            <td>College Name:</td>
            <td><input type="text" name="college_name" value="<?php echo (empty($id) ? '' : $fetch['college_name']); ?>"></td>
        </tr>
        <tr>
            <td colspan='2'><center><input type="submit" name="edit_college" value="Edit College"></center></td>
        </tr>
    </table>
    <input type='hidden' name='id' value="<?php echo (empty($id) ? '' : $id); ?>">
</form>
