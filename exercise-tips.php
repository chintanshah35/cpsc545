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
				</div> -->

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Exercise Tips</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>The 7-Minute Workout</h2>
									</header>
									<br>
									<div>
									<img src="images/exercise001.jpg" alt="" />
									
									<iframe width="560" height="315" src="https://www.youtube.com/embed/ECxYJcnvyMw" frameborder="0" allowfullscreen></iframe>
									</div>
									
									
									<p>If you’ve ever promised yourself that you would get back in shape just as soon as you could find the time, then 
									the 7-Minute Workout may be for you. It’s a short, rapid-fire series of exercises that use your own body weight.Start 
									with something you learned in elementary school: jumping jacks. Stand up with your legs spread and your hands 
									touching overhead. Then as you jump, bring your legs back together and put your arms to your sides. 
									You can speed these up or slow them down to suit your fitness level. Do this for 30 seconds, 
									take a 10-second break, and go right to the next move.If you’re new to exercise, or
									it’s been a while, it’s a good idea to get a gym instructor or other fitness pro to help you with proper form.</p>
									
									<br>
									
									<section class="box">
											<header align="center">
												<h2>Wall Sits</h2>
											</header>
											
											<div align= "center">
									<img src="images/exercise002.jpg" alt="" />
									</div>
									<br>	
									
									
									<p>Stand with your back to a wall, feet hip-width apart and slightly in front of you. Lean back into the wall, and
									slide down like you’re sitting down into a chair. Your knees should finish above your ankles, bent at 90 degrees. Hold 
									this position for 30 seconds.There are 12 exercises. Each should take 30 seconds, with a 10-second "break".  It’s called 
									the "7-Minute Workout," but you really get maximum benefit from repeating the circuit at least three times.The order 
									of exercises does matter: You should alternate working opposing muscle groups, and follow exercises that crank your 
									heart rate up with those that cool it down a bit.  Check with your doctor before taking on any new exercise routine, 
									to make sure it is right for you.</p>
									</section>
									
									
									
									<section class="box">
											<header align="center">
												<h2>Push Ups</h2>
											</header>
											
											<div align= "center">
									<img src="images/exercise003.jpg" alt="" />
									</div>
									<br>	
									
									
									<p>Get into a "plank" position on the floor or mat, feet together with toes tucked under, hands planted flat below your shoulders. Slowly bend your elbows 
									and lower your body toward the floor, as far down as you can go keeping back and hips level. Then press back up and repeat for 30 seconds. You can make 
									this easier by resting your weight on your knees instead of your feet. To boost intensity, try resting your feet on a low bench or step 
									instead of the floor.</p>
									</section>
									
							
									
									<section class="box">
											<header align="center">
												<h2>Ab Crunch</h2>
											</header>
											
											<div align= "center">
									<img src="images/exercise004.jpg" alt="" />
									</div>
									<br>	
									
									
									<p>Start with a basic crunch: Lie flat on your back, with your knees bent and feet on floor. Tighten your core. Press your lower back into the mat and reach toward top of knees. 
									Return to starting position but keep core tight and repeat for 30 seconds.</p>
									</section>
									
									<br>
									
									<section class="box">
											<header align="center">
												<h2>Step-Up</h2>
											</header>
											
											<div align= "center">
									<img src="images/exercise005.jpg" alt="" />
									</div>
									<br>	
									
									
									<p>Stand facing a sturdy chair or bench. Step up onto the chair or bench with your left leg, coming all the way up to stand on it with both 
									feet fully. Then step back down and come back up, starting with your right leg this time. Do as many as you can in 30 seconds. Get your heart 
									pumping!</p>
									</section>
									
									<br>
									
									<section class="box">
											<header align="center">
												<h2>Squat</h2>
											</header>
											
											<div align= "center">
									<img src="images/exercise006.jpg" alt="" />
									</div>
									<br>	
									
									
									<p>Stand with your feet shoulder-width apart and toes forward. Bend your knees as you hinge at the hips, shifting them back and down like you’re about to sit in a chair. Lower yourself as far as you comfortably can, keeping most of your weight on your heels. 
									Stand back up. Repeat for 30 seconds.</p>
									</section>
									
									<br>
									
									<section class="box">
											<header align="center">
												<h2>Triceps Dip on Chair</h2>
											</header>
											
											<div align= "center">
									<img src="images/exercise007.jpg" alt="" />
									</div>
									<br>	
									
									
									<p> Sit on the front edge of a stable and sturdy chair or bench, and put your palms on the edge, fingers pointing forward or slightly toward 
									you. Ease off the chair, supporting your weight with your heels and your palms. Slowly bend your elbows as you lower yourself toward the floor, 
									then push back up. Repeat for 30 seconds. You can make this exercise more challenging by supporting yourself on one leg at a time.</p>
									</section>
									
									<br>
									
									<section class="box">
											<header align="center">
												<h2>Plank</h2>
											</header>
											
											<div align= "center">
									<img src="images/exercise008.jpg" alt="" />
									</div>
									<br>	
									
									
									<p>Lie on your stomach on an exercise mat, with your elbows close to your sides, palms down and fingers facing forward. Lift your torso and 
									thighs off the floor, keeping your body straight. Rest your weight on your elbows and your feet, with toes tucked toward shins. Use your core 
									muscles, and stay in this position for 30 seconds.</p>
									</section>
									
									<br>
									
									<section class="box">
											<header align="center">
												<h2>High Knees</h2>
											</header>
											
											<div align= "center">
									<img src="images/exercise009.jpg" alt="" />
									</div>
									<br>	
									
									
									<p>Run in place for 30 seconds, bringing your knees up as high as you can with each step. Focus on lifting your knees up and down rapidly. 
									Try holding your palms out in front of you at waist height, working to "smack" your knee into your palm with each step. Research has found that
									this kind of training may help more with fat loss than classic aerobic or strength training.</p>
									</section>
									
									<br>
									
									<section class="box">
											<header align="center">
												<h2>Lunges</h2>
											</header>
											
											<div align= "center">
									<img src="images/exercise010.jpg" alt="" />
									</div>
									<br>	
									
									
									<p>Stand with your feet together. Step forward on your right foot, dropping your pelvis down toward the floor (not forward), lowering yourself until both front and back knees are 
									bent as close to a 90-degree angle as possible. Then push back with the front leg and return to your starting position. Switch legs. Repeat for 30 seconds. You can make this more
									challenging with reverse lunges, or make it easier by not lowering your body as deeply.</p>
									</section>
									
									<br>
									
									<section class="box">
											<header align="center">
												<h2>Push-Up and Rotation</h2>
											</header>
											
											<div align= "center">
									<img src="images/exercise011.jpg" alt="" />
									</div>
									<br>	
									
									
									<p>Start in a standard push-up position. Begin a traditional push-up, but as you come back up, shift your weight onto your left side. Rotate your upper body and extend your right 
									arm straight up toward the ceiling. Return to your starting position, then repeat with right side. Repeat for 30 seconds.</p>
									</section>
									
									<br>
									
									<section class="box">
											<header align="center">
												<h2>Side Plank</h2>
											</header>
											
											<div align= "center">
									<img src="images/exercise012.jpg" alt="" />
									</div>
									<br>	
									
									
									<p>Lie on your right side on a mat, with your legs straight and your left leg stacked directly on top of the right. Keeping your ankles, knees, hips, and trunk in a straight line, 
									push your weight up on your bent right elbow, which should be directly under your shoulder. Lift your hips, knees, and trunk off the mat. Hold the position for 15 seconds. Then 
									switch sides. You got through the 7-minute workout. Maximize the benefits and do it two more times.</p>
								
									</section>
								
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