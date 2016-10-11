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
					<div class="title">Healthy Recipes</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2></h2>
									</header>
									<section class="box">
											<header align="center">
												<h2>Maple Salmon With Greens, Edamame, And Walnuts</h2>
											</header>
									<br>
									<div align= "center">
									<img src="images/food/maplesalmon.jpg" alt="" />
									
								</div>
									
									
									<p><strong>Makes:</strong> 4 Servings
										<br><strong>Ingredients :</strong>
										<br>3 Tablespoons Pure Maple Syrup, 2 Tablespoons Balsamic Vinegar, 1 Tablespoon Lemon Juice, 1 Tablespoon Dijon Mustard, 1 Tablespoon Finely 
										Chopped Shallot, 1/4 Teaspoon Salt', 1/4 Teaspoon Freshly Ground Black Pepper, 2 Tablespoons Olive Oil, 2 Teaspoons Snipped Fresh Rosemary, 
										4 5-Ounce Fresh Or Frozen Skinless Salmon Fillets, About 1 Inch Thick, 1 6-Ounce Package Fresh Baby Spinach, 1/2 Cup Cooked Shelled Edamame,
										1/2 Cup Red Bell Pepper Strips, 1/4 Cup Chopped Walnuts, Toasted
										<br><strong>Directions:</strong> 
										<br>1. In A Small Saucepan, Combine Maple Syrup, Vinegar, Lemon Juice, Mustard, Shallot, Salt, And Pepper. For Dressing, In A Small Bowl, 
										Stir Together 2 Tablespoons Of The Maple Syrup Mixture And The Olive Oil; Set Aside.
										<br>2. For Glaze, Heat The Remaining Maple Syrup Mixture To Boiling; Reduce Heat. Simmer, Uncovered, About 5 Minutes, Or Until Syrupy. 
										Remove From Heat; Stir In Rosemary.
										<br>3. Preheat Broiler. Place Fish On The Greased, Unheated Rack Of A Broiler Pan And Brush With Half The Glaze. Broil 6 To 7 Inches 
										From Heat For 5 Minutes. Turn Fish Over; Brush With Remaining Glaze. Broil For 3 To 5 Minutes More, Or Until Fish Begins To Flake When 
										Tested With A Fork.
										<br>4. Meanwhile, In A Large Bowl, Combine Spinach, Edamame, Pepper Strips, And Nuts. Drizzle Spinach Mixture With Dressing; Toss To Coat. 
										Spoon Salad Onto Plates; Top With Fish.
										<br>Nutrition Facts Per Serving: 460 Calories, 33g Protein, 18g Carbohydrate, 28 G Fat (5g Saturated), 3g Fiber
									</p>
									
									<br>
									
											<header align="center">
												<h2>Baked Veggie Omelet</h2>
											</header>
											
											<div align= "center">
									<img src="images/food/omlet.jpg" alt="" />
									</div>
									<br>	
									
									
									<p><strong>Makes:</strong> 6 Servings
<br><strong>Ingredients:</strong>
<br>Nonstick Cooking Spray, 2 Tablespoons Butter, 3 Cups Bite-Size Bell Pepper Strips, Sliced Mushrooms, And Thinly Sliced Zucchini, 1/3 Cup Chopped Onion (1 Small), 
1/2 Teaspoon Dried Basil, 1/8 Teaspoon Black Pepper, 1/2 Teaspoon Salt, 3 Tablespoons Tomato Sauce, 10 Egg Whites, 5 Eggs, 1/4 Cup Water, 1/4 Cup Shredded Mozzarella Cheese, 
2 Tablespoons Grated Parmesan Cheese, Tomato Sauce, Warmed (Optional)

<br><strong>Directions:</strong> 
<br>1. Preheat Oven To 400 Degrees F. Lightly Coat A 15-X-10-X-1-Inch Baking Pan With Cooking Spray; Set Aside.
<br>2. In A Large Skillet, Melt Butter Over Medium Heat. Add Vegetables, Onion, And Dried Basil. Cook And Stir 5 To 8 Minutes. Add Pepper And 1/4 Teaspoon Of The Salt. Remove From Heat; Stir In Tomato Sauce; Keep Warm.
<br>3. In A Medium Bowl Beat Egg Whites, Eggs, Water, And Remaining 1/4 Teaspoon Salt With A Whisk Until Combined But Not Frothy. Pour Eggs Into The Baking Pan. Bake, Uncovered, 7 Minutes, Or Until Eggs Have Just Set.
<br>4. Meanwhile, In A Small Bowl, Combine Cheeses; Set Aside.
<br>5. Cut The Baked Eggs Into Six 5-Inch Squares. Using A Spatula, Lift Each Square From The Pan And Invert Onto A Plate. Divide Warm Vegetable Mixture Among Omelets; Top With Cheese. Fold Omelets Diagonally In Half, Forming Triangles. If Desired, Drizzle With Additional Tomato Sauce.
<br>Nutrition Facts Per Serving: 170 Calories, 14g Protein, 7g Carbohydrate, 10g Fat (4g Saturated), 2g Fiber

									
									
									</p>
									
									
											<header align="center">
												<h2>Strawberry Chicken Salad With Warm Citrus Dressing</h2>
											</header>
											
											<div align= "center">
									<img src="images/food/strawberrychicken.jpg" alt="" />
									</div>
									<br>	
									
									
									<p><strong>Makes:</strong> 4 Servings
<br><strong>Ingredients:</strong>
<br>4 Medium Skinless, Boneless Chicken-Breast Halves (About 1 Pound), 1 14-1/2-Ounce Can Chicken Broth, 2 1/2 Cups Strawberries, 1/3 Cup Orange Juice, 2 Tablespoons Salad Oil,
2 Teaspoons Finely Shredded Lemon Peel, 1 Tablespoon Lemon Juice, 1 Teaspoon Sugar, 1/2 Teaspoon Chili Powder, 1/4 Teaspoon Salt, 1/4 Teaspoon Freshly Ground Black Pepper,
6 Cups Torn Spinach, Watercress And/Or Other Greens, 1/4 Cup Chopped Walnuts, Toasted


<br><strong>Directions:</strong> 
<br>1. Sprinkle The Chicken-Breast Halves Lightly With Salt And Pepper. Pour Chicken Broth Into A Large Saucepan; Add Chicken. Bring Broth To A Boil; Reduce Heat. Cover And Simmer 
For 15 To 20 Minutes, Or Until Chicken Is Tender And No Longer Pink. Remove Chicken From Broth With A Slotted Spoon And Cool Slightly.
<br>2. Meanwhile, In A Blender Or Food Processor, Combine 1/2 Cup Of The Strawberries, The Orange Juice, Salad Oil, Lemon Peel, Lemon Juice, Sugar, Chili Powder, Salt, And 
Black Pepper. Cover; Blend Or Process Until Smooth. Transfer To A Small Saucepan. Bring Just To A Boil. Simmer, Uncovered, 5 Minutes, Stirring Occasionally.
<br>3. Thinly Slice Chicken Breasts. In A Large Bowl, Toss Together Salad Greens, Remaining Strawberries, And Chicken.
<br>4. To Serve, Drizzle Warm Dressing Over Salad. Sprinkle With Walnuts.
<br>Nutrition Facts Per Serving: 287 Calories, 31g Protein, 12g Carbohydrate, 14g Fat (2g Saturated), 7g Fiber
									
									</p>

	<header align="center">
												<h2>Whole Wheat Pasta With Ricotta And Vegetables</h2>
											</header>
											
											<div align= "center">
									<img src="images/food/wheatpasta.jpg" alt="" width="640" height="426"/>
									</div>
									<br>	
									
									
									<p><strong>Makes:</strong> 4 Servings
<br><strong>Ingredients:</strong>
<br>8 Ounces Dried Whole Wheat Or Whole-Grain Penne Pasta, 2 1/2 Cups Broccoli Florets, 1 1/2 Cups Asparagus Or Green Beans Cut Into 1-Inch Pieces, 1 Cup Light Ricotta Cheese, 
1/4 Cup Snipped Fresh Basil Or 1 Tablespoon Dried Basil, Crushed, 4 Teaspoons Snipped Fresh Thyme Or 1 Teaspoon Dried Thyme, Crushed, 4 Teaspoons Balsamic Vinegar, 
1 Tablespoon Olive Oil, 1 Garlic Clove, Minced, 1/2 Teaspoon Salt, 1/2 Teaspoon Freshly Ground Black Pepper, 2 Large Ripe Tomatoes, Seeded And Chopped,
2 Tablespoons Grated Parmesan Or Romano Cheese



<br><strong>Directions:</strong> 
<br>1. Cook Pasta According To Package Directions, Omitting Any Oil Or Salt.
<br>2. Add Broccoli Florets And Asparagus Or Green Beans During The Last 3 Minutes Of Cooking; Drain.
<br>3. In A Large Serving Bowl, Combine Ricotta Cheese, Basil, Thyme, Balsamic Vinegar, Olive Oil, Garlic, Salt, And Freshly Ground Pepper.
<br>4. Add Cooked Pasta And Vegetables To Ricotta Mixture. Add Chopped Tomatoes. Toss To Combine. Sprinkle Each Serving With Grated Cheese; Serve Immediately.
<br>Nutrition Facts Per Serving: 361 Calories, 16g Protein, 55g Carbohydrates, 9g Fat (2g Saturated), 7g Fiber
									
									</p>									
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