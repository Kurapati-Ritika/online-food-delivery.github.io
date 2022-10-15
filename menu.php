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
	<!-- Nav bar -->
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
	        	<li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
	          	<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
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
            <h1 class="mb-2 bread">Specialties</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section">
    	<div class="container">
        <div class="ftco-search">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Breakfast</a>
	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Lunch</a>
	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Dinner</a>
	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Drinks</a>
	              <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Desserts</a>
	      	    </div>
	        </div>

	         <div class="col-md-12 tab-wrap">
	            <div class="tab-content" id="v-pills-tabContent">

	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
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
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@idli">Add to cart</button>
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
										</div><br>
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
								<div class="menu-img img order-md-last" style="background-image: url(images/break_wraps.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Wraps</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@wraps">Add to cart</button>
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
										</div><br>
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
										</div><br>
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
					              <div class="menu-img img" style="background-image: url(images/break_egg.jpg);"></div>
					              <div class="text d-flex align-items-center">
										<div>
						    	          	<div class="d-flex">
							    	            <div class="one-half">
							        	          <h3>Egg Omlette</h3>
							            	    </div>
							                	<div class="one-forth">
							                  		<span class="price">$29</span>
							                	</div>
							              	</div><br>
							              	<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@egg">Add to cart</button>
												</div>
											</div>	
						              	</div>
					              	</div>
					            </div>
					        </div>
					    </div>
	              </div>

	              	<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              		<div class="row no-gutters d-flex align-items-stretch">
					        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        	<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/lunch_chickenbiryani.jpg);"></div>
					              <div class="text d-flex align-items-center">
										<div>
							              	<div class="d-flex">
								                <div class="one-half">
								                  <h3>Chicken Biryani</h3>
							    	            </div>
							        	        <div class="one-forth">
							            	      <span class="price">$29</span>
							                	</div>
							              	</div><br>
							              	<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@chicken_biryani">Add to cart</button>
												</div>
											</div>	
						              	</div>
					              	</div>
					            </div>
					        </div>

							<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								<div class="menus d-sm-flex ftco-animate align-items-stretch">
									<div class="menu-img img" style="background-image: url(images/lunch_palakpaneer.jpg);"></div>
									<div class="text d-flex align-items-center">
										<div>
											<div class="d-flex">
												<div class="one-half">
													<h3>Palak Paneer</h3>
												</div>
												<div class="one-forth">
													<span class="price">$29</span>
												</div>
											</div>	<br>
											<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@paneer">Add to cart</button>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								<div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img order-md-last" style="background-image: url(images/lunch_vegpulao.jpg);"></div>
									<div class="text d-flex align-items-center">
										<div>
											<div class="d-flex">
												<div class="one-half">
													<h3>Veg Pulao</h3>
												</div>
												<div class="one-forth">
													<span class="price">$29</span>
												</div>
											</div><br>
											<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@pulao">Add to cart</button>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								<div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img order-md-last" style="background-image: url(images/lunch_mhthali.jpg);"></div>
									<div class="text d-flex align-items-center">
										<div>
											<div class="d-flex">
												<div class="one-half">
													<h3>Maharashtrian Thali</h3>
												</div>
												<div class="one-forth">
													<span class="price">$29</span>
												</div>
											</div><br>
											<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@thali">Add to cart</button>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								<div class="menus d-sm-flex ftco-animate align-items-stretch">
									<div class="menu-img img" style="background-image: url(images/lunch_malaikofta.jpg);"></div>
									<div class="text d-flex align-items-center">
										<div>
											<div class="d-flex">
												<div class="one-half">
													<h3>Malai Kofta</h3>
												</div>
												<div class="one-forth">
													<span class="price">$29</span>
												</div>
											</div><br>
											<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@kofta">Add to cart</button>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								<div class="menus d-sm-flex ftco-animate align-items-stretch">
									<div class="menu-img img" style="background-image: url(images/lunch_punjabthali.jpeg);"></div>
									<div class="text d-flex align-items-center">
										<div>
											<div class="d-flex">
												<div class="one-half">
													<h3>Punjabi Thali</h3>
												</div>
												<div class="one-forth">
													<span class="price">$29</span>
												</div>
											</div><br>
											<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@punjabi_thali">Add to cart</button>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
					    </div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img" style="background-image: url(images/dinner_lemonchicken.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Lemon Chicken</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@lemn_chicken">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img" style="background-image: url(images/dinner_kabab.jpg);"></div>
									<div class="text d-flex align-items-center">
										<div>
											<div class="d-flex">
												<div class="one-half">
													<h3>Guilt-Free Galouti Kebab  </h3>
												</div>
												<div class="one-forth">
													<span class="price">$29</span>
												</div>
											</div><br>
											<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@kabab">Add to cart</button>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								<div class="menus d-sm-flex ftco-animate align-items-stretch">
									<div class="menu-img img order-md-last" style="background-image: url(images/dinner_eggcurry.jpg);"></div>
										<div class="text d-flex align-items-center">
											<div>
											<div class="d-flex">
												<div class="one-half">
													<h3>Egg Curry</h3>
												</div>
												<div class="one-forth">
													<span class="price">$29</span>
												</div>
											</div><br>
											<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@eggcurry">Add to cart</button>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								<div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img order-md-last" style="background-image: url(images/dinner_vegsoup.jpg);"></div>
									<div class="text d-flex align-items-center">
										<div>
											<div class="d-flex">
												<div class="one-half">
													<h3>Vegetable Soup</h3>
												</div>
												<div class="one-forth">
													<span class="price">$29</span>
												</div>
											</div><br>
											<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@vegsoup">Add to cart</button>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								<div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img" style="background-image: url(images/dinner_vegsalad.jpg);"></div>
									<div class="text d-flex align-items-center">
										<div>
											<div class="d-flex">
												<div class="one-half">
													<h3>Vegetable Salad</h3>
												</div>
												<div class="one-forth">
													<span class="price">$29</span>
												</div>
											</div><br>
											<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@vegsalad">Add to cart</button>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								<div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img" style="background-image: url(images/dinner_vegpasta.jpg);"></div>
									<div class="text d-flex align-items-center">
										<div>
											<div class="d-flex">
												<div class="one-half">
													<h3>Vegetable Pasta</h3>
												</div>
												<div class="one-forth">
													<span class="price">$29</span>
												</div>
											</div><br>
											<div class="col-md-12 mt-3">
												<div class="form-group">
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@vegpasta">Add to cart</button>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
					    </div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					    <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        <div class="menus d-sm-flex ftco-animate align-items-stretch">
					        <div class="menu-img img" style="background-image: url(images/drink_wine.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Wine</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@wini">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
					        </div>
					    </div>

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
							<div class="menu-img img" style="background-image: url(images/drink_mango_juice.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Mango Juice</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@juice">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
							<div class="menu-img img order-md-last" style="background-image: url(images/drink_coldcoffee.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Cold Coffee</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@coldcoffe">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
							<div class="menu-img img order-md-last" style="background-image: url(images/drink_tea.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Tea</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@tea">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
							<div class="menu-img img" style="background-image: url(images/drink_orangejuice.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Orange Juice</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div>	<br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@orangejuice">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
							<div class="menu-img img" style="background-image: url(images/drink_cocktail.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Cocktails</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@cocktail">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
	            </div>

				<div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
					<div class="row no-gutters d-flex align-items-stretch">
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
							<div class="menu-img img" style="background-image: url(images/dessert_icecream.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Ice-Cream</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div>  <br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@icecream">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img" style="background-image: url(images/dessert_donute.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Donut</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@donut">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img order-md-last" style="background-image: url(images/dessert_cheesecake.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Cheese Cake</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@chessecake">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
							<div class="menu-img img order-md-last" style="background-image: url(images/dessert_straw_mousse.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Strawberry Mousse</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mousse">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
							<div class="menu-img img" style="background-image: url(images/dessert_gordon_ramsay.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Gordon Ramsay</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@ramsay">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
							<div class="menu-img img" style="background-image: url(images/dessert_choco_browni.jpg);"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3>Chocolate Brownie</h3>
											</div>
											<div class="one-forth">
												<span class="price">$29</span>
											</div>
										</div><br>
										<div class="col-md-12 mt-3">
											<div class="form-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@browni">Add to cart</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
	            </div>
<br><br><br>
	    
		<!--Order form-->
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
								<label for="message-text" class="col-form-label">Phone No</label>
								<input type="text" class="form-control" id="phoneno" name="phoneno">
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>