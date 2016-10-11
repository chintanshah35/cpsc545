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
					<div class="title">Meal Plan</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Note: Please discuss the meal plan with your doctor before following the meal plan.</h2>
									</header>
							
							
				
							<div>
									
						<center>
						<div class="feature-list">
									<div align="center">
										<form method="post">
										<div class="6u 12u(mobile)">
											<section>
											
										<!--	<p><strong>Note: Please discuss the meal plan with your doctor before following the meal plan.</strong></p>-->
											
												<strong>Please Select your Meal Plan</strong>
															<br>
															<select name="ref">
																	
																	<option value="diabetes1">Diabetes Meal Plan 1</option>
																	<option value="Diabetes Plan 2">Diabetes Meal Plan 2</option>
																	<option value="Diabetes Plan 3">Diabetes Meal Plan 3</option>
																	<option value="Diabetes Plan 4">Diabetes Meal Plan 4</option>
																	<option value="Diabetes Plan 5">Diabetes Meal Plan 5</option>
																	<option value="Diabetes Plan 6">Diabetes Meal Plan 6</option>
																	<option value="Diabetes Plan 7">Diabetes Meal Plan 7</option>
																	
																	<option value="Cholesterol Plan 1">Cholesterol Meal Plan 1</option>
																	<option value="Cholesterol Plan 2">Cholesterol Meal Plan 2</option>
																	<option value="Cholesterol Plan 3">Cholesterol Meal Plan 3</option>
																	<option value="Cholesterol Plan 4">Cholesterol Meal Plan 4</option>
																	<option value="Cholesterol Plan 5">Cholesterol Meal Plan 5</option>
																	<option value="Cholesterol Plan 6">Cholesterol Meal Plan 6</option>
																	<option value="Cholesterol Plan 7">Cholesterol Meal Plan 7</option>
																	
																	<option value="HT Plan 1">HT Meal Plan 1</option>
																	<option value="HT Plan 2">HT Meal Plan 2</option>
																	<option value="HT Plan 3">HT Meal Plan 3</option>
																	<option value="HT Plan 4">HT Meal Plan 4</option>
																	<option value="HT Plan 5">HT Meal Plan 5</option>
																	<option value="HT Plan 6">HT Meal Plan 6</option>
																	<option value="HT Plan 7">HT Meal Plan 7</option>
																	
																	<option value="Obesity Plan 1">Obesity Meal Plan 1</option>
																	<option value="Obesity Plan 2">Obesity Meal Plan 2</option>
																	<option value="Obesity Plan 3">Obesity Meal Plan 3</option>
																	<option value="Obesity Plan 4">Obesity Meal Plan 4</option>
																	<option value="Obesity Plan 5">Obesity Meal Plan 5</option>
																	<option value="Obesity Plan 6">Obesity Meal Plan 6</option>
																	<option value="Obesity Plan 7">Obesity Meal Plan 7</option>
																</select>
														<br>
												 <button type="submit" name="btn-search" class="button style1">Submit</button>
												 
												 
												 
											</section>
										</div>
										</form>
									</div>
									

					</div></center>
									<?php
									include_once 'dbconnect.php';
									/*if(isset($_SESSION['user'])!="")
										{
										 header("Location: home.php");
										}*/
										if(isset($_POST['btn-search']))
										{
										 $ref = mysql_real_escape_string($_POST['ref']);
										 $res = mysql_query("SELECT * FROM mealplan WHERE ref ='$ref'");
										 if($res === FALSE) {
										echo "Error";
										die(mysql_error()); // TODO: better error handling
											}
										 
										/*$userrow1=mysql_fetch_array($res);
										 
										 //$row=mysql_fetch_array($res);
										 /*if($row['password']==md5($upass))
										 {
										  $_SESSION['user'] = $row['user_id'];
										  header("Location: home.php");
										 }*/
																?>
										<center>
										<table style="width:50%">
									<?php

									if(mysql_num_rows($res)>0)
										{
									while($userrow1=mysql_fetch_array($res))
										{  
										$mealplan = $userrow1['planname'];
										
										$sql = mysql_query("UPDATE user123 SET mealplan='".$mealplan."' WHERE user_id=".$_SESSION['user']);
										/*$query= mysql_query("UPDATE user123 SET mealplan = $mealplan WHERE userid=")*/
										?>
										
												
												<tr><td><strong>Meal Plan Name:</strong><?php echo $userrow1['planname']; ?></td></tr>
												<tr><td><strong>Breakfast Item 1:</strong>  <?php echo $userrow1['breakfast_item_1'];?> </td></tr>
												<tr><td><strong>Breakfast Item 2:</strong>  <?php echo $userrow1['breakfast_item_2'];?> </td></tr>
												<tr><td><strong>Breakfast Item 3</strong>  <?php echo $userrow1['breakfast_item_3'];?> </td></tr>
												<tr><td><strong>Breakfast Item 4:</strong><?php echo $userrow1['breakfast_item_4']; ?></td></tr>
												<tr><td><strong>Morning Snack Item 1:</strong>  <?php echo $userrow1['morningsnack_item_1'];?> </td></tr>
												<tr><td><strong>Morning Snack Item 2:</strong>  <?php echo $userrow1['morningsnack_item_2'];?> </td></tr>
												<tr><td><strong>Lunch Item 1:</strong>  <?php echo $userrow1['lunch_item_1'];?> </td></tr>
												<tr><td><strong>Lunch Item 2:</strong><?php echo $userrow1['lunch_item_2']; ?></td></tr>
												<tr><td><strong>Lunch Item 3:</strong>  <?php echo $userrow1['lunch_item_3'];?> </td></tr>
												<tr><td><strong>Lunch Item 4:</strong>  <?php echo $userrow1['lunch_item_4'];?> </td></tr>
												<tr><td><strong>Snack Item 1:</strong>  <?php echo $userrow1['snack_item_1'];?> </td></tr>
												<tr><td><strong>Snack Item 2:</strong><?php echo $userrow1['snack_item_2']; ?></td></tr>
												<tr><td><strong>Dinner Item 1:</strong>  <?php echo $userrow1['dinner_item_1'];?> </td></tr>
												<tr><td><strong>Dinner Item 2:</strong>  <?php echo $userrow1['dinner_item_2'];?> </td></tr>
												<tr><td><strong>Dinner Item 3:</strong>  <?php echo $userrow1['dinner_item_3'];?> </td></tr>
												<tr><td><strong>Dinner Item 4:</strong><?php echo $userrow1['dinner_item_4']; ?></td></tr>
												<tr align="center"><td> <a href="welcome.php" class="button style1">My Profile</a></td></tr>
							
												<br>
												

									<?php

									}
									}
									else
									{
									?>
									<td> <?php echo "No Records found"; ?></td>
									<?php
									}
						 
						 }
						?>
						     </table>
							</center>
							</div>
							
									
									
									
								</div>
							</div>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="http://dining.okstate.edu/sites/dining.okstate.edu/files/images/HealthyDiningLogo2012_Transparency2.png" alt="Healthy Dining" height="142" width="279" /></a>
									<h3><a href="#">Healthy Dining & Hangouts</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="http://supercirclefitness.com/wp-content/uploads/2015/03/Super-Circle-Logo-transparent1.png" alt="Excercise Tips" height="142" width="279" /></a>
									<h3><a href="#">Exercise Tips</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="http://images.clipartpanda.com/fruits-and-vegetables-pictures-vegetables-clipart-McLXM7xca.png" alt="Food Guide" height="142" width="279" /></a>
									<h3><a href="#">Food Tips</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							
						</div>
					</div>
				</div>

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