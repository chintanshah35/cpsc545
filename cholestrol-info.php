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
					<div class="title">Cholesterol</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Cholesterol: Symptoms, Do's, Don'ts and Tips</h2>
									</header>
									<a href="#" class="image featured">
										<img src="images/cholesterol.jpg" alt="" width ="284" height ="400"/>
									</a>
									
									<table>
									<tr>
									<td>What is Cholesterol?</td>
									<td>Cholesterol Symptoms</td>
									</tr>
									<tr>
									<td>Do's and Don't for Cholesterol</td>
									<td>Food Planning</td>
									</tr><tr>
									<td>Exercise Tips</td>
									<td>Videos</td>
									</tr>
									</table>
									
									<strong><h1 style="text-decoration:underline">What is Cholesterol</h1></strong>
									<p>Cholesterol is a type of fat (lipid) in your blood. Cells need cholesterol, and our body makes all it needs. But we also get cholesterol 
									from the food we eat.If we have too much cholesterol, it starts to build up in arteries. (Arteries are the blood vessels that carry blood 
									away from the heart.) This is called hardening of the arteries, or atherosclerosis. It is the starting point for some heart and blood flow 
									problems. The buildup can narrow the arteries and make it harder for blood to flow through them. The buildup can also lead to dangerous blood 
									clots and inflammationthat can cause heart attacks and strokes.
									
									</p>
									
									<p>Types of Cholesterol
									<br>•	LDL is the "bad" cholesterol. It's the kind that can raise your risk ofheart disease, heart attack, and stroke.
									<br>•	HDL is the "good" cholesterol. It's the kind that is linked to a lower risk of heart disease, heart attack, and stroke.
									</p>
									
									<strong><h1 style="text-decoration:underline">Cholelsterol Symptoms</h1></strong>
									<p>High cholesterol typically doesn't cause any symptoms. In the vast majority of cases, the only true symptoms it may cause are emergency events.
									For instance, a heart attack or stroke can result from the damage caused by high cholesterol over time. These events typically don’t occur until 
									high cholesterol leads to the formation of plaque in your arteries. Plaque can narrow your arteries, letting less blood to pass through. The 
									formation of plaque fundamentally changes the make-up of your arterial lining, leading to serious complications. There are no direct symptoms 
									in the vast majority of cases, so a blood test is the only way to know whether or not your cholesterol is too high. This is typically defined 
									as having a total blood cholesterol level above 240 milligrams/deciliter (mg/dL).</p>
									
									<strong><h1 style="text-decoration:underline">Do's and Don'ts</h1></strong>
									<p>• DO: Eat as Many Fresh and Whole Foods as Possible
									<br>• DO: Consider Natural and Herbal Remedies
									<br>• DO: Combine Cholesterol Reducing Foods Together for Maximum Impact
									<br>• DON'T: Forget to Exercise.
									<br>• DON'T: Over Consume Sugars and Refined Simple Carbs
									<br>• DON’T: Skip Good Fats Trying to Avoid Bad Fats
									<br>• DO: Eat from at least three food groups at every meal(food groups: protein diet, carb diet, vegetables)
									<br>• DO: Eat fruits and vegetables daily
									<br>• DO: Develop plan for physical activity and exercise
								    </p>
									
									
									<strong><h1 style="text-decoration:underline">Food Planning</h1></strong>
									
									<p>What Not to Eat: Foods That Raise Cholesterol
									<br>Whether you have high cholesterol that needs to be lowered or you simply want to keep an already-healthy cholesterol level in check, 
									avoiding certain foods can help.Any food that contains saturated fat is a no-no for a cholesterol-lowering diet. Trans fats are equally as bad, 
									if not worse, for people eating with high cholesterol. “Trans fats are a double whammy — they raise LDL cholesterol and lower HDL cholesterol.
									
									<br>Specific types of foods to avoid:
									<br>• Anything fried 
									<br>• Hydrogenated oil 
									<br>• Meat
									<br>• Full-fat dairy products
									
									<br>Specific types of foods to include:
									<br>• Plant stanols and sterols 
									<br>• Monounsaturated and polyunsaturated fats
									<br>• Soy foods
									<br>• High fiber foods
									</p>
									
									<strong><h1 style="text-decoration:underline">Exercise Tips and Planning</h1></strong>
									<p>You don't have to be a triathlete to enjoy the many benefits of exercise. High cholesterol can be addressed with even short bouts of 
									moderate activity. Examples of moderate-intensity aerobic exercises include:.
									<br>• Jogging 
									<br>• Bicycling
									<br>• Playing Tennis
									<br>• Brisk walking
									</p>
									<p>A regular exercise program should consist of moderate aerobic activity, for at least 30 minutes a day, five or more days a week. 
									Moderate activity means you should target 50 to 85 percent of your maximum heart rate. If you have difficulty setting aside 30 minutes 
									a day for exercising, you can still benefit from physical activity by breaking up the 30-minute goal into 10- or 15-minute segments 
									throughout the day.																	
									</p>

									<strong><h1 style="text-decoration:underline">Videos</h1></strong>	
									<br>									
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<iframe width="420" height="315" src="https://www.youtube.com/embed/xImLvmMLAeA" frameborder="0" allowfullscreen></iframe>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<iframe width="420" height="315" src="https://www.youtube.com/embed/fHpMT7xJR3s" frameborder="0" allowfullscreen></iframe>
											</section>
										</div>
									</div>
									
									
							</article>

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