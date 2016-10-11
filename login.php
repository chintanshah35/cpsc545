<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: welcome.php");
}
if(isset($_POST['btn-login']))
{
 $username = mysql_real_escape_string($_POST['uname']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM user123 WHERE username='$username'");
 $row=mysql_fetch_array($res);
 if($row['password']==($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  $_SESSION['user_login_status'] = 1;
  header("Location: welcome.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
if(isset($_SESSION['user_login_status'])==1){
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
					<div class="title">My Account</div>
					<div id="main" class="container">

						<!-- Image -->
							<!-- <a href="#" class="image featured">
								<img src="images/pic01.jpg" alt="" />
							</a> -->

						<!-- Features -->
							<section id="features">
								<div class="feature-list">
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-user">Login</h3>
												<br>
												
												<!--Login Form -->
													
													
													<form  action="" method="POST" enctype="multipart/form-data">
														<input type="hidden" name="action" value="submit">
														<div class="row">
															<div class="6u 12u(mobile)">
																<input type="text" name="uname" id="user-name" placeholder="Your Username" required />
															</div>
														</div>
														<div class="row">														
															<div class="6u 12u(mobile)">
																<input type="password" name="pass" id="pass" placeholder="Your Password" required />
															</div>
														</div>
														
															<div class="6u 12u(mobile)">
																<ul class="actions">
																	<li><input type="submit" name="btn-login" class="style1" value="Login" /></li>
																</ul>
															</div>
															<br>
													</form>
												</section>
										</div>

										<div class="6u 12u(mobile)">
											<section align ="center">
												<h3 class="icon fa-user-plus">Sign Up</h3>
												<ul class="actions actions-centered">
													<li><a href="register.php" class="button style2 big">Sign Up</a></li>
												</ul>
												<!--<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>-->
											</section>
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