<?php
    session_start();

    if (isset($_SESSION['login_admin'])) {
        //header("location: fittnessClub.php");
    }else{
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>FitnessHub admin Dashboard </title>

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
                        <span class="user-name">Jhon
                            <strong>Smith</strong>
                        </span>
                        <span class="user-role">Administrator</span>
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
                                        <a href="#">Add Employee</a>
                                    </li>
                                    <li>
                                        <a href="view_employee.php">View Employee</a>
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
          <main class="page-content">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <div class="row">
                <form class="form-group mt-3" method="post" action="handle_addEmployee.php">
                        <div><h3 style="color:#0065b3 ">ADD EMPLOYEE</h3></div>
                        <label class="mt-3"><span style="color: #0065b3">Trainer ID</span></label>
                        <input type="text" name="id" class="form-control" style="width: 700px;" placeholder="Enter Your ID" required> 
                        <label class="mt-3"><span style="color: #0065b3">Trainer Name</span></label>
                        <input type="text" name="name" class="form-control" placeholder="James" required>
                        <label class="mt-3"><span style="color: #0065b3">Address</span></label>
                        <input type="text" name="street" class="form-control" placeholder="No.888"><br>
                        <input type="text" name="lane" class="form-control" placeholder="Queens Road"><br>
                        <input type="text" name="city" class="form-control" placeholder="London">
                        <label class="mt-3"><span style="color: #0065b3">NIC</span></label>
                        <input type="text" name="nic" class="form-control" placeholder="888888888888" required>
                        <label class="mt-3"><span style="color: #0065b3">Email</span></label>
                        <input type="email" name="email" id="email" class="form-control" pattern=".+@gmail.com" size="30" placeholder="youremail@gmail.com" required>
		                <label class="mt-3"><span style="color: #0065b3">Contact Number</span></label>
                        <input type="tel" name="mobileno" class="form-control" pattern="[0-9]{10}" maxlength="11" placeholder="0778541236" required>
                        <label class="mt-3"><span style="color: #0065b3">Designation</span></label><br>
                        <select name="designation" class="form-control">
                            <option value="null" class="form-control" disabled selected>Select Your Designation</option>
                            <option value="Admin" class="form-control">Admin</option>
                            <option value="Trainer"class="form-control">Trainer</option>                            
                        </select>
                        <label class="mt-3"><span style="color: #0065b3">Password</span></label>
                        <input type="password" name='password' class="form-control" placeholder="Enter a Password" required>
                        <label class="mt-3"><span style="color: #0065b3">Confirm Password</span></label>
                        <input type="password" name='cpassword' class="form-control" placeholder="Confirm the password" required>
		                
		                <button class="btn btn-dark mt-3" type="submit" name="trainer">ADD</button>
                    </form>
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

