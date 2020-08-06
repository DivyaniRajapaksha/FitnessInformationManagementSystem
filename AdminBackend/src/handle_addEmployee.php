<script src="jquery-3.5.1.min.js"></script>
<script src="sweetalert2.all.min.js"></script>

<?php include 'properties.php';?>

<?php
    //session_start();

    $sql = "CREATE TABLE IF NOT EXISTS employee (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        street VARCHAR(30) NOT NULL,
        lane VARCHAR(30) NOT NULL,
        city VARCHAR(30) NOT NULL,
        nic VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        mobileNo INT NOT NULL,
        designation VARCHAR(30) NOT NULL,
        password VARCHAR(8) NOT NULL        
        )";
        
        if ($conn->query($sql) === TRUE) {
          echo "Table admin created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }

   
        $id = $_POST['id'];
        $name = $_POST['name'];
        $street = $_POST['street'];
        $lane = $_POST['lane'];
        $city = $_POST['city'];
        $nic = $_POST['nic'];
        $email = $_POST['email'];
        $mobileno = $_POST['mobileno'];
        $designation = $_POST['designation'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

    $sql = "INSERT INTO `employee` (`id`, `name`, `street`, `lane`, `city`, `nic`, `email`, `mobileNo`, `designation`, `password`) 
    VALUES ('".$_POST["id"]."', '".$_POST["name"]."', '".$_POST["street"]."', '".$_POST["lane"]."', '".$_POST["city"]."', '".$_POST["nic"]."', '".$_POST["email"]."','".$_POST["mobileno"]."', '".$_POST["designation"]."', '".$_POST["password"]."');";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    
        echo "<script>$(function(){  Swal.fire(
        'Thank You!',
        'Employee added successfully!',
        'success'
        ) });
        
        </script>";
        // sleep(3);
        header("location: index.php");
        
    
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>