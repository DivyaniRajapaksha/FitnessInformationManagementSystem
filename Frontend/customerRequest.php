
  <script src="jquery-3.5.1.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>


<?php include 'properties.php';?>
<br/>
<?php

    // sql to create table
$sql = "CREATE TABLE  IF NOT EXISTS  Requests  (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    plan VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    mobile INT,
    description VARCHAR(500),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table Requests created successfully";
    } else {
      echo "Error creating Requests table: " . $conn->error;
    }
    $today = date("j- n- Y");
    $sql = "INSERT INTO Requests (fname, plan, email, mobile, description)
    VALUES ('".$_POST["name"]."', '".$_POST["package"]."', '".$_POST["email"]."',".$_POST["mobile"].",'".$_POST["message"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
 
    echo "<script>$(function(){  Swal.fire(
      'Thank You!',
      'Your request has been submiited!',
      'success'
      ) });
    
      </script>";
     // sleep(3);
      //header("location: fittnessClub.php");
    
   
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

    
    $conn->close();
?>
<script>
  myFunction(){
    console.log("hi");
    Swal.fire(
    'Good job!',
    'You clicked the button!',
    'success'
    )
  }
</script>
