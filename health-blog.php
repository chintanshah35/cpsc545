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
					<div class="title">Health, Fitness and Food Blogs</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<!--<article class="box post"> -->
									<header class="style1">
										<h2>Top 3 Health, Fitness and Food blogs</h2>
										</header>
									<!--<a href="#" class="image featured">
										<img src="images/pic01.jpg" alt="" />
									</a> -->
									
								<!-- </article> -->
								
														
								<h1 align ="center" style="font-size:40px;text-decoration:underline">HEALTH</h1>
								<br>
								<br>
								<br>
																								
								<div class="row 150%">
								 
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center"><a href="www.empowher.com/">EmpowerHer</a></h2>
											</header>
											<a href="www.empowher.com/" class="image featured"><img src="images/empowher.jpg" alt="" /></a>
											<p>A blog with focus on women's health and wellness, where women ask health questions, share health stories and discuss in 
											women's health groups.</p>
											<h2 align = "center"><a href="www.empowher.com/" class="button style1">Click Here to Visit</a></h2>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align="center"><a href="http://blog.myfitnesspal.com/">My Fitness Pal Blog</a></h2>
											</header>
											<h2 align = "center"><a href="http://blog.myfitnesspal.com/" class="image featured"><img src="images/myfitnesspal.jpg" alt="" /></a></h2>
											<p>Read on for success secrets of health and fintness from this clean eating fan who inspires readers worldwide and
											get tips on how to maintain your health and fitness.</p>
											<h2 align = "center"><a href="http://blog.myfitnesspal.com/" class="button style1">Click Here to Visit</a></h2>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
											<h2 align="center"><a href="http://www.precisionnutrition.com/blog">Precision Nutrition</a></h2>
											</header>
																						
											<a href="http://www.precisionnutrition.com/blog" class="image featured"><img src="images/precisionnutrition.jpg" alt="" /></a>
											
											<p>Precision Fitness one of the top notch fitness company,shares brilliant health related information and advice 
											with focus to benefit user health and well being.</p>
											<h2 align = "center"><a href="http://www.precisionnutrition.com/blog" class="button style1">Click Here to Visit</a></h2>
										</section>
									</div>
								</div>
								
								<br>
								<br>
								<br>
								<h1 align ="center" style="font-size:40px;text-decoration:underline">FITNESS</h1>
								<br>
								<br>
								<br>
								

								<div class="row 150%">								
																	
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center"><a href="http://workoutmommy.com/">WorkOutMommy</a></h2>
											</header>
											<a href="http://workoutmommy.com/" class="image featured"><img src="images/workoutmom.jpg" alt="" /></a>
											<p>Being a mom requires you to work 24/7 for someone other than yourself, so finding time to exercise and stay healthy is a challenge. 
											This blog helps you with that challenge.</p>
											<h2 align = "center"><a href="http://workoutmommy.com/" class="button style1">Click Here to Visit</a></h2>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align="center"><a href="http://www.nerdfitness.com/">Nerd Fitness</a></h2>
											</header>
											<h2 align = "center"><a href="http://www.nerdfitness.com/" class="image featured"><img src="images/nerdfitness.jpg" alt="" /></a></h2>
											<p>Nerd Fitness: A fitness website for nerds and average Joes. Helping you lose weight, get stronger, live better.
											Level up your life, every single day with Nerd Fitness</p>
											<h2 align = "center"><a href="http://www.nerdfitness.com/" class="button style1">Click Here to Visit</a></h2>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
											<h2 align="center"><a href="http://www.lovingfit.com/">Loving Fit</a></h2>
											</header>
																						
											<a href="http://www.lovingfit.com/" class="image featured"><img src="images/lovingfit.jpg" alt="" /></a>
											
											<p>A blog about discovering your self every day. A modern and creative approach 
											to fitness, working out, nutrition and of course life and beauty!</p>
											<h2 align = "center"><a href="http://www.lovingfit.com/" class="button style1">Click Here to Visit</a></h2>
										</section>
									</div>
								</div>
								
								<br>
								<br>
								<br>
								<br>
								<h1 align ="center" style="font-size:40px;text-decoration:underline">HEALTHY FOOD</h1>
								
								<br>
								<br>
								<br>

								<div class="row 150%">
								
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align = "center"><a href="http://thestonesoup.com/">The Stone Soup</a></h2>
											</header>
											<a href="http://thestonesoup.com/" class="image featured"><img src="images/thestonesoup.jpg" alt="" /></a>
											<p>If you have any interest in creative ways to cook more veg this beautiful, vegetable-focused book is a winner. 
											Checkout Sarah's blog for a taste of what's in store.</p>
											<h2 align = "center"><a href="http://thestonesoup.com/" class="button style1">Click Here to Visit</a></h2>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
												<h2 align="center"><a href="http://www.hungryhealthyhappy.com/">Hungry Healthy Happy</a></h2>
											</header>
											<h2 align = "center"><a href="http://www.hungryhealthyhappy.com/" class="image featured"><img src="images/hungryhealthyhappy.jpg" alt="" /></a></h2>
											<p>Read on for success secrets of health and fintness from this clean eating fan who inspires readers worldwide and
											get tips on how to maintain your health and fitness.</p>
											<h2 align = "center"><a href="http://www.hungryhealthyhappy.com/" class="button style1">Click Here to Visit</a></h2>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="box">
											<header>
											<h2 align="center"><a href="http://www.acouplecooks.com/">A Couple Cooks</a></h2>
											</header>
																						
											<a href="http://www.acouplecooks.com/" class="image featured"><img src="images/acouplecooks.jpg" alt="" /></a>
											
											<p>A Couple Cooks shows us that creating a healthy home and union is 100 percent possible and delicious. 
											Enjoy Simple & Healthy Food Recipes by Alex and Sonja.</p>
											<h2 align = "center"><a href="http://www.acouplecooks.com/" class="button style1">Click Here to Visit</a></h2>
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