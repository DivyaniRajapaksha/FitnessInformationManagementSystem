<?php include 'properties.php';?>
<?php
    session_start();
    $sql = "UPDATE `member` 
            SET `fname`='".$_SESSION['fname']."',`email`='".$_SESSION['email']."',`username`='".$_SESSION['username']."',`password`='".$_SESSION['password']."',`mobile`='".$_SESSION['mobille']."' WHERE id LIKE '".$_SESSION['id']."' ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();


?>