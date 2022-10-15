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
        function function_register()
      {

         var nm=document.getElementById("nm").value;
        var add=document.getElementById("add").value;
        var phone=document.getElementById("phone").value;
        var email=document.getElementById("email").value;
        var unm=document.getElementById("unm").value;
        var pwd=document.getElementById("pwd").value;

        var reg_nm="^[A-Za-z]{3,30}$";
        var reg_add="^[A-Za-z0-9]{5,50}$";
        var reg_email="^ ([A_Za-z0-9])+\@([A_Za-z0-9])+\.([A_Za-z]){2,4}$";
        var reg_phone="^[0-9]{10}$";

        if (nm==""||add==""||phone==""||email==""||unm==""||pwd=="") 
        {
          alert("All fields are must !!");
        }
        else
        {
          if (nm.match(reg_nm))
           {
            if (add.match(reg_add))
             {
              if (phone.match(reg_phone))
               {
                if (email.match(reg_email))
                 {
                  if (unm.match(reg_nm)) 
                  {
                    if (pwd.lenght==8) 
                    {
                      alert("Registered successfully !!") ;
                    }
                    else
                    {
                      $("#error_pwd").text("Invalid password");
                        $("#error_pwd").css("color","red");
                    }
                    
                  }
                  else
                  {
                    $("#error_unm").text("Invalid Username");
                      $("#error_unm").css("color","red");
                  }
                 }
                 else
                 {
                  $("#error_email").text("Invalid Email ID");
                    $("#error_email").css("color","red");
                 }
               }
               else
               {
                $("#error_phone").text("Invalid Mobile number");
                  $("#error_phone").css("color","red");
               }
             }
             else
             {
              $("#error_add").text("Invalid Address");
                $("#error_add").css("color","red");
             }
           }
           else
           {
            $("#error_nm").text("Invalid name");
              $("#error_nm").css("color","red");
           }
        }

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
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item active"><a href="regestration.php" class="nav-link">Sign Up</a></li>
	          
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
            <h1 class="mb-2 bread">Sign Up</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Register <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-wrap-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img img-1 mr-md-2" style="background-image: url(images/about_bg2.jpg); width: 600;"></div>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	                    <div class="heading-section mb-4 my-5 my-md-0">
	          	            <span class="subheading">Register</span>
	                    </div>
                        <br><br>

                        <form action="insert.php" method="post">
	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <label for="">Name</label>
	                                        <input type="text" class="form-control" placeholder="Your Name" name="name" id="nm">
	                                        <p><span id="error_nm"></span></p>
	                                </div>
	                            </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" placeholder="Your Email" name="email" id="email">
                                        <p><span id="error_email"></span></p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" placeholder="Phone" name="phoneno" id="phone">
                                        <p><span id="error_phone"></span></p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" id="add" placeholder="Address" name="address">
                                        <p><span id="error_add"></span></p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" id="unm" placeholder="username" name="username">
                                        <p><span id="error_unm"></span></p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
                                        <p><span id="error_pwd"></span></p>
                                    </div>
                                </div>
	                
                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5" id="btn" onclick="function_register()">   
                                    </div>
                                </div>

                                <div class ="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label>Already Registered?</label>
                                        <a href="login.php"><u>&nbsp;&nbsp; Sign In</u></a>
                                    </div>
                                </div>
	                        </div>
	                    </form>
                     
	      		    </div>
				</div>
			</div>
	</section>


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
    <script src="js/main.js"></script>

</body>
</html>