<?php include 'properties.php';?>
<?php


$sql = "DELETE FROM `Member` WHERE email= '".$_POST["deleteMail"]."' ";

if ($conn->query($sql) === TRUE) {
     echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("location: view_members.php"); 
?>