<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "CREATE DATABASE IF NOT EXISTS fitnessDB";

if ($conn->query($sql) === TRUE) {
 // echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$sql1 ="USE fitnessDB ";
if ($conn->query($sql1) === TRUE) {
    //echo "Database used successfully";
  } else {
    echo "Error using database: " . $conn->error;
  }
?>