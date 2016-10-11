-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2015 at 03:50 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hospital_id` int(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zip` varchar(15) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `distance` varchar(5) NOT NULL,
  `ref` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `name`, `address`, `city`, `zip`, `contact`, `distance`, `ref`) VALUES
(1, 'St Jude Medical Center', '101 East Valencia Mesa Drive, Fullerton, CA 92835-3809\r\n', 'Fullerton', '92835', '714-992-3000', '2.02', '92831'),
(2, 'Placentia-Linda Hospital', '1301 North Rose Drive, Placentia, CA 92870-3899\r\n', 'Placentia', '92870', '714-993-2000', '3.09', '92831'),
(3, 'Anaheim Memorial Medical Ctr', '1111 West La Palma Avenue, Anaheim, CA 92801-2881\r\n', 'Anaheim', '92801', '714-774-1450', '3.19', '92831'),
(4, 'Kindred Hospital-Brea', '875 North Brea Boulevard, Brea, CA 92821-2606\r\n', 'Brea', '92821', '714-529-6842', '3.58', '92831'),
(5, 'Western Medical Center Anaheim', '1025 South Anaheim Boulevard, Anaheim, CA 92805-5806\r\n', 'Anaheim', '92805', '714-533-6220', '3.86', '92831'),
(6, 'Kaiser Foundation Hospital', '441 North Lakeview Avenue, Anaheim, CA 92807-3089\r\n', 'Anaheim', '92807', '714-279-4000', '4.33', '92831'),
(7, 'University of California Irvine Medical Center', '101 The City Drive, Orange, CA 92868-3298\r\n', 'Orange', '92868', '714-456-6011', '6.4', '92831'),
(8, 'West Anaheim Medical Center', '3033 West Orange Avenue, Anaheim, CA 92804-3184\r\n', 'Anaheim', '92804', '714-827-3000', '6.79', '92831'),
(9, 'St Joseph Hospital', '1100 West Stewart Drive, Orange, CA 92668-3891\r\n', 'Orange', '92668', '714-633-9111', '6.95', '92831'),
(10, 'Children''s Hospital of Orange County', '455 South Main Street, Orange, CA 92868-3874\r\n', 'Orange', '92868', '714-997-3000', '7.12', '92831'),
(11, 'Kindred Hospital Santa Ana', '1901 North College Avenue, Santa Ana, CA 92706-2334\r\n', 'Santa Ana', '92706', '714-564-7800', '0.67', '92706'),
(12, 'Garden Grove Hospital & Medical Center', '12601 Garden Grove Boulevard, Garden Grove, CA 92843-1908\r\n', 'Garden Grove', '92843', '714-537-5160', '1.96', '92706'),
(13, 'Western Medical Center Santa Ana', '1001 North Tustin Avenue, Santa Ana, CA 92705-3577\r\n', 'Santa Ana', '92705', '714-835-3555', '2.8', '92706'),
(14, 'Healthbridge Child Rehab Hospital', '393 South Tustin Street Orange, CA 92868\r\n', 'Orange', '92868', '714-289-2400', '2.9', '92706'),
(15, 'HealthSouth Tustin Rehab Hospital', '14851 Yorba Street Tustin, CA 92780-2925\r\n', 'Tustin', '92870', '714-832-9200', '3.14', '92706'),
(16, 'Chapman Medical Center ', '2601 East Chapman Avenue, Orange, CA 92869-3206\r\n', 'Orange', '92869', '714-633-0011', '3.57', '92706'),
(17, 'Coastal Communities Hospital ', '2701 South Bristol Street Santa Ana, CA 92704-6201\r\n', 'Santa Ana', '92704', '714-754-5454', '3.7', '92706');

-- --------------------------------------------------------

--
-- Table structure for table `mealplan`
--

CREATE TABLE IF NOT EXISTS `mealplan` (
  `plan_id` int(5) NOT NULL,
  `planname` varchar(20) NOT NULL,
  `breakfast_item_1` varchar(60) NOT NULL,
  `breakfast_item_2` varchar(60) NOT NULL,
  `breakfast_item_3` varchar(60) NOT NULL,
  `breakfast_item_4` varchar(60) NOT NULL,
  `morningsnack_item_1` varchar(60) NOT NULL,
  `morningsnack_item_2` varchar(60) NOT NULL,
  `lunch_item_1` varchar(60) NOT NULL,
  `lunch_item_2` varchar(60) NOT NULL,
  `lunch_item_3` varchar(60) NOT NULL,
  `lunch_item_4` varchar(60) NOT NULL,
  `snack_item_1` varchar(60) NOT NULL,
  `snack_item_2` varchar(60) NOT NULL,
  `dinner_item_1` varchar(60) NOT NULL,
  `dinner_item_2` varchar(60) NOT NULL,
  `dinner_item_3` varchar(60) NOT NULL,
  `dinner_item_4` varchar(60) NOT NULL,
  `ref` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mealplan`
--

INSERT INTO `mealplan` (`plan_id`, `planname`, `breakfast_item_1`, `breakfast_item_2`, `breakfast_item_3`, `breakfast_item_4`, `morningsnack_item_1`, `morningsnack_item_2`, `lunch_item_1`, `lunch_item_2`, `lunch_item_3`, `lunch_item_4`, `snack_item_1`, `snack_item_2`, `dinner_item_1`, `dinner_item_2`, `dinner_item_3`, `dinner_item_4`, `ref`) VALUES
(1, 'Diabetes Meal Plan 1', '1 Cup Skim Milk', '1 Cup Cheerios Cereal', '1 Orange, medium', '2 Breads', '1 Cup Cantaloupe Melon', '1 Apple', 'Grilled Shrimp Skewers over White Bean Salad', 'Whole-Wheat Pita Bread, small', '1 Cup Skim Milk', '1 Fudgsicle, no sugar added', '2 Tablespoons Prepared Hummus', '1 Small bowl Celery Sticks (not more than 8 ounce)', 'Half Cup Cooked Brown Rice', 'North African Spiced Carrots', 'Tomato-Herb Marinated Flank Steak', '1 Banana', 'diabetes1'),
(2, 'Diabetes Meal Plan 2', '1 Cup Skim Milk', '1/2 Banana, small', '1 Cup Bran Flakes Cereal', '', '1 Fruit & Nut Granola Bar', '', 'Chopped Greek Salad with Chicken', '1 Whole-Wheat Bread', 'Vanilla-Orange Freezer Pops', '', '6 Ounces Nonfat Lemon Yogurt with low calorie sweetner', '', 'Grilled Shrimp Remoulade', '1/2 Cup Cooked Couscous', '1 Peach, medium', '1 Cup Steamed Brussels Sprouts', 'Diabetes Plan 2'),
(3, 'Diabetes Meal Plan 3', '1 Whole-Wheat English Muffin', '1 Cup Skim Milk', '1/2 Cup Blueberries', '1 Teaspoon Fat Free Cream Cheese', '1 Apple', '1/2 Cup Fresh Pineapple', '1 Cup Tossed Salad Mix', '1 Tablespoon Fat Free Blue Cheese Salad Dressing', 'Hungarian Beef Goulash', '1 Slice Reduced-Calorie Oatmeal Bran Bread', '6 Ounces Nonfat Vanilla Yogurt', '1/2 Orange', 'Asian Green Bean Stir-Fry', '1/2 Cup Cooked Quinoa', 'Five-Spice Tilapia', '1 Nectarine, medium', 'Diabetes Plan 3'),
(4, 'Diabetes Meal Plan 4', '1 Cup Skim Milk', '1/2 Cup Hot Oatmeal', '1 Ounce Dried Fruit', '1 Tablespoon Walnuts', '1 Kiwi', '1 Cup Mixed Cereals', '1 Cup Tossed Salad Mix', 'Manhattan Crab Chowder', '1 Tablespoon Low Calorie Caesar Salad Dressing', '1 Slice Reduced-Calorie Oatmeal Bran Bread', '1 Cup Blackberries', '1 Cup Skim Milk', '1/2 Cup Cooked Brown Rice', 'Maple-Glazed Chicken Breasts', '1/2 Cup Steamed Summer Squash', '1/2 Cup Mango', 'Diabetes Plan 4'),
(5, 'Diabetes Meal Plan 5', '1 Scrambled Eggs', '2 Slices Reduced-Calorie Oatmeal Bran Bread', '1/2 Cup Grapefruit', '1 Cup Skim Milk', '6 Ounces Nonfat Vanilla', '1 Apple', '1 Cup Tossed Salad Mix', '1 Tablespoon Fat Free French Salad Dressing', 'Cheese & Spinach Stuffed Portobellos', '1/2 Cup Unsweetened Applesauce', '1/2 Plain Bagel', '2 Tablespoons Prepared Hummus', '1/2 Cup Cooked Quinoa', 'Roasted Baby Bok Choy', '1  Cup Strawberries', 'Maple-Chili Glazed Pork Medallions', 'Diabetes Plan 5'),
(6, 'Diabetes Meal Plan 6', '1 Cup Skim Milk', '1 Whole-Wheat English Muffin', '1 Teaspoon Creamy Peanut Butter', '1 Tablespoon Sugar-Free Jam', '1  Orange, medium', 'Chicken Mulligatawny', '1 Cup Skim Milk', '1 Whole-Wheat Pita Bread, small', '1 Cup Watermelon', '', '1 Peach', '', 'Singapore Chile Crab with Spinach', '1/2 Cup Cooked Brown Rice', 'Rainbow Pepper Saute', '1 Cup Cantaloupe Melon', 'Diabetes Plan 6'),
(7, 'Diabetes Meal Plan 7', '1 Cup Skim Milk', '1 Plum', 'Quick Breakfast Taco', '', '1 Apple', '', '1 Veggie Burger', '1 Whole-Wheat Roll', 'Bok Choy-Apple Slaw', '1 Apricot', '3 Ounces Carrot Sticks', '1/4 Cup Salsa', '1 Peach', '1 Cup Tossed Salad Mix with Caesar Salad Dressing', 'Turkish Chicken Thighs', '1/2 Cup Cooked Brown Rice', 'Diabetes Plan 7'),
(8, 'HT Meal Plan 1', 'Half A Cantaloupe With 1 Cup Of Vanilla Greek Yogurt', 'Whole-Wheat English Muffin', 'Coffee or Tea', '', '1 Cup Of Sugar Snap Peas And 1 Or 2 Apricots', '', 'Gigantic Chopped Salad With Pritikin-Style Dressing', '1/2 Whole-Wheat Bagel Smeared With Nonfat Ricotta Cheese', '1 bowl of Oat Meal', '', 'Bowl Of Fresh Cherries', '', 'Big Salad Of Baby Greens, Fresh Basil, And Strawberries', 'Seared Salmon (4 Oz) With Blueberry Balsamic Bliss', 'Watermelon Snow Cone', '', 'HT Plan 1'),
(9, 'HT Meal Plan 2', 'Steel-Cut Oatmeal', '1 Apple', 'Milk/Coffee/Tea', '', 'Mix Salad', '', 'Veggie Sandwich', '', '', '', 'Baked Potato', '', 'Sprouts and Veggies', 'Bread', 'Big Salad Bar', 'Bowl of Fresh Fruits', 'HT Plan 2'),
(10, 'HT Meal Plan 3', 'Oatmeal', 'Small bowl of mixed berries', 'Coffee or Tea', '', 'Russian Salad', '', 'Tomato And Peach Salad', '1 Corn On The Cob', '1 small Rice with mixed veggies', 'Yogurt', 'Greek Yogurt With Fresh Raspberries', '', 'Grill Veggie Burger', 'Grilled Pineapple Slices with Cinnamon', '', '', 'HT Plan 3'),
(11, 'HT Meal Plan 4', 'Scrambled Egg Whites With Grilled Veggies', '1 Or 2 Slices Whole-Wheat Toast', 'Milk, Coffee or Tea', '', 'Fruit Salsa', 'Mixed Cereals', 'Cold Rice with dressing', '1 Bowl Mixed Salad', 'Sprouts', '', '1/2 Cup Cottage Cheese With Sliced Nectarines', '', 'Red Sauce Pasta with no fat cheese', '', '', '', 'HT Plan 4'),
(12, 'HT Meal Plan 5', 'Polenta With Berry Puree Okay', 'Cup Of Nonfat Plain Yogurt with fruit', 'Milk, Coffee or Tea', '', 'Small bowl of grapes', '', 'Curry Hummus Dip And Cucumbers In A Whole-Wheat Pita', 'Applesauce, No Sugar Added', '', '', 'Veggie and Bean Soup', '', 'Chicken Tacos', 'Fiesta Corn Salad', 'Chocolate pudding', '', 'HT Plan 5'),
(13, 'HT Meal Plan 6', 'Bread', 'Fruit Preserves', 'Milk, Coffee or Tea', '', '1 Kiwi', '', 'Noodles with mixed veggies', '1 bowl of salad', '', '', 'Mixed fruit bowl', '', 'Broccoli Soup', 'Veggie Wrap', '', '', 'HT Plan 6'),
(14, 'HT Meal Plan 7', 'Oat Meal', 'Milk, Coffee or Tea', '1 Bagel', '', 'Smal bowl of grapes', '', 'Rice Bowl with veggies and dressing', 'Sprouts', '', '', 'Bread with spread', '1 cup skimmed milk', 'Burrito with mexican beans', 'Grilled Pineapple', '', '', 'HT Plan 7'),
(15, 'Obesity Meal Plan 2', 'Mexican Egg Scramble', 'Milk, Coffee or Tea', '1/2 Cup Blueberries', '', '1 Cup Cantaloupe Melon', '', 'Guacamole Burger', 'Mixed Salad Bowl', '', '', '6 Ounces Nonfat Vanilla Yogurt', '1/2 Orange', 'Spinach Flatbread Pizza', 'Udon-Tofu Soup', '', '', 'Obesity Plan 2'),
(16, 'Obesity Meal Plan 3', 'Bagel with spread', 'Milk, Coffee or Tea', '1 Ounce Dried Fruit', '', '1 Fruit & Nut Granola Bar', '', 'Garbanzo Veggie Wrap', 'Zesty Black Beans', '', '', 'Bowl Of Fresh Cherries', '1 Cup Skim Milk', 'Chicken Salad With Warm Citrus Dressing', '1/2 Cup Cooked Brown Rice', 'Veggie Curry', '', 'Obesity Plan 3'),
(17, 'Obesity Meal Plan 4', 'Mexican Egg Scramble', 'Berry Parfait', '', '', '1 Kiwi', '1 cup skimmed milk', 'Penne With Feta And Sun-Dried Tomatoes', '1 bowl of salad', '1 Tablespoon Fat Free Blue Cheese Salad Dressing', '', 'Baked Potato', '', 'Half Cup Cooked Brown Rice', 'Boiled Potato', '', '', 'Obesity Plan 4'),
(18, 'Obesity Meal Plan 5', 'Mexican Egg Scramble', '1/2 Banana, small', '', '', '1  Orange, medium', '', 'Whole Wheat Pasta With Ricotta And Vegetables', '1 Whole-Wheat Bread', '', '', '1 Cup Blackberries', '', 'Southwestern Black Bean Cakes With Guacamole', 'Thai Chicken-Broccoli Wraps', '', '', 'Obesity Plan 5'),
(19, 'Obesity Meal Plan 6', 'Scrambled Egg Whites With Grilled Veggies', 'Milk, Coffee or Tea', '1/2 Cup Grapefruit', '', 'Fruit Salsa', '', '1 Cup Tossed Salad Mix', 'Greek Quinoa And Avocados', '', '', '3 Ounces Carrot Sticks', '1 cup skimmed milk', 'Sprouts and Veggies', 'Garbanzo curry', 'Bread', '', 'Obesity Plan 6'),
(20, 'Obesity Meal Plan 7', 'Half A Cantaloupe With 1 Cup Of Vanilla Greek Yogurt', '1/2 Banana, small', 'Milk, Coffee or Tea', '', '1  Orange, medium', '', 'Gigantic Chopped Salad With Pritikin-Style Dressing', 'Whole Wheat Pasta With Ricotta And Vegetables', '', '', '1 Peach', '1 Cup Skim Milk', 'Veggie Wrap', 'Broccoli Soup', '1 bowl mixed salad', '', 'Obesity Plan 7'),
(21, 'Cholesterol Plan 1', '1 hard-boiled egg', '1 orange', 'Milk, Coffee or Tea', '', '1 Cup Cantaloupe Melon', '', 'Bean burrito', '', '', '', '1/2 Plain Bagel', '1 cup skimmed milk', '3 ounces baked white fish with lemon juice', '1 cup zucchini and 1 cup red peppers', '1 small baked potato', '', 'Cholesterol Plan 1'),
(22, 'Cholesterol Plan 2', '3/4 cup cooked plain oatmeal', '1/2 cup chopped apple and 2 tablespoons raisins', '', '', 'Small bowl of grapes', '', 'Chicken Sandwich on whole Grain bread', '1 cup non-fat fruited yogurt', '1/2 cup canned peaches or granola', '', '1 Cup Blackberries', '1 Cup Skim Milk', 'Vegetable Curry', 'Rice', '', '', 'Cholesterol Plan 2'),
(23, 'Cholesterol Plan 3', '2 Scrambled Eggs', '1 Slice Whole Wheat toast', 'Milk, Coffee or Tea', '', '1 Apple', '', '1 Cup Minestrone Soup', '1 Bowl Mixed Salad with dressing', 'Cold Rice', '', '1/2 Plain Bagel', '1 Cup Skim Milk', 'Half Cup Cooked Brown Rice', 'Mashed Potato Curry', 'Broccoli Soup', '', 'Cholesterol Plan 3'),
(24, 'Cholesterol Plan 4', '1 Cup Whole Grain Cold Cereal', '1/2 Cup Skim Milk', '1 Banana', '', '1 Fruit & Nut Granola Bar', '', 'Veggie Wrap', 'Tomato Soup', 'Bread Sticks', '', '1 Cup Blackberries', '1 Cup Skim Milk', 'Chicken Tacos', 'Grilled Pineapple Slices with Cinnamon', '1 Peach, medium', '', 'Cholesterol Plan 4'),
(25, 'Cholesterol Plan 5', '2 Slices Of Whole Wheat French Toast ', '2 Teaspoons Of Unsweetened Applesauce', '8 Ounces Of Non-Fat Fruited Yogurt', '1 Cup Skim Milk', 'Mix Salad', '', 'Burrito', 'Sweet Corn Soup', 'Bok Choy-Apple Slaw', '', '3 Ounces Carrot Sticks', '1 Cup Skim Milk', 'Sprouts and Veggies', 'Bread', 'Tomato-Herb Marinated Flank Steak', '', 'Cholesterol Plan 5'),
(26, 'Cholesterol Plan 6', '1 Cup Non-Fat Fruited Yogurt ', '1 Orange', 'Milk, Coffee or Tea', '', 'Russian Salad', '', 'Vegetable Sandwich', 'Broccoli Soup', '', '', '1 Bowl Of Fresh Cherries', '1 Cup Skim Milk', 'Red Sauce Pasta', 'Russian Salad', '', '', 'Cholesterol Plan 6'),
(27, 'Cholesterol Plan 7', '1 Whole-Wheat English Muffin', '1 Cup Cheerios Cereal', 'Milk, Coffee or Tea', '', '1 Kiwi', 'Mixed Cereals', 'Cold Rice with dressing', 'Whole-Wheat Pita Bread, small', '1 Tablespoon Fat Free Blue Cheese Salad Dressing', '', 'Baked Potato', '1 Cup Skim Milk', 'Half Cup Cooked Brown Rice', 'Vegetable Curry', 'Bread', 'Bowl of Fresh Fruits', 'Cholesterol Plan 7'),
(28, 'Obesity Meal Plan 1', 'Mexican Egg Scramble', '1/2 Banana, small', '', '', ' 1  Orange, medium', '', 'Whole Wheat Pasta With Ricotta And Vegetables', '1 Whole-Wheat Bread', '', '', '1 Cup Blackberries', '', 'Southwestern Black Bean Cakes With Guacamole', 'Thai Chicken-Broccoli Wraps', 'Broccoli Soup', 'Bowl of Fresh Fruits', 'Obesity Plan 1');

-- --------------------------------------------------------

--
-- Table structure for table `urgentcare`
--

CREATE TABLE IF NOT EXISTS `urgentcare` (
  `center_id` int(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `ref` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `urgent_care`
--

CREATE TABLE IF NOT EXISTS `urgent_care` (
  `center_id` int(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `distance` varchar(10) NOT NULL,
  `ref` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urgent_care`
--

INSERT INTO `urgent_care` (`center_id`, `name`, `address`, `zip`, `contact`, `distance`, `ref`) VALUES
(1, 'Concentra Urgent Care', '640 S Placentia Avenue, Placentia, CA 92870\r\n', '92870', '714-579-7772', '1.3', '92831'),
(2, 'MedPost Urgent Care', '858 N Rose Drive, Placentia, CA 92870\r\n', '92870', '714-792-3736', '3.2', '92831'),
(3, 'AME Medical Group Urgent Care', '1440 N. Harbor Boulevard, Fullerton, CA 92835', '92835', '714-451-2230', '3.3', '92831'),
(4, 'MedPost Urgent Care Brea', '2415 E Imperial Hwy., Brea, CA 92821-6114\r\n', '92821', '714-255-1640', '3.6', '92831'),
(5, 'Gateway Urgent Care Medical', '1006 W La Palma Ave., Anaheim, CA 92801-3650\r\n', '92801', '714-778-3838', '4.7', '92831'),
(6, 'Concentra Urgent Care Anaheim', '2121 Towne Centre Place, Anaheim, CA 92806\r\n', '92806', '714-937-1919', '1.8', '92806'),
(7, 'Healthpointe Medical Center', '1717 E Lincoln Ave., Anaheim, CA 92805-4345\r\n', '92805', '714-635-2642', '3.2', '92806'),
(8, 'Anaheim Walk-In', '1236 N Magnolia Ave., Anaheim, CA 92801-2607\r\n', '92801', '714-995-1000', '5.8', '92806'),
(9, 'Sunrise Healthcare Centers', '5475 E La Palma Ave., Anaheim, CA 92807-2075\r\n', '92807', '714-970-0911', '6.6', '92806'),
(10, 'Hoag Urgent Care - Anaheim Hills', '5630 E. Santa Ana Canyon Rd., Anaheim Hills, CA 92807\r\n', '92807', '888-301-0024', '7.7', '92806');

-- --------------------------------------------------------

--
-- Table structure for table `user123`
--

CREATE TABLE IF NOT EXISTS `user123` (
  `user_id` int(5) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(18) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `disease` varchar(15) NOT NULL,
  `mealplan` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user123`
--

INSERT INTO `user123` (`user_id`, `fname`, `lname`, `email`, `age`, `username`, `password`, `gender`, `height`, `weight`, `disease`, `mealplan`) VALUES
(5, 'CHINTAN', 'SHAH', 'chintanshahc21@gmail.com', '24', 'chintanshahc21', 'chintan', 'male', '178', '60', 'Diabetes', ''),
(6, 'Nilesh', 'Pandey', 'nileshpandey3@gmail.com', '25', 'nilesh001', 'nilesh', 'male', '180', '60', 'Diabetes', 'Diabetes Meal Plan 1'),
(7, 'Sanket', 'Desai', 'sanketdesai91@gmail.com', '25', 'sanket111', 'sanket', 'male', '180', '60', 'Hypertension', 'HT Meal Plan 3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'chintanshah35', 'chintanshah35@gmail.com', 'cccc6e08862742cfe6e384ac9361d55e'),
(2, 'nilesh001', 'nileshpandey3@gmail.com', '5c5a4bf04d39cc8905f350b352a4dbd0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `mealplan`
--
ALTER TABLE `mealplan`
  ADD PRIMARY KEY (`plan_id`),
  ADD UNIQUE KEY `planname` (`planname`);

--
-- Indexes for table `urgentcare`
--
ALTER TABLE `urgentcare`
  ADD PRIMARY KEY (`center_id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `urgent_care`
--
ALTER TABLE `urgent_care`
  ADD PRIMARY KEY (`center_id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `user123`
--
ALTER TABLE `user123`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `mealplan`
--
ALTER TABLE `mealplan`
  MODIFY `plan_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `urgentcare`
--
ALTER TABLE `urgentcare`
  MODIFY `center_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `urgent_care`
--
ALTER TABLE `urgent_care`
  MODIFY `center_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user123`
--
ALTER TABLE `user123`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
