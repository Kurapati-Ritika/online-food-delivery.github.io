<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Food Delivery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
      function contact_info()
      {
        var nm=document.getElementById("name").value;
        var email=document.getElementById("email").value;
        var sub=document.getElementById("sub").value;
        var msg=document.getElementById("msg").value;

        var reg="^[A_Za-z]{3,100}$";
        var reg_email="^([A_Za-z0-9])+\@([A_Za-z0-9])+\.([A_Za-z]){2,4}$";

        if (nm=="" || email==""||sub==""||msg=="") 
        {
          alert("All fields are must!!");
        }
        else
        {
          if (nm.match(reg)) 
          {
            if (sub.match(reg))
             {
              if (msg.match(reg))
               {
                if (email.match(reg_email))
                 {
                  alert("Your response send successfully..");
                 }
                 else
                 {
                  //alert("Invalid email ID");
                  $("#error_email").text("Invalid Email ID");
                  $("#error_email").css("color","red");
                 }
               }
               else
               {
                //alert("Invalid message");
                $("#error_msg").text("Invalid message");
                $("#error_msg").css("color","red");
        
               }
             }
             else
             {
          //      alert("Invalid Subject");
                $("#error_sub").text("Invalid subject");
                $("#error_sub").css("color","red");
        
             }
          }
          else
          {
            //alert("Invalid name");
                $("#error_nm").text("Invalid Name");
                $("#error_nm").css("color","red");
        
          }
        }

        //alert("success");
      }
    </script>
  </head>
  <body>
 	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Food Delivery</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
	          <?php 
                if(!isset($_SESSION['username'])) : 
            ?>
            <li class="nav-item"><a href="register.php" class="nav-link">Sign Up</a></li>
            <?php endif ?>

            <?php   
                if(isset($_SESSION['username'])) : ?>
                <li class="nav-item"><p class="nav-link">Welcome, <?php echo $_SESSION['username']; ?>!</p></li>
					      <li class="nav-item"><a href="user_logout.php" class="nav-link">Logout</a></li>
            <?php endif ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Order</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
      <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
          <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
            <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
             <form action="" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name" id="name">
                <p><span id="error_nm"></span></p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="email" id="email">
                <p><span id="error_email"></span></p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="sub" id="sub">
                <p><span id="error_sub"></span></p>
              </div>
              <div class="form-group">
                <textarea  cols="30" rows="7" class="form-control" placeholder="Message" name="msg" id="msg"></textarea>
                <p><span id="error_msg"></span></p>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5"  name="submit" id="btn" onclick="function_contact()">
              </div>
            </form>
           
          </div>
          
        </div>
        </div>  
      </div>
    </section>
    

		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4 font-weight-bold">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Address:</span><a href=""> 198 Navi Peth,Solapur</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Phone:</span><a href="">+ 1235 2355 98</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Email:</span><a href="">shri@yoursite.com</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
		
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
 <!--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script> -->
  <script src="js/main.js"></script>
    
  </body>
</html>