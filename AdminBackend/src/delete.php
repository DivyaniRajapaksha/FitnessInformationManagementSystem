<?php include 'properties.php';?>
<?php


$sql = "DELETE FROM Requests WHERE email= '".$_POST["deleteMail"]."' ";

if ($conn->query($sql) === TRUE) {
     echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("location: view_request.php"); 
?>