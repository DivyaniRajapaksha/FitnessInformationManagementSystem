<?php include 'properties.php';?>
<?php
    $sql = "CREATE TABLE  IF NOT EXISTS  Member  (
        id VARCHAR(10)  PRIMARY KEY,
        fname VARCHAR(30) NOT NULL,
        plan VARCHAR(30) NOT NULL,
        age INT,
        email VARCHAR(50),
        username VARCHAR(50),
        password VARCHAR(20),
        mobile INT,
        trainer_id VARCHAR(500)
        )";
        
        if ($conn->query($sql) === TRUE) {
          echo "Table Requests created successfully";
        } else {
          echo "Error creating Requests table: " . $conn->error;
        }
        $sql = "INSERT INTO  Member  (id,fname, plan, age,email, mobile,username ,password, trainer_id)
        VALUES ('".$_POST["id"]."','".$_POST["name"]."', '".$_POST["package"]."', ".$_POST["age"].", '".$_POST["email"]."',".$_POST["mobileno"].",'".$_POST["username"]."','".$_POST["password"]."','".$_POST["trainer_id"]."')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
     
        echo "<script>$(function(){  Swal.fire(
          'Thank You!',
          'Your request has been submiited!',
          'success'
          ) });
        
          </script>";
         // sleep(3);
          header("location: index.php");
        
       
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
?>