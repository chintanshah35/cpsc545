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
					<div class="title">Hypertension</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Hypertension: Symptoms, Do's, Don'ts and Tips</h2>
									</header>
									<a href="#" class="image featured">
										<img src="images/hypertension.jpg" alt="" width ="284" height ="400"/>
									</a>
									
									<table>
									<tr>
									<td>What is Hypertension?</td>
									<td>Hypertension Symptoms</td>
									</tr>
									<tr>
									<td>Do's and Don't for Hypertension</td>
									<td>Food Planning</td>
									</tr><tr>
									<td>Exercise Tips</td>
									<td>Videos</td>
									</tr>
									</table>
									
									<strong><h1 style="text-decoration:underline">What is Hypertension?</h1></strong>
									<p>Blood pressure is the force exerted by the blood against the walls of blood vessels, and the magnitude of this force depends on the cardiac 
									output and the resistance of the blood vessels. Hypertension is having a blood pressure higher than 140 over 90 mmHg, a definition shared by all the medical
									guidelines.While this threshold has been set to define hypertension, it is for clinical convenience and because achieving targets below this level brings benefits 
									for patients.
									
									<br>American Heart Association defines the following ranges of blood pressure (in mmHg):
										
										<br>• Normal blood pressure is below 120 systolic and below 80 diastolic
										<br>• Prehypertension is 120-139 systolic or 80-89 diastolic
										<br>• ranjesStage 1 high blood pressure (hypertension) is 140-159 systolic or 90-99 diastolic
										<br>• Stage 2 high blood pressure (hypertension) is 160 or higher systolic or 100 or higher diastolic
										<br>• Hypertensive crisis (a medical emergency) is when blood pressure is above 180 systolic or above 110 diastolic.

									
									</p>
									
									
									<strong><h1 style="text-decoration:underline">Hypertension Symptoms and Causes</h1></strong>
									<p>High blood pressure itself is usually experienced by patients without any symptoms at all (asymptomatic). It can do its damage silently.
									<br>Hypertension can lead to problems in the organs affected by high blood pressure. Long-term hypertension can lead to the following 
									complications via arteriosclerosis, which causes narrowing of blood vessels by forming plaques
									
									<br>• An enlarged or weakened heart, to a point where it may fail to pump enough blood (heart failure)
									<br>• Aneurysm - an abnormal bulge in the wall of an artery
									<br>• Blood vessel narrowing - in the kidneys, leading to possible kidney failure; also in the heart, brain and legs, leading to potential heart attack, stroke or amputation, 
											respectively
									<br>• Blood vessels in the eyes my rupture or bleed, leading to vision problems or blindness (hypertensive retinopathies, which can be classified by worsening grades one through 
										four).
									
									</p>
									
									<strong><h1 style="text-decoration:underline">Do's and Don'ts</h1></strong>
									<p>High Blood pressure can be controlled by following the below mentioned steps:
										<br>•	Maintain a healthy body weight. Lose weight if you are overweight.
										<br>•	Follow a moderate exercise daily regimen (at least 30 minutes daily).
										<br>•	Follow a healthy eating plan, which is low in sodium.
										<br>•	If you drink, drink in moderation.
										<br>•	If you are being prescribed medication, take it regularly.
										<br>•	Know your numbers (check your blood pressure regularly)
										<br>•	With a good regime of diet control and some lifestyle changes it is possible to control hypertension or at least reduce 
											your medication and maintain a good quality of life.

									</p>
									
									
									<strong><h1 style="text-decoration:underline">Food Planning</h1></strong>
									
									<p>By starting a few new food habits, including counting calories and watching portion sizes, you may be able to lower your blood pressure and 
									reduce the medications you need to control high blood pressure. 
									<br>Track What You Eat
									<br>Some people are not aware of how many calories they eat and drink each day. They may underestimate how much they eat and wonder why they can’t 
									lose weight.
									<br>Writing down the foods you eat, including the portion sizes, can let you see the truth about your food intake. You can then start cutting 
									back reducing calories and portions to lose weight and manage your blood pressure.
									<br>Avoid Salt(Sodium)
									<br>A high-sodium diet increases blood pressure in many people. In fact, the less sodium you eat, the better blood pressure control you might 
									have.
									<br>Potassium, magnesium, and fiber, on the other hand, may help controlblood pressure. Fruits and vegetables are high in potassium, magnesium, 
									and fiber, and they’re low in sodium. Stick to whole fruits and veggies. Juice is less helpful, because the fiber is removed. Also, nuts, seeds,
									legumes, lean meats, and poultry are good sources of magnesium.
									</p>
									
									<strong><h1 style="text-decoration:underline">Exercise Tips and Planning</h1></strong>
									<p>Ideally, those with health conditions such as diabetes, heart disease, and high blood pressure — should get at least 2 and a half hours of 
									modest exercise every week. Try for at least 30 minutes a day most days of the week," she says, "and never go more than two days without any 
									exercise.
									<br>One of the best and easiest exercises you can do is walk. You can walk anywhere, and it doesn’t require any equipment beyond a good pair of 
									sneakers.
									<br>The key is to get started with a hypertension exercise program. After a few minutes a day, you’ll find it gets easier each time — and easier 
									to add more time to each workout. Before you know it, those five minutes will become 10, and doing 10 minutes three times a day will add up to 
									the 30 you need.
									<br>Another way to get started is sneaking short bouts of exercise into your day:
									<br>•	Parking a little farther from the entrance everywhere you go to work, to the grocery, to doctor appointments
									<br>•	Taking the stairs rather than the elevator if you’re going up one or two floors
									<br>If you’re limited by back, hip, or knee pain, and even short walks are difficult, try a workout that doesn’t put stress on your limbs. Try 
									walking in a heated pool — the warm water will soothe and cushion rather than stress joints. A recumbent bike may be another good option for you.
									</p>

									<strong><h1 style="text-decoration:underline">Videos</h1></strong>	
									<br>									
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<iframe width="420" height="315" src="https://www.youtube.com/embed/-Nx9kxOsiwE" frameborder="0" allowfullscreen></iframe>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<iframe width="420" height="315" src="https://www.youtube.com/embed/qcaUwWN0JdA" frameborder="0" allowfullscreen></iframe>
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