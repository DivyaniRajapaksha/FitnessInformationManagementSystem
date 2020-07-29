
  <script src="jquery-3.5.1.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>
<?php include 'properties.php';?>
<?php
          session_start();
          $sql = "SELECT id FROM member WHERE username =  '".$_POST["username"]."' and password =  '".$_POST["password"]."'";
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         // $active = $row['active'];
          
          $count = mysqli_num_rows($result);
          
          // If result matched $myusername and $mypassword, table row must be 1 row
            
          if($count == 1) {
             //session_register("username");
             $_SESSION['login_user'] = $_POST["username"];
             echo "Session started!";
            
            header("location: profile.php");
          }else {
             $error = "Your Login Name or Password is invalid";
             echo "<script>$(function(){  Swal.fire(
               'Error!',
               'Username and Password Invalid!',
               'error'
               ) });
             
               </script>";
          }
     
        
?>