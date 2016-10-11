<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
$res=mysql_query("SELECT * FROM user123 WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<html>
	<head>
		<title>Healthy Bite</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<style>
table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
	
}
</style>
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
							if($_SESSION['user_login_status'] == 1){
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
					<div class="title">My Profile</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								
							<div id="main" class="container">

						<section id="features">
								<header class="style1">
									<h2>Welcome <?php echo $userRow['username']; ?>&nbsp;</h2> 
								<!--<a href="logout.php?logout" class="button style1">Sign Out</a>-->
								</header>
								<div class="feature-list">
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
											<table>
												<tr><td><strong>First Name:</strong>  <?php echo $userRow['fname'];?> </td>
												<tr><td><strong>Last Name:</strong>  <?php echo $userRow['lname'];?> </td>
												<tr><td><strong>Age:</strong>  <?php echo $userRow['age'];?> </td>
												<tr><td><strong>Disease:</strong>  <?php echo $userRow['disease'];?> </td></tr>
												<?php 
												$weight = $userRow['weight'];
												$height= $userRow['height'];
												$bmi = ($weight*10000)/($height*$height);
												if ($bmi > 16 && $bmi <= 18.5)
												{
													$bmicategory = "Underweight";
												}
												elseif($bmi > 18.5 && $bmi <= 25)
												{
													$bmicategory = "Normal";
												}
												elseif($bmi > 25 && $bmi <= 30)
												{
													$bmicategory = "Overweight";
												}
												elseif($bmi >30 && $bmi <= 35)
												{
													$bmicategory = "Obese";
												}
												?>
												<tr><td><strong>BMI:</strong> <?php echo $bmi;?> </td></tr>
												<tr><td><strong>BMI Category:</strong> <?php echo $bmicategory;?> </td></tr>
												<tr><td><strong>Meal Plan:</strong>  <?php echo $userRow['mealplan'];?> </td></tr>
												
												</table>
												<div align="center">
												<a href="mymenu.php" class="button style1">My Menu</a>
												</div>
												</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<p><span align="center"><strong>BMI Categories</strong></span>
												<br>
												<table>
												<tr>
												<td><strong>BMI Category</strong></td>
												<td><strong>BMI Range</strong></td>
												</tr>
												<tr>
												<td>Underweight</td>
												<td>from 16 to 18.5</td>
												</tr>
												<tr>
												<td>Normal</td>
												<td>from 18.5 to 25</td>
												</tr>
												<tr>
												<td>Overweight</td>
												<td>from 25 to 30</td>
												</tr>
												<tr>
												<td>Obese</td>
												<td>from 30 to 35</td>
												</tr>
												</table>
												</p>
											</section>
										</div>
									</div>
									
									
							</section>

					</div>
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