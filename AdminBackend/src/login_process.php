<?php include 'properties.php';?>
<br>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($conn,$_POST['name']);
   $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
   
   $sql = "SELECT id FROM employee WHERE name = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  // $active = $row['active'];
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
   
   if($row['name'] == $myusername && $row['password'] == $mypassword){
    echo "Login Successful! Welcome ".$row['name']; 
 }
 else{
    echo "Login Failed!";
 }
}

?>