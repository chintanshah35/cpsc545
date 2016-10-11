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
				</div> -->

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Obesity</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Obesity: Symptoms, Do's, Don'ts and Tips</h2>
									</header>
									<a href="#" class="image featured">
										<img src="images/obesity.jpg" alt="" width ="284" height ="400"/>
									</a>
									
									<table>
									<tr>
									<td>What is Obesity?</td>
									<td>Obesity Symptoms</td>
									</tr>
									<tr>
									<td>Do's and Don't for Obesity</td>
									<td>Food Planning</td>
									</tr><tr>
									<td>Exercise Tips</td>
									<td>Videos</td>
									</tr>
									</table>
									
									<strong><h1 style="text-decoration:underline">What is Obesity?</h1></strong>
									<p>Obesity is a medical condition in which excess body fat has accumulated to the extent that it may have a negative effect on health, leading 
									to reduced life expectancy and/or increased health problems. In Western countries, people are considered obese when their body mass index 
									(BMI), a measurement obtained by dividing a person's weight by the square of the person's height, is over30 kg/m2, with the range 25–30 kg/m2 
									defined as overweight.</p>
									
									</p>
									
									<strong><h1 style="text-decoration:underline">Obesity Symptoms and Causes</h1></strong>
									<p>Obesity increases the likelihood of various diseases, particularly heart disease, type 2 diabetes, obstructive sleep apnea, certain types of 
									cancer, and osteoarthritis.Obesity is most commonly caused by a combination of excessive food energy intake, lack of physical activity, and 
									genetic susceptibility, although a few cases are caused primarily by genes, endocrine disorders, medications, orpsychiatric illness. Evidence to 
									support the view that some obese people eat little yet gain weight due to a slow metabolism is limited. On average, obese people have a greater 
									energy expenditure than their thin counterparts due to the energy required to maintain an increased body mass.
									<br>At an individual level, a combination of excessive food energy intake and a lack of physical activity is thought to explain most cases of 
									obesity. A limited number of cases are due primarily to genetics, medical reasons, or psychiatric illness. In contrast, increasing rates of 
									obesity at a societal level	are felt to be due to an easily accessible and palatable diet,increased reliance on cars, and mechanized 
									manufacturing.
									<br> A 2006 review identified ten other possible contributors to the recent increase of obesity: 
									<br>(1) insufficient sleep, 
									<br>(2) endocrine disruptors (environmental pollutants that interfere with lipid metabolism), 
									<br>(3) decreased variability in ambient temperature, 
									<br>(4) decreased rates of smoking, because	smoking suppresses appetite, 
									<br>(5) increased use of medications that can cause weight gain (e.g., atypical antipsychotics), 
									<br>(6) proportional increases in ethnic and age groups that tend to be heavier, 
									<br>(7) pregnancy at a later age (which may cause susceptibility to obesity in children), 
									<br>(8) epigenetic risk factors passed on generationally, 
									<br>(9) natural selection for higher BMI, and 
									<br>(10) assortative mating leading to increased concentration of obesity risk factors (this would increase the number of obese people by 
									increasing population variance in weight).
									</p>
									
									<strong><h1 style="text-decoration:underline">Do's and Don'ts</h1></strong>
									<p>• DO shop for low-fat and low-calorie food items.
									<br>• DO take more proteins in your diet so that you can stay longer without food
									<br>• DO consult a certified professional before taking up any diet plan.
									<br>• DO go for a brisk morning walk of 30 mins.
									<br>• DO Yoga and Meditation to manage your stress and fatigue.
									<br>• DO prefer steamed, boiled and baked vegetable rather than fried
									<br>• DON'T eat high carbohydrate vegetables like – potato etc
									<br>• DON'T take more sugary or sweet products.
									<br>• DON'T skip meals
									<br>• DON'T consume much of oil and butter or fried food
									<br>• Avoid Alcohol
									</p>
									
									
									<strong><h1 style="text-decoration:underline">Food Planning</h1></strong>
									
									<p>The key to a weight loss eating plan is to limit calories while still enjoying delicious foods. While there are literally hundreds of diets 
									on the market with various gimmicks, experts agree that a healthy diet low in fat, sodium and added sugar, according to the National Heart, Lung 
									and Blood Institute. Lean meats like flank steak, chicken, turkey and fish can substitute for fatty red meats and pork. Whole grain bread and 
									pasta are better choices than white flour products. Healthy oils like olive oil and canola oil can take the place of butter or margarine. </p>
									
									<strong><h1 style="text-decoration:underline">Exercise Tips and Planning</h1></strong>
									<p>While lowering calorie intake is important for weight loss, it is just as important to raise activity level as well. Not only does exercise 
									help to burn more calories, it also improves cardiovascular fitness, strength and emotional well-being, reports the CDC. If starting an exercise 
									program for the first time or after an extended layoff, walking can be a great start. Especially for the obese, running or jogging can be 
									stressful to the bones and joints. A 30-minute walk, four to five times per week is a great introduction to exercise. Even three, 10-minute walks 
									per day are beneficial for health if you can't get 30 minutes in at once, reports the American Heart Association.</p>

									<strong><h1 style="text-decoration:underline">Videos</h1></strong>	
									<br>									
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<iframe width="420" height="315" src="https://www.youtube.com/embed/YI0j8nLiZmE" frameborder="0" allowfullscreen></iframe>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<iframe width="420" height="315" src="https://www.youtube.com/embed/IkoC3HZwe7Q" frameborder="0" allowfullscreen></iframe>
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