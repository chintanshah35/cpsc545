<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
session_start();
?>
<html>
	<head>
		<title>Healthy Bite</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
	</head>
	
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="template.php">Healthy Bite</a></h1>
								<p>Track your Health,Food and Fitness Anywhere Anytime</p>
							</div>

											<!-- Nav -->
							<!--<nav id="nav">
								<ul>
									<li class="current"><a href="template.html">Home</a></li>
									<li>
										<a href="#">Tips and Info</a>
										<ul>
											<li><a href="exercise-tips.php">Exercise Tips</a></li>
											<li><a href="diabetes-info.php">Diabetes Info</a></li>
											<li><a href="cholestrol-info.php">Cholestrol Info</a></li>
											<li><a href="blood-pressure-info.php">Blood Pressure Info</a></li>
											<li><a href="obesity-info.php">Obesity Info</a></li>
											
											</ul>
									</li>
									<li><a href="login.php">My Account</a>
										<ul>
											<li><a href="login.php">Login</a></li>
											<li><a href="register.php">Sign Up</a></li>
										</ul>
									</li>
									<li><a href="healthy-dining.php">Healthy Dining</a></li>
									<li><a href="health-blog.php">Health Blogs</a></li>
									<li>
										<a href="urgentcare.php">Emergency Contact</a>
										<ul>
											<li><a href="urgentcare.php">Urgent Care</a></li>
											<li><a href="hospital.php">Hospital</a></li>
										</ul>
									</li>
								</ul>
							</nav> -->
							
							<?php
							if(isset($_SESSION['user_login_status']) == 1){
							include("loggedin_nav.php");
								}
							else {
								include("navigation.php");
								}
?>

					</div>
				</div>

			<!-- Intro 
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">The Introduction</div>
					<section id="intro" class="container">
						<p class="style1">So in case you were wondering what this is all about ...</p>
						<p class="style2">
							Healthy Bite is your personal health tracker <br class="mobile-hide" />
							with meal and medicine planner</a>
						</p>
						<p class="style3">Now track your <strong>health</strong>,<strong>medicine</strong>, <strong>food</strong> and <strong>fitness</strong>, and 
						 with us</p>
						<ul class="actions">
							<li><a href="#" class="button style3 big">Sign Up Now</a></li>
						</ul>
					</section>
				</div> -->

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Health Dining & Hangouts</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<!--<article class="box post"> -->
									<header class="style1">
										<h2>Top 12 Healthy Dining in Orange County</h2>
										</header>
									<!--<a href="#" class="image featured">
										<img src="images/pic01.jpg" alt="" />
									</a> -->
									
								<!-- </article> -->
								
														
								<br>
								<br>
																								
								<div class="row 150%">
								 
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">Blue Water Grill</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/bluewater-grill.jpg" alt="" width="299" height="224"/></a>
											<p><strong>Cuisine/Food:</strong>Seafood / American / Sushi</p>
											<p><strong>Address:</strong>630 Lido Park Dr. Newport Beach, CA 92663</p>
											<p><strong>Contact Us:</strong>(714) 258-3474</p>
										</section>
									</div>
									
									
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">Hamamori Restaurant & Sushi Bar</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/hamamori-oc.jpg" alt="" width="299" height="224"/></a>
											<p><strong>Cuisine/Food:</strong>Japanese / Sushi</p>
											<p><strong>Address:</strong>South Coast Plaza, 3333 Bear St. Costa Mesa, CA 92626</p>
											<p><strong>Contact Us:</strong>(714) 850-0880</p>
										</section>
									</div>
									
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">Lemonade Restaurant</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/lemonade.jpg" alt="" width="299" height="224"/></a>
											<p><strong>Cuisine/Food:</strong>California / American / Vegetarian</p>
											<p><strong>Address:</strong>Fashion Island 401 Newport Center Dr., Newport Beach, CA 92660</p>
											<p><strong>Contact Us:</strong>(949) 717-7525</p>
										</section>
									</div>								
								</div>
								
								<br>
								<br>
								<br>
								
							<div class="row 150%">
								<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">Native Foods</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/native-foods.jpg" alt="" width="299" height="224"/></a>
											<p><strong>Cuisine/Food:</strong>Vegetarian/California</p>
											<p><strong>Address:</strong>The Camp 2937 Bristol St. Costa Mesa, CA 92626</p>
											<p><strong>Contact Us:</strong>(714) 751-2151</p>
										</section>
									</div>
									
									
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">118 Degrees</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/118degrees.jpg" alt="" width="299" height="224"/></a>
											<p><strong>Cuisine/Food:</strong>Vegetarian / Healthy / Raw Food</p>
											<p><strong>Address:</strong>The Camp 2981 Bristol St., Costa Mesa, CA 92626</p>
											<p><strong>Contact Us:</strong>(714) 754-0718</p>
										</section>
									</div>
									
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">True Food Kitchen</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/truefoodkitchen.jpg" alt="" width="299" height="224"/></a>
											<p><strong>Cuisine/Food:</strong>Mediterranean / Vegetarian / Healthy</p>
											<p><strong>Address:</strong>Fashion Island 451 Newport Center Dr., Newport Beach, CA 92660</p>
											<p><strong>Contact Us:</strong>(949) 644-2400</p>
										</section>
									</div>								
								</div>
								
								
								<br>
								<br>
								<br>
									<div class="row 150%">
								<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">Veggie Grill</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/veggiegrill.jpg" alt="" width="299" height="224"/></a>
											<p><strong>Cuisine/Food:</strong>Vegan / Vegetarian / Café</p>
											<p><strong>Address:</strong>Irvine Spectrum 81 Fortune Dr. Irvine, CA 92618</p>
											<p><strong>Contact Us:</strong>(949) 727-9900</p>
										</section>
									</div>
									
									
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">Healthy Junk</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/healthyjunk.jpg" alt="" width="299" height="224" /></a>
											<p><strong>Cuisine/Food:</strong>Vegan / Vegetarian</p>
											<p><strong>Address:</strong>201 W Center Street Promenade, Anaheim, CA 92805</p>
											<p><strong>Contact Us:</strong>(714) 772-5865</p>
										</section>
									</div>
									
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">Bye Bye Sugar Bakery</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/byebyesugar.jpg" alt="" width="299" height="224"/></a>
											<p><strong>Cuisine/Food:</strong>Sugar Free Bakery</p>
											<p><strong>Address:</strong>23635 El Toro Rd Lake Forest, CA 92630</p>
											<p><strong>Contact Us:</strong>(949) 707-5582</p>
										</section>
									</div>								
								</div>
								
								<br>
								<br>
								<br>
									<div class="row 150%">
								<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">Seasons 52</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/seasons52.jpg" alt="" width="299" height="224"/></a>
											<p><strong>Cuisine/Food:</strong>American/International</p>
											<p><strong>Address:</strong>South Coast Plaza, 3333 Bristol St., Costa Mesa, CA 92626</p>
											<p><strong>Contact Us:</strong>(714) 437-5252</p>
										</section>
									</div>
									
									
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">Slow Fish</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/slowfish1.jpg" alt="" width="299" height="224"/></a>
											<p><strong>Cuisine/Food:</strong>Japanese / Sushi / Korean</p>
											<p><strong>Address:</strong>16051 Bolsa Chica St., Huntington Beach, CA 92649</p>
											<p><strong>Contact Us:</strong>(714) 846-6951</p>
										</section>
									</div>
									
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center">Zov's Bistro</h2>
											</header>
											<a href="#" class="image featured"><img src="images/hotel/zovs.jpg" alt="" width="299" height="224"	/></a>
											<p><strong>Cuisine/Food:</strong>Mediterranean / Bistro / Bakery</p>
											<p><strong>Address:</strong>17440 E. 17th St., Tustin, CA 92780</p>
											<p><strong>Contact Us:</strong>(714) 838-8855</p>
										</section>
									</div>								
								</div>

								
								</div>
							</div>

					</div>
				</div>

			<!-- Highlights -->
	<?php
						include("endorsement.php");
						?>
			<!-- Footer -->
				<?php
						include("footer.php");
						?>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>