<?php
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
  </head>

  <body>
    <!--Nav Bar-->
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php" style="font-size: 25px">Food Delivery</a>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <?php 
                if(!isset($_SESSION['username'])) : ?>
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
    
    <!--Home page-->
    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(images/res_bg1.jpg);">
      	<div class="overlay"></div>
          <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4">Best Restaurant</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/des_bg1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4">Sweet Course</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/drink_bg1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4">Beverges</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Cuisines-->
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="featured">
    					<div class="row">
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/indian1.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Indian Food</h3>
				              <p><span>Breakfast</span>, <span>Starter</span>, <span>Lunch</span>, <span>Dinner</span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/italian1.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Italian Food</h3>
                      <p><span>Breakfast</span>, <span>Starter</span>, <span>Lunch</span>, <span>Dinner</span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/mexican1.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Mexican Food</h3>
                      <p><span>Breakfast</span>, <span>Starter</span>, <span>Lunch</span>, <span>Dinner</span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/thai1.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Thai Food</h3>
                      <p><span>Breakfast</span>, <span>Starter</span>, <span>Lunch</span>, <span>Dinner</span></p>
			              </div>
			            </div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <!--About Us-->
		<section class="ftco-section ftco-wrap-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img img-1 mr-md-2" style="background-image: url(images/about1.jpg);"></div>
						<div class="img img-2 ml-md-2" style="background-image: url(images/about2.png);"></div>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">About us</span>
	          </div><br><br>
	          <p>We deliver online food ordering solutions for your restaurants, bars, pubs, fast-food joints and hotels. We provide quick services that enables you to enjoy your meal. You can access the restaurant menu, place their order and order dishes.</p>
					</div>
				</div>
			</div>
		</section>

    <!--Special dishes-->
    <section class="ftco-section">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
          </div>
        </div>
        <div class="row no-gutters d-flex align-items-stretch">
          <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
            <div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/break_idli.jpg);"></div>
              <div class="text d-flex align-items-center">
                <div>
                  <div class="d-flex">
                    <div class="one-half">
                      <h3>Idli</h3>
                    </div>
                    <div class="one-forth">
                      <span class="price">$29</span>
                    </div>
                  </div>
                  <br>
                  <div class="col-md-12 mt-3">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@Idli">Add to cart</button>
                    </div>
                  </div>	
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
            <div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/break_dosa.jpg);"></div>
              <div class="text d-flex align-items-center">
                <div>
                  <div class="d-flex">
                    <div class="one-half">
                      <h3>Dosa</h3>
                    </div>
                    <div class="one-forth">
                      <span class="price">$29</span>
                    </div>
                  </div>
                  <br>
                  <div class="col-md-12 mt-3">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@dosa">Add to cart</button>
                    </div>
                  </div>
              </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
            <div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(images/break_puribhaji.jpg);"></div>
              <div class="text d-flex align-items-center">
                <div>
                  <div class="d-flex">
                    <div class="one-half">
                      <h3>Puri Bhaji</h3>
                    </div>
                    <div class="one-forth">
                      <span class="price">$29</span>
                    </div>
                  </div>
                  <br>
                  <div class="col-md-12 mt-3">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@puribhaji">Add to cart</button>
                    </div>
                  </div>
              </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
            <div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(images/break_egg.jpg);"></div>
              <div class="text d-flex align-items-center">
                <div>
                  <div class="d-flex">
                    <div class="one-half">
                      <h3>Egg Ommlet</h3>
                    </div>
                    <div class="one-forth">
                      <span class="price">$29</span>
                    </div>
                  </div>
                  <br>
                  <div class="col-md-12 mt-3">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@Egg">Add to cart</button>
                    </div>
                  </div>
              </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
            <div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/break_pavbhaji.jpg);"></div>
              <div class="text d-flex align-items-center">
                <div>
                  <div class="d-flex">
                    <div class="one-half">
                      <h3>Pav Bhaji</h3>
                    </div>
                    <div class="one-forth">
                      <span class="price">$29</span>
                    </div>
                  </div>
                  <br>
                  <div class="col-md-12 mt-3">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@pavbhaji">Add to cart</button>
                    </div>
                  </div>
              </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
            <div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/break_wraps.jpg);"></div>
              <div class="text d-flex align-items-center">
                <div>
                  <div class="d-flex">
                    <div class="one-half">
                      <h3>Wraps</h3>
                    </div>
                    <div class="one-forth">
                      <span class="price">$29</span>
                    </div>
                  </div>
                  <br>
                  <div class="col-md-12 mt-3">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@wraps">Add to cart</button>
                    </div>
                  </div>
              </div>
              </div>
            </div>
          </div>                        
      </div>
    </section>
    
    <!--Order food form-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Place Order</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="orderfood.php" method="post">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Phone No</label>
                <input type="number" class="form-control" id="phoneno" name="phoneno">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" name="submit" value="Done">
              </div>
            </form>
          </div>
				</div>
			</div>
		</div>
    
    <!--Contact Us-->
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
    
    <!--Footer-->
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
  <script src="js/main.js"></script>
    
  </body>
</html>