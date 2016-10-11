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
    border: 1px solid black;
    border-collapse: collapse;
	text-align: center;
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
					<div class="title">Urgent Care</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Find your nearest Hospitals</h2>
									</header>
							
							
			<!--Urgent Care Search-->
			
							<div>
									
						<center>
							<div align="center">
								
								<section>	
								<form method="post">
								<input type="text" name="ref" placeholder="Please Enter Zip Code" required width ="30px"/></td>
								<br>
								<button type="submit" name="btn-search">Search</button>
								</form>
								</section>
								</div>
								
							</div>
						</center>
									<?php
									include_once 'dbconnect.php';
	
									/*if(isset($_SESSION['user'])!="")
										{
										 header("Location: home.php");
										}*/
										if(isset($_POST['btn-search']))
										{
										 $ref = mysql_real_escape_string($_POST['ref']);
										 
										 $res=mysql_query("SELECT * FROM hospital WHERE ref='$ref'");
										 //$row=mysql_fetch_array($res);
										 /*if($row['password']==md5($upass))
										 {
										  $_SESSION['user'] = $row['user_id'];
										  header("Location: home.php");
										 }*/
																	?>
										<table style="width:100%"> 
										<th>Name</th>
										<th>Address</th>
										<th>Zip</th>
										<th>Contact</th>
										<th>Distance(miles)</th>
										<br>
									<?php

									if(mysql_num_rows($res)>0)
										{
									while($row=mysql_fetch_array($res))
										{  

									?>
										
										<tr>
										<td><?php echo $row['name']; ?></td> 
										<td><?php echo $row['address']; ?></td> 
										<td><?php echo $row['zip']; ?></td>
										<td><?php echo $row['contact']; ?></td>
										<td><?php echo $row['distance']; ?></td>
										</tr>
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