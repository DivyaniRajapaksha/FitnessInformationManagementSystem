<?php
    session_start();

    if (isset($_SESSION['login_admin'])) {
        //header("location: fittnessClub.php");
    }else{
        header("location: login.php");
    }
?>
<?php include 'properties.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>FitnessHub admin Dashboard </title>
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
    </style>
    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- using local links -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
</head>

<body>
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                 <!-- sidebar-brand  -->
                 <div class="sidebar-item sidebar-brand">
                    <a href="#" ">Admin Dashboard </a>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong><?php echo $_SESSION['login_admin']; ?></strong>
                        </span>
                        <span class="user-role"> <?php echo $_SESSION['login_designation']; ?></span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <div class="sidebar-item sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" sidebar-item sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span style="color:#0065b3 ;">FitnessHub</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="index.php">
                                <i class="fa fa-tachometer-alt"></i>
                                <span class="menu-text">Dashboard</span>
                                <span class="badge badge-pill badge-danger">3</span>
                            </a>
                           
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span class="menu-text">Members</span>
                                
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="add_member.php">Add Member

                                        </a>
                                    </li>
                                    <li>
                                        <a href="view_members.php">View Member</a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-building"></i>
                                <span class="menu-text">Branches</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="add_branch.php">Add Branches</a>
                                    </li>
                                    <li>
                                        <a href="view_branch.php">View Branches</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="view_request.php">
                                <i class="fa fa-globe"></i>
                                <span class="menu-text">Requests</span>
                                <span class="badge badge-pill badge-warning">New</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-id-card"></i>
                                <span class="menu-text">Employees</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="add_employee.php">Add Employee</a>
                                    </li>
                                    <li>
                                        <a href="#">View Employee</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="logOut.php">
                            <i class="fa fa-power-off"></i>
                            <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
         </nav>
          <!-- page-content  -->
          <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <div class="row">
                <div><h2 style="color:#0065b3 ">EMPLOYEE DETAILS</h2></div>
                <table class="table">
  <thead style="Background-color:#0065b3;">
    <tr>
      <th scope="col" style="color:#ffff;">Employee ID</th>
      <th scope="col" style="color:#ffff;">Name</th>
      <th scope="col" style="color:#ffff;">Street</th>
      <th scope="col" style="color:#ffff;">Lane</th>
      <th scope="col" style="color:#ffff;">City</th>
      <th scope="col" style="color:#ffff;">NIC</th>
      <th scope="col" style="color:#ffff;">Email</th>
      <th scope="col" style="color:#ffff;">Mobile No</th>
      <th scope="col" style="color:#ffff;">Designation</th>      
      <th scope="col" style="color:#ffff;">Password</th>     
     
    </tr>
  </thead>
  <tbody>
   
    <?php
    $sql = "SELECT * FROM `employee`";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["email"]. "<br>";
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['street'] . "</td>";
        echo "<td>" . $row['lane'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['nic'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobileNo'] . "</td>";
        echo "<td>" . $row['designation'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";

        
        }
        } else {
              echo "0 results";
        }
        ?>
  </tbody>
</table>
                </div>
            </div>
        </main>
        <!-- page-content" -->
    </div>
      
    <!-- page-wrapper -->

    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- using local scripts -->
    <!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->


    <script src="js/main.js"></script>
</body>

</html>