<?php
	session_start();
	
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
  <style>
    .wow:first-child {
      visibility: hidden;
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
 	 			<li><a href="#home">Home</a></li>
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

  <!-- Start Home -->
  <section class="home wow flash" id="home">
  	 <div class="container">
  	 	  <h1 class="wow slideInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
  	 	  <h1 class="wow slideInRight" data-wow-delay="1s">We are ready to <span>fit you</span></h1>
  	 </div>
  	  <!-- go down -->
  	      <a href="#about" class="go-down">
  	      	  <i class="fa fa-angle-down" aria-hidden="true"></i>
  	      </a>
  	  <!-- go down -->

  </section>
  <!-- End Home -->


 <!-- Start About -->
  <section class="about" id="about">
  	  <div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box wow bounceInUp">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about1.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>A Dedicated Coach</h4>
                           <p>Our certified personal trainers are committed to supporting you in transforming your health and achieving your fitness goals</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   	<div class="box wow bounceInUp" data-wow-delay="0.2s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about2.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Best Training</h4>
                       	   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about3.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Build Perfect Body</h4>
                       	   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  </div>
  	  </div>
  </section>
 <!-- End About -->


 <!-- Start Service -->
 <section class="service" id="service">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="text box wow slideInLeft">
                  <h2>Services</h2>
                  <p>ABC. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                  <a href="" class="btn">Start Now</a>
 		 	  </div>
 		 	  <div class="accordian box wow slideInRight">
 		 	  	    <div class="accordian-container active">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Cardiovascular Equipment</h4>
 		 	  	    		<span class="fa fa-angle-down"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Strength Training Equipment</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Group Fitness Class</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Other Services</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  </div>
 		 </div>
 	</div>
 </section>
 <!-- End Service -->

<!-- Start Classes -->
<section class="classes" id="classes">
	<div class="container">
		 <div class="content">
		 	  <div class="box img wow slideInLeft">
		 	  	 <img src="images/class2.png" alt="classes" />
		 	  </div>
		 	  <div class="box text wow slideInRight">
		 	  	 <h2>Our Classes</h2>
		 	  	 <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p> -->
		 	  	<div class="class-items">
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-img">
                     	 <img src="images/class1.jpg" alt="classes" />
                     	 <div class="price">
                     	 	 $99
                     	 </div>
                     </div>
                     <div class="item-text">
                     	  <h4>BUILD OUR FLAGSHIP CLASS!</h4>
                     	  <p>BUILD is our flagship class for Achievers who are looking to build strength and confidence! We saw a need in the fitness industry for a strength-focused group class that incorporated safe and smart programming </p>
                     	  
                     </div>
		 	  	 </div>
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-text">
                     	  <h4>METCON FOR A GREAT HIT WORKOUT!</h4>
                     	  <p>METCON (Metabolic Conditioning) is for Achievers who are looking for a high intensity workout that challenges their energy system! MetCon classes are conducted in a circuit-style with varying work to rest ratios.</p>
                     	  
                     </div>
                     <div class="item-img">
                     	 <img src="images/class1.jpg" alt="classes" />
                     	 <div class="price">
                     	 	 $99
                     	 </div>
                     </div>
		 	  	 </div>
		 	  	</div>
		 	  </div>
		 </div>
	</div>
</section>
<!-- End Classes -->

<!-- Start Today -->
 <section class="start-today">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="box text wow slideInLeft">
 		 	  	 <h2>Start Your Training Today</h2>
 		 	  	 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
 		 	  	 <a href="" class="btn">Start Now</a>
 		 	  </div>
 		 	  <div class="box img wow slideInRight">
 		 	  	 <img src="images/gallery4.jpg" alt="start today" />
 		 	  </div>

 		 </div>
 	</div>
 </section>
<!-- End Start Today -->

<!-- Start Schedule -->
  <section class="schedule" id="schedule">
  	 <div class="container">
  	 	  <div class="content">
  	 	  	   <div class="box text wow slideInLeft">
  	 	  	   	   <h2>Classes Schedule</h2>
						   <p style="text-align: left";>You can book by sending us an email or dropping a text via WhatsApp +94 (0)771234567</p> 	 	  	   	   
  	 	  	   	   <img src="images/schedule1.png" alt="schedule" />
  	 	  	   </div>
  	 	  	   <div class="box timing wow slideInRight">
                   <table class="table">
                   	 <tbody>
                   	 	<tr>
                   	 		<td class="day">Monday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Body Building <br/> 9:00 to 10:00 AM</td>                   	 		
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Tuesday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Body Building <br/> 9:00 to 10:00 AM</td>                   	 		
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Wednesday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Yoga<br/> 9:00 to 10:00 AM</td>                   	 		
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Thursday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Body Building <br/> 9:00 to 10:00 AM</td>                   	 		
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Friday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>METCON<br/> 9:00 to 10:00 AM</td>                   	 		
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Saturday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Bulid Our Flagship<br/> 9:00 to 10:00 AM</td>                   	 		
                   	 	</tr>
                   	 </tbody>
                   </table>
  	 	  	   </div>
  	 	  </div>
  	 </div>
  </section>
<!-- End Schedule -->


 <!-- Start Price -->
  <section class="price-package" id="price">
  	 <div class="container">
  	 	  <h2>Choose Your Package</h2>
  	 	  <p class="title-p">Our training packages have been designed to always give our maximum service to our customers. You can get our one month, three months, or annual membership with many additional benefits. All of these packages can be changed to suit your requirements.</p>
  	 	  <div class="content">
  	 	  	  <div class="box wow bounceInUp">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
								Rs.1,500
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/price1.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
							<h3>One Month</h3>
							<p>Weight Training and Cardio</p> 
							<p>No Time Restrictions</p>
							<p>Yoga Sessions</p>							
							<p>Get Free WiFi</p>
  	 	  	  	  	   	  <a href="#contact" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
								Rs.4,000
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/price2.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
							<h3>Three Months</h3>
							<p>Weight Training and Cardio</p> 
							<p>Free meal plan</p>
							<p>No Time Restrictions</p>
							<p>Get Free WiFi</p>
  	 	  	  	  	   	  <a href="#contact" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	  Rs.12,000
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/price3.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
							<h3>One Year</h3>
							<p>Weight Training and Cardio</p> 
							<p>No Time Restrictions</p>
							<p>Free online training memebership</p>
							<p>Get Free WiFi</p>
  	 	  	  	  	   	  <a href="#contact" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  </div>
  	 </div>
  </section>
 <!-- End Price -->

 <!-- Start Contact -->
  <section class="contact" id="contact">
     <div class="container">
        <div class="content">
            <div class="box form wow slideInLeft">
               <form action="customerRequest.php" method="post">
                  <input type="text" placeholder="Enter Name" name="name">
                  <input type="text" placeholder="Enter Email" name="email">
				  <input type="text" placeholder="Enter Mobile" name="mobile">
				  <select name="package">
				  <option style="color:gray" value="null" disabled selected>Select Your Plan</option>
  					<option value="Monthly">Monthly Plan</option>
 					<option value="Three">Three Months Plan </option>
  					<option value="Six">Six Months Plan</option>
  					<option value="Annual">Annual Plan</option>
				</select>
                  <textarea placeholder="Enter Message If you have Any" name="message"></textarea>
                  <button type="submit">Send Message</button>
               </form>
            </div>
            <div class="box text wow slideInRight">
                 <h2>Get Connected with Gym</h2>
                  <p class="title-p"></p>
                  <div class="info">
                      <ul>
                          <li><span class="fa fa-map-marker"></span> No.196/A, Dalugama, Kelaniya.</li>
                          <li><span class="fa fa-phone"></span> +94 112548741</li>
                          <li><span class="fa fa-envelope"></span> info@fitorfight.com</li>
                      </ul>
                  </div>
                  <div class="social">
                       <a href=""><span class="fa fa-facebook"></span></a>
                       <a href=""><span class="fa fa-linkedin"></span></a>
                       <a href=""><span class="fa fa-skype"></span></a>
                       <a href=""><span class="fa fa-youtube-play"></span></a>
                  </div>

                  <div class="copy">
                      PoweredBy &copy; The WebShala
                  </div>
            </div>
        </div>
     </div>
  </section>
 <!-- End Contact -->



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






