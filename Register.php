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
								<h1><a href="template.html">Healthy Bite</a></h1>
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
				</div>-->

			<!-- Register Form -->
			
						<?php
						if(isset($_SESSION['user'])!="")
						{
						 header("Location: welcome.php");
						}
						include_once 'dbconnect.php';

						if(isset($_POST['btn-signup']))
						{
						 $fname = mysql_real_escape_string($_POST['fname']);
						 $lname = mysql_real_escape_string($_POST['lname']);
						 $email = mysql_real_escape_string($_POST['email']);
						 $age = mysql_real_escape_string($_POST['age']);
						 $uname = mysql_real_escape_string($_POST['uname']);
						 $upass = mysql_real_escape_string($_POST['pass']);
						 $gender = mysql_real_escape_string($_POST['gender']);
						 $height = mysql_real_escape_string($_POST['height']);
						 $weight = mysql_real_escape_string($_POST['weight']);
						 $disease = mysql_real_escape_string($_POST['disease']);
						 
						 
						 
						 if(mysql_query("INSERT INTO user123(fname,lname,email,age,username,password,gender,height,weight,disease) VALUES('$fname','$lname','$email','$age','$uname',
						 '$upass','$gender','$height','$weight','$disease')"))
						 {
						  ?>
								<script>alert('Successfully Registered ');</script>
								<?php
						 }
						 else
						 {
						  ?>
								<script>alert('error while registering you...');</script>
								<?php
						 }
						}
						?>

				<div class="wrapper style2">
					<div class="title">Sign Up</div>
					<div id="main" class="container">

						<!-- Image -->
							<!-- <a href="#" class="image featured">
								<img src="images/pic01.jpg" alt="" />
							</a> -->

						<!-- Features -->
							<section id="features">
							<!--<center>
									<div id="sign-form">
									<form method="post">
									<table align="center" width="60%" border="0">

									<tr>
									<td>First Name:</td> <td><input type="text" name="fname" placeholder="Enter First Name" required /></td>
									<td>Last Name:</td> <td><input type="text" name="lname" placeholder="Enter Last Name" required /></td>
									</tr>


									<tr>
									<td>Email: </td> <td><input type="email" name="email" placeholder="Enter Your Email" required /></td>
									<td>Age:</td> <td> <input type="text" name="age" placeholder="Enter Your Age" required /></td>
									</tr>

									<tr>
									<td>Username:</td> <td> <input type="text" name="uname" placeholder="Enter User Name" required /></td>
									<td>Password: </td> <td><input type="password" name="pass" placeholder="Enter Password" required /></td>
									</tr>

									<tr>
									<td>Gender: </td> <td><input type="radio" value="male" checked name="gender"> Male <input type="radio" value="female"  name="gender"> Female</td>
									<td>Height:</td> <td> <input type="text" name="height" placeholder="Enter height in cm" required /></td>
									</tr>

									<tr>
									<td>Weight: </td> <td> <input type="text" name="weight" placeholder="Enter weight in kg" required /></td>
									<td>Disease:</td> <td> <select name="disease">
											<option value="Diabetes">Diabetes</option>
											<option value="Cholestrol">Cholestrol</option>
											<option value="Blood Pressure">Blood Pressure</option>
											<option value="Obesity">Obesity</option>
										</select>
										</td>
									</tr>

									<tr>
									<td><button type="submit" name="btn-signup">Sign Up</button></td>
									</tr>

									<tr>
									<td><a href="index.php">Sign In Here</a></td>
									</tr>

									</table>
									</form>
									</div>
							</center>-->
									<div class="feature-list">
									<div align="center">
										<form method="post">
										<div class="6u 12u(mobile)">
											<section>
												First Name <input type="text" name="fname" placeholder="Enter First Name" required width="50px"/>
												Last Name<input type="text" name="lname" placeholder="Enter Last Name" required width="50px"/>
												Email <input type="email" name="email" placeholder="Enter Your Email" required width="50px"/>
												Age <input type="text" name="age" placeholder="Enter Your Age" required width="50px"/>
												Username <input type="text" name="uname" placeholder="Enter User Name" required width="50px"/>
												Password <input type="password" name="pass" placeholder="Enter Password" required width="50px"/>
												<br>Gender <input type="radio" value="male" checked name="gender"> Male <input type="radio" value="female"  name="gender"> Female
												<br>Height <input type="text" name="height" placeholder="Enter height in cm" required width="20px"/>
												<br> Weight <input type="text" name="weight" placeholder="Enter weight in kg" required width="20px"/>
												Disease <select name="disease">
															<option value="Diabetes">Diabetes</option>
															<option value="Cholestrol">Cholestrol</option>
															<option value="Hypertension">Hypertension</option>
															<option value="Obesity">Obesity</option>
														</select>
														<br>
												 <button type="submit" name="btn-signup"class="button style1">Sign Up</button>
												 <br>
											</section>
										</div>
										</form>
									</div>
									

					</div>
				</div>
</div>
			<!-- Highlights
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
				</div> -->

			<!-- Footer -->
				<?php
						include("footer.php");
							?>

		

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