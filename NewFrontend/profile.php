
<?php
    session_start();

    if (isset($_SESSION['login_user'])) {
        //header("location: fittnessClub.php");
    }else{
        header("location: login.php");
    }
?>
<?php include 'properties.php';?>
<?php
  $username=$_SESSION['login_user'];
  $sql = "SELECT * FROM `member` WHERE username LIKE '".$username."'";
  $result = $conn->query($sql);
  if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
      //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      $_SESSION['id'] =  $row["id"];
      $_SESSION['fname'] =  $row["fname"];
      $_SESSION['plan'] =  $row["plan"];
      $_SESSION['email'] =  $row["email"];
      $_SESSION['mobile'] =  $row["mobile"];
      $_SESSION['username'] =  $row["username"];
      $_SESSION['trainer_id'] =  $row["trainer_id"];
    }
  } else {
    echo "0 results";
  }
  mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fitness HUB</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	  <script src="jquery-3.5.1.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.wow:first-child {
      visibility: hidden;
    }

    .card1 {

  max-width: 600px;
  margin: auto;
  text-align: center;
  font-family: Robota;
  color:#0065b3; 
  float:left;
  padding-left:250px;
}

.title {
  color: grey;
  font-size: 18px;
}

#button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #0065b3;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

#button:hover, a:hover {
  opacity: 0.7;
}
.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
    margin-top:20px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
    float:right;
    margin-left:10px;
    width:900px;
    
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
    float:right;
    margin-right:350px;
}
</style>
  
  
</head>
<body>
 
 <!-- Start Header  -->
 <header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">Fitness <span>HUB</span></a>
 	 	</div>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="fittnessClub.php">Home</a></li>
 	 			<li><a href="#about">About</a></li>
 	 			<li><a href="#service">Services</a></li>
 	 			<li><a href="#classes">Classes</a></li>
 	 			<li><a href="#schedule">Schedule</a></li>
 	 			<li><a href="#price">Price</a></li>
 	 			<li><a href="#contact">Contact</a></li>
				<li><a href="profile.php">Profile</a></li>
				
			<?php
   				 

    			if (isset($_SESSION['login_user'])) {
					//echo "<li><a href="">Logout</a></li>";
					echo '<li><a href="logOut.php">logout</a></li>';
    			}
			?>
 	 		</ul>
 	 	</div>
 	 </div>
 </header>

  <!-- End Header  -->
  <br/><br/>
  <section  id="home">
      <br/><br/>
        <h1 style="text-align:center;font:Roboto;color:#0065b3;font-size:50px;">User Profile</h1>

        <div class="card1">
        <br/>
            <img src="images/gym_bg.jpg" alt="John" style="width:100%">
            <h4><?php echo $_SESSION['login_user']; ?></h4>
            <p class="title">Welcome to FitnessHub</p>
               
                <div style="margin: 24px 0;">
              <a href="#"><i class="fa fa-dribbble"></i></a> 
              <a href="#"><i class="fa fa-twitter"></i></a>  
                 <a href="#"><i class="fa fa-linkedin"></i></a>  
                 <a href="#"><i class="fa fa-facebook"></i></a> 
            </div>
         <p><button id="button">Contact</button></p>
        </div>
     
           
        </section>
        <div class="form-content">
              
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" >
                                <label>Name:</label>
                                <input type="text" class="form-control" placeholder="fname" value="<?php echo $_SESSION['fname']  ?>"/>
                            </div>
                            <div class="form-group">
                            <label>Plan:</label>
                                <input type="text" class="form-control" placeholder="plan" value="<?php echo $_SESSION['plan']  ?>" readOnly/>
                            </div>
                            <div class="form-group">
                            <label>Username:</label>
                                <input type="text" class="form-control" placeholder="username" value="<?php echo $_SESSION['username']  ?>"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Mobile Number:</label>
                                <input type="text" class="form-control" placeholder="mobile" value="<?php echo $_SESSION['mobile']  ?>"/>
                            </div>
                            <div class="form-group">
                            <label>Email:</label>
                                <input type="text" class="form-control" placeholder="email" value="<?php echo $_SESSION['email']  ?>"/>
                            </div>
                            <div class="form-group">
                            <label>Trainer:</label>
                                <input type="text" class="form-control" placeholder="trainer_id" value="<?php echo $_SESSION['trainer_id']  ?>" readOnly/>
                            </div>
                        </div>
                    </div><br/><br/>
                    <button type="button" class="btnSubmit">Submit</button>
                    <br/><br/>
                   
                </div>
               
                    
  <!-- Start Home -->

            
  <br/>

  <?php
if (isset($_POST['action'])) {
    echo '<br />The ' . $_POST['submit'] . ' submit button was pressed<br />';
}
?>
                
  <!-- End Home -->
  <!-- jquery -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })      
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash; 

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})

</script>
<script src="js/wow.min.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();
  </script>

</body>
</html>