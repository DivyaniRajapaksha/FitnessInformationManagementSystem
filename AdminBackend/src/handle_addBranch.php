<script src="jquery-3.5.1.min.js"></script>
<script src="sweetalert2.all.min.js"></script>

<?php include 'properties.php';?>

<?php
    //session_start();

    $sql = "CREATE TABLE IF NOT EXISTS branches (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        street VARCHAR(30) NOT NULL,
        lane VARCHAR(30) NOT NULL,
        city VARCHAR(30) NOT NULL,
        category VARCHAR(30) NOT NULL,
        mobileNo INT NOT NULL
             
        )";
        
        if ($conn->query($sql) === TRUE) {
          echo "Table branches created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }

        $id = $_POST['id'];
        $name = $_POST['name'];
        $street = $_POST['street'];
        $lane = $_POST['lane'];
        $city = $_POST['city'];
        $category = $_POST['category'];
        $mobileno = $_POST['mobileno'];
       
    $sql = "INSERT INTO `branches` (`id`, `name`, `street`, `lane`, `city`, `category`, `mobileNo`) 
    VALUES ('".$_POST["id"]."', '".$_POST["name"]."', '".$_POST["street"]."', '".$_POST["lane"]."', '".$_POST["city"]."','".$_POST["category"]."', '".$_POST["mobileno"]."');";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    
        echo "<script>$(function(){  Swal.fire(
        'Thank You!',
        'Branch added successfully!',
        'success'
        ) });
        
        </script>";
        // sleep(3);
        //header("location: fittnessClub.php");
        
    
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
       

?>