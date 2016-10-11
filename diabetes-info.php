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
					<div class="title">Diabetes</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Diabetes: Symptoms, Do's, Don'ts and Tips</h2>
									</header>
									<a href="#" class="image featured">
										<img src="images/diabetes.jpg" alt="" />
									</a>
									
									<table>
									<tr>
									<td>What is diabetes?</td>
									<td>Diabetes Symptoms</td>
									</tr>
									<tr>
									<td>Do's and Don't for Diabetes</td>
									<td>Food Planning</td>
									</tr><tr>
									<td>Exercise Tips</td>
									<td>Videos</td>
									</tr>
									</table>
									
									<strong><h1 style="text-decoration:underline">What is Diabetes?</h1></strong>
									<p>Diabetes, often referred to by doctors as diabetes mellitus, describes a group of metabolic diseases in which the person has high blood 
									glucose (blood sugar), either because insulin production is inadequate, or because the body's cells do not respond properly to insulin, or both. 
									It is the condition in which the body does not properly process food for use as energy. Most of the food we eat is turned into glucose, 
									or sugar, for our bodies to use for energy. The pancreas, an organ that lies near the stomach, makes a hormone called insulin to help glucose 
									get into the cells of our bodies. When you have diabetes, your body either doesn't make enough insulin or can't use its own insulin as well as it should. This causes sugars to 
									build up in your blood. This is why many people refer to diabetes as “sugar.” </p>
									
									<strong><h1 style="text-decoration:underline">Diabetes Symptoms</h1></strong>
									<p>Symptoms of Diabetes are as follows:
									<br>• Frequent urination
									<br>• Excessive thirst
									<br>• Unexplained weight loss
									<br>• Extreme hunger
									<br>• Sudden vision changes
									<br>• Tingling or numbness in hands or feet
									<br>• Feeling very tired much of the time
									<br>• Very dry skin
									<br>• Sores that are slow to heal
									<br>• More infections than usual
									<br>
									<br>Nausea, vomiting, or stomach pains may accompany some of these symptoms in the abrupt
									onset of insulin-dependent diabetes, now called Type 1 diabetes.  </p>
									
									<strong><h1 style="text-decoration:underline">Do's and Don'ts</h1></strong>
									<p>• DON'T: Eat Junk Food
									<br>• DON'T: Drink regular soda or sweetened drinks
									<br>• DON'T: Make starchy carbohydrates your main course
									<br>• DON'T: Skip meals.
									<br>• DON'T: Give up on healthy eating habits
									<br>• DO: Pay attention to what you're eating
									<br>• DO: Eat from at least three food groups at every meal(food groups: protein diet, carb diet, vegetables)
									<br>• DO: Have protein with meals
									<br>• DO: Eat fruits and vegetables daily
									<br>• DO: Create your Diabetes Eating Plan with help of your doctor
									<br>• DO: Develop plan for physical activity and exercise
								    </p>
									
									<strong><h1 style="text-decoration:underline">Food Planning</h1></strong>
									
									<p>• Eat regularly - avoid the effects on glucose levels of skipping meals or having delayed meals because of work or long journeys 
										(take healthy snacks with you)
									<br>• Eat vegetables and fruits and eat them in place of high-calorie foods - a variety of fresh, frozen and canned is good, but avoid 
										high-calorie sauces and food containing added salt or sugar
									<br>• Whole grains high in fiber are recommended as a healthy source of carbohydrate
									<br>• Eat pulses, a low-fat starchy source of protein and fiber, such as beans, lentils, chickpeas and garden peas
									<br>• Reduce intake of saturated and trans fats by having poultry and fish without the skin and cooked, for example, under the grill, rather than
									fried
									<br>• Take a similar approach to cooking red meat while reducing intake and looking for the leanest cuts
									<br>• Eat fish twice a week or more, but avoid batters and frying - go for oily fish such as salmon, mackerel, sardine, trout and herring, which 
									are rich sources of omega-3
									<br>• Avoid partially hydrogenated vegetable oils and limit saturated fat and trans fat - replace them with monounsaturated and polyunsaturated 
									fats
									<br>• Dairy awareness helps reduce fat intake - select skim (fat-free) milk and low-fat (1%) dairy products, reduce consumption of cheese and 
									butter and swap out creamy sauces for tomato-based ones
									<br>• Cut back on sugar by avoiding added sugars in drinks and foods - have tea and coffee without sugar, avoid fruit that is canned in syrup and pay attention to
									food labels
									<br>• Cut back on salt - prepare foods at home with little or no salt and avoid foods with high sodium such as processed foods
									<br>• Cut back on portion sizes - be wary of amounts consumed when eating out
									<br>• Drink alcohol only in moderation - as a guide, no more than one drink a day for women and no more than two for men.
									</p>
									

									
									<strong><h1 style="text-decoration:underline">Exercise Tips and Planning</h1></strong>
									<p>Alongside diet, exercise is an important element of the lifestyle management of diabetes, as well as being preventive against the onset of 
									type 2 diabetes. Exercise need not be hard work and can be effective if done in a way that is enjoyable. Staying active simply through 
									outdoor activities such as walking and gardening or through favorite games such as tennis is a valid approach. Before embarking on any new 
									exercise activity, it is worth discussing it first with your health care professional, especially if there are any diabetes 
									complications present. Starting slowly is also important in with any new activity.
									<br>
									<strong><br>Why is exercise important in diabetes?</strong>
									<br>Two main factors are behind the need to maintain regular physical exercise:
									<br>• Exercise helps with weight loss
									<br>• Exercise is good for heart health, helping to prevent diabetes complications.
									<br>• Physical activity also raises the use of glucose by muscles and so can lower blood glucose levels. Regular activity can also help reduce the 
									amount of insulin needed to control blood sugar levels by improving the body's insulin efficiency
									</p>
									<strong><br>What exercise is best with diabetes?</strong>
									<p>Experts consider aerobic exercise to be best, in which the heart rate and rate of breathing go up considerably. Lower-intensity exercise 
									such as swimming is as much of an option for keeping healthy as higher-impact exercise such as running, however. 
									
									<br>The American Heart Association has an easy-to-remember general recommendation for exercise goals - take part in 30 minutes of moderate 
									exercise on 5 days of the week, reaching a total of 150 minutes a week. In addition, on 2 days a week, some moderate-to-high-intensity muscle 
									strengthening activity is suggested.
																	
									</p>
									
									<strong><h1 style="text-decoration:underline">Videos</h1></strong>	
									<br>									
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<iframe width="420" height="315" src="https://www.youtube.com/embed/0xgeG2gtI0A" frameborder="0" allowfullscreen></iframe>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<iframe width="420" height="315" src="https://www.youtube.com/embed/03Ar9vo6VbM" frameborder="0" allowfullscreen></iframe>
											</section>
										</div>
									</div>
									
									</article>
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