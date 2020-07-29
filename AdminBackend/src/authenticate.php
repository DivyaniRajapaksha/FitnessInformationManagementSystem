<?php include 'properties.php';?>
<br>
<?php

session_start();

   $sql = "SELECT * FROM employee WHERE email =  '".$_POST["username"]."' and password =  '".$_POST["password"]."'";
   $result = mysqli_query($conn,$sql);
   $result = $conn->query($sql);
  if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
      //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      $_SESSION['login_admin'] =  $row["name"];
      $_SESSION['login_designation'] =  $row["name"];
      
    }
    header("location: index.php");
  }
?>