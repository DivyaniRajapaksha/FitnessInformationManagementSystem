<?php include 'properties.php';?>
<?php
    session_start();
    $sql = "UPDATE `member` 
            SET `fname`='".$_POST['fname']."',`email`='".$_POST['email']."',`username`='".$_POST['username']."',`password`='".$_POST['password']."',`mobile`='".$_POST['mobille']."' WHERE id LIKE  '".$_SESSION[id]."'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  echo "<script>$(function(){  Swal.fire(
    'Error!',
    'Username and Password Invalid!',
    'error'
    ) });
  
    </script>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();


?>