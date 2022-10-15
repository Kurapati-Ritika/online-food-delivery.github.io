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
      function display_msg()
      {
        var nm=document.getElementById("unm").value;
        var p=document.getElementById("pwd").value;

        var reg_nm="^[A-Za-z]{2,30}$";
        if (nm==" " ||p=="") 
        {
          alert("Fill fields...");
        }
        else
        {
          if (nm.match(reg_nm))
          {
            if (p.length>=6)
            {
              //window.open("orderfood.php");
              alert("Login Successful");
            }
            else
            {
              $("#error_pwd").text("Invalid password");
              $("#error_pwd").css("color","red");
            }
          }
          else
          {
            $("#error_nm").text("Invalid username");
            $("#error_nm").css("color","red");
            
          }
        }
      }

    </script>
  </head>

  <body>
 
    <section class="ftco-section img" style="background-image: url(images/about_bg2.jpg)" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
          	<div class="heading-section ftco-animate mb-5 text-center">
	            <h2 class="mb-4">Login</h2>
	          </div>

            <form action="user_login.php" method="post" name="login">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="text" class="form-control" placeholder="Your Name" name="username" id="unm">
                      <p><span id="error_nm"></span></p>
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
                        <center><input type="Submit" value="Submit" name="login" id="login" class="btn btn-primary py-3 px-5" onclick="display_msg()"></center>
                    </div>
                  </div>
                </div>
              </form>
              
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
  <script src="js/main.js"></script>

 
</body>
</html>