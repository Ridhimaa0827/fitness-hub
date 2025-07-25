-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2025 at 12:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitnesshub`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `coach_id` varchar(255) NOT NULL,
  `coach_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`coach_id`, `coach_name`, `name`, `email`, `phone`, `address`, `date`, `time`, `price`) VALUES
('1', 'SEKHAR VEDALA', 'hgydlia', 'hgadtij@gmail.com', '5478965235', 'jagbcs', '2025-05-20', '02:30 PM', '4999'),
('1', 'SEKHAR VEDALA', 'hgylia', 'hgatij@gmail.com', '5478961235', 'jagbcs', '2025-05-20', '02:30 PM', '4999'),
('2', 'SARITA RAJPUT', 'ridhima sharma', 'jhdsgcuyijk@gmail.com', '87946513', 'xrdctgfvh', '2025-05-13', '22:13', '3999'),
('6', 'SHWETA SRIVASTAVA', 'ridhima', 'ridhimasharma21150@gmail.com', '09845612378', '2345,bciuwbjckas,kjoi', '2025-05-05', '22:12', '3799'),
('4', 'GAURAV DHINGRA', 'suvidhaa', 'suvidha1@gmail.com', '6574123589', 'wsedrtfvgbhnj', '2025-05-27', '02:30 PM', '4500'),
('1', 'SEKHAR VEDALA', 'suvidhaaaa', 'suvidhaa@gmail.com', '6574891235', 'hgtomah', '2025-05-13', '02:30 PM', '4999'),
('3', 'LEENA DOSHI', 'zsxdcfgv', 'sxdcfgv@gmail.com', '6544578961', 'xdcfgvbh', '2025-05-21', '01:00 PM', '7499');

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `rating` float NOT NULL,
  `people_coached` int(11) NOT NULL,
  `slots_available` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`id`, `name`, `level`, `rating`, `people_coached`, `slots_available`, `price`) VALUES
(1, 'Sekhar Vedala', 'BASIC', 5, 401, 4, 4999.00),
(2, 'Sarita Rajput', 'STARTER', 5, 18, 3, 3999.00),
(3, 'Leena Doshi', 'ADVANCE', 4.9, 1930, 4, 7499.00),
(4, 'Gaurav Dhingra', 'BASIC', 5, 280, 6, 4500.00),
(5, 'Himanshu Sachdeva', 'ADVANCE', 4.9, 2218, 2, 7999.00),
(6, 'Shweta Srivastava', 'STARTER', 4.7, 142, 5, 3799.00);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `BMI` float DEFAULT NULL,
  `target_weight` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `WORKOUT_PLACE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `age`, `gender`, `email`, `height`, `weight`, `BMI`, `target_weight`, `date`, `WORKOUT_PLACE`) VALUES
('ridhima', '22', 'Female', 'ridhimasharma21150@gmail.com', '165', '66', NULL, '60', '2025-05-13', ''),
('ridhimaa', '22', 'Female', 'ridhimasharmaa21150@gmail.com', '165', '66', NULL, '60', '2025-05-13', ''),
('rishkfdika', '25', 'Female', 'rgfsiya@gmail.com', '165', '60', 22.04, '50', '2025-05-19', 'Home'),
('rishkika', '25', 'Female', 'riya@gmail.com', '165', '60', 0, '50', '2025-05-19', 'Home'),
('suvidha', '22', 'Female', 'suvidha@gmail.com', '165', '62', 22.77, '60', '2025-05-19', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `dietnonveg`
--

CREATE TABLE `dietnonveg` (
  `SR_NO` varchar(10) NOT NULL,
  `MEAL` varchar(255) DEFAULT NULL,
  `TIME` varchar(20) DEFAULT NULL,
  `FOOD OPTIONS` varchar(255) DEFAULT NULL,
  `DAILY INTAKE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dietnonveg`
--

INSERT INTO `dietnonveg` (`SR_NO`, `MEAL`, `TIME`, `FOOD OPTIONS`, `DAILY INTAKE`) VALUES
('1', 'BREAKFAST', '8:30-9:30AM', 'Oats & Eggs Power Bowl:1 cup oats (complex carbs),3 whole eggs + 2 egg whites (protein + healthy fats),1 tbsp peanut butter (healthy fats),1 banana (energy boost),1 tbsp chia or flaxseeds (fiber + omega-3s)', 'Calories: ~550 kcal | Protein: 40g | Carbs: 60g | Fats: 18g'),
('2', 'MID-MORNING SNACK', '11 AM', 'Grilled Chicken Wrap:100g grilled chicken breast (lean protein),1 whole wheat tortilla (complex carbs),Lettuce, tomato, and hummus (fiber + micronutrients)', 'Calories: ~300 kcal | Protein: 30g | Carbs: 30g | Fats: 6g'),
('3', 'LUNCH', '1-2 PM', 'Grilled Salmon or Chicken Rice Bowl:150g grilled salmon or chicken breast (protein + omega-3s),1 cup brown rice (complex carbs),Steamed broccoli and carrots (fiber),1 tbsp olive oil (healthy fats)', 'Calories: ~500 kcal | Protein: 45g | Carbs: 50g | Fats: 15g'),
('4', 'PRE-WORKOUT', '4-5PM', 'Rice Cakes with Almond Butter & Honey:2 rice cakes (light carbs),1 tbsp almond butter (healthy fats),1 tsp honey (quick energy)', 'Calories: ~200 kcal | Protein: 7g | Carbs: 30g | Fats: 10g'),
('5', 'POST-WORKOUT', '7-8PM', 'Protein Shake with Banana:1 scoop whey protein (fast-digesting protein),1 medium banana (glycogen replenishment),1 cup almond milk', 'Calories: ~250 kcal | Protein: 30g | Carbs: 30g | Fats: 3g'),
('6', 'DINNER', '9-10PM ', 'Steak or Chicken with Sweet Potato:150g lean steak or chicken breast (protein),1 medium sweet potato (complex carbs),Roasted asparagus or spinach (fiber),1 tbsp butter or olive oil (healthy fats)', 'Calories: ~500kcal | Protein: 45g | Carbs: 40g | Fats: 15g'),
('7', 'BEFORE BED', '11PM', 'Cottage Cheese or Greek Yogurt:1/2 cup low-fat cottage cheese or Greek yogurt (slow-digesting protein),1 tbsp walnuts or flaxseeds (healthy fats)', 'Calories: ~200 kcal | Protein: 20g | Carbs: 5g | Fats: 10g');

-- --------------------------------------------------------

--
-- Table structure for table `dietnonveg1`
--

CREATE TABLE `dietnonveg1` (
  `SR_NO` varchar(10) NOT NULL,
  `MEAL` varchar(255) DEFAULT NULL,
  `TIME` varchar(20) DEFAULT NULL,
  `FOOD OPTIONS` varchar(255) DEFAULT NULL,
  `DAILY INTAKE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dietnonveg1`
--

INSERT INTO `dietnonveg1` (`SR_NO`, `MEAL`, `TIME`, `FOOD OPTIONS`, `DAILY INTAKE`) VALUES
('1', 'BREAKFAST', '8:30-9:30AM', 'High-Protein Omelette:3 egg whites + 1 whole egg (protein + healthy fats),1/2 cup spinach & mushrooms (micronutrients),1 slice whole grain toast (complex carbs),1 tbsp avocado or olive oil (healthy fats)', 'Calories: ~300 kcal | Protein: 28g | Carbs: 20g | Fats: 12g'),
('2', 'MID-MORNING SNACK', '11 AM', 'Grilled Chicken & Nuts:100g grilled chicken breast (lean protein),10 almonds or walnuts (healthy fats)', 'Calories: ~200 kcal | Protein: 25g | Carbs: 2g | Fats: 12g'),
('3', 'LUNCH', '1-2 PM', 'Grilled Salmon Bowl (or Chicken):150g grilled salmon (protein + omega-3s),1 cup quinoa or brown rice (complex carbs),Steamed broccoli & carrots (fiber),1 tbsp olive oil (healthy fats)', 'Calories: ~400 kcal | Protein: 40g | Carbs: 35g | Fats: 15g'),
('4', 'PRE-WORKOUT', '4-5PM', 'Rice Cake & Peanut Butter:2 rice cakes (light carbs),1 tbsp natural peanut butter (healthy fats)', 'Calories: ~150 kcal | Protein: 6g | Carbs: 20g | Fats: 7g'),
('5', 'POST-WORKOUT', '7-8PM', 'Protein Shake & Banana:1 scoop whey isolate (fast-digesting protein),1 medium banana (carbs for glycogen replenishment)', 'Calories: ~220kcal | Protein: 30g | Carbs: 25g | Fats: 2g'),
('6', 'DINNER', '9-10PM ', 'rilled Chicken or Turkey with Veggies:150g grilled chicken breast or turkey (lean protein),1 cup zucchini, spinach, or asparagus (fiber + micronutrients),1 tbsp olive oil (healthy fats)', 'Calories: ~300kcal | Protein: 40g | Carbs: 5g | Fats: 12g'),
('7', 'BEFORE BED', '11PM', 'Cottage Cheese or Greek Yogurt:1/2 cup low-fat cottage cheese or Greek yogurt (slow-digesting protein),1 tbsp flaxseeds or walnuts (healthy fats)', 'Calories: ~150 kcal | Protein: 15g | Carbs: 5g | Fats: 6g');

-- --------------------------------------------------------

--
-- Table structure for table `dietplanveg`
--

CREATE TABLE `dietplanveg` (
  `SR_NO` varchar(10) NOT NULL,
  `MEAL` varchar(255) DEFAULT NULL,
  `TIME` varchar(20) DEFAULT NULL,
  `FOOD OPTIONS` varchar(255) DEFAULT NULL,
  `DAILY INTAKE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dietplanveg`
--

INSERT INTO `dietplanveg` (`SR_NO`, `MEAL`, `TIME`, `FOOD OPTIONS`, `DAILY INTAKE`) VALUES
('1', 'BREAKFAST', '8:30-9:30AM', 'Protein Oats Bowl:1 cup oats (complex carbs),1 scoop plant-based protein powder (pea/rice protein),1 tbsp peanut butter (healthy fats),1 banana (energy boost),Chia & flax seeds (fiber + omega-3s)', 'Calories: ~450 kcal | Protein: 30g | Carbs: 50g | Fats: 15g'),
('2', 'MID-MORNING SNACK', '11 AM', 'Greek Yogurt Bowl (or Plant-based yogurt):1 cup plain Greek yogurt (or soy yogurt),1 handful mixed nuts (healthy fats),Berries for antioxidants', 'Calories: ~300 kcal | Protein: 20g | Carbs: 20g | Fats: 15g'),
('3', 'LUNCH', '1-2 PM', 'Quinoa Lentil Bowl:1 cup quinoa (complete protein + complex carbs),1 cup cooked lentils (protein + fiber),Roasted veggies (broccoli, carrots, bell peppers),1 tbsp olive oil (healthy fats)', 'Calories: ~500 kcal | Protein: 35g | Carbs: 60g | Fats: 12g'),
('4', 'PRE-WORKOUT', '4-5PM', 'Banana & Almond Butter Toast:1 slice whole grain bread,1 banana,1 tbsp almond butter', 'Calories: ~250 kcal | Protein: 8g | Carbs: 40g | Fats: 9g'),
('5', 'POST-WORKOUT', '7-8PM', 'Protein Smoothie:1 scoop plant-based protein,1 cup almond milk,1 cup frozen berries,1 tbsp chia seeds,1 tsp honey (optional)', 'Calories: ~300 kcal | Protein: 30g | Carbs: 30g | Fats: 10g'),
('6', 'DINNER', '9-10PM ', 'Tofu/Paneer Stir-fry:200g tofu or paneer (protein),1 cup brown rice (complex carbs),Mixed veggies (fiber + vitamins),1 tbsp sesame oil or olive oil', 'Calories: ~500kcal | Protein: 40g | Carbs: 50g | Fats: 15g'),
('7', 'BEFORE BED', '11PM', 'Cottage Cheese or Almond Milk with Seeds:1/2 cup cottage cheese (casein protein),1 tbsp pumpkin seeds (magnesium + zinc)', 'Calories: ~150 kcal | Protein: 15g | Carbs: 5g | Fats: 6g');

-- --------------------------------------------------------

--
-- Table structure for table `dietplanveg1`
--

CREATE TABLE `dietplanveg1` (
  `SR_NO` varchar(10) NOT NULL,
  `MEAL` varchar(255) DEFAULT NULL,
  `TIME` varchar(20) DEFAULT NULL,
  `FOOD OPTIONS` varchar(255) DEFAULT NULL,
  `DAILY INTAKE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dietplanveg1`
--

INSERT INTO `dietplanveg1` (`SR_NO`, `MEAL`, `TIME`, `FOOD OPTIONS`, `DAILY INTAKE`) VALUES
('1', 'BREAKFAST', '8:30-9:30AM', 'High-Protein Smoothie:1 scoop plant-based protein powder,1 cup unsweetened almond milk,1/2 banana (energy),1 tbsp chia seeds (fiber + omega-3s),Handful of spinach (micronutrients)', 'Calories: ~250 kcal | Protein: 30g | Carbs: 20g | Fats: 7g'),
('2', 'MID-MORNING SNACK', '11 AM', 'Boiled Chickpeas or Roasted Edamame:1/2 cup boiled chickpeas or roasted edamame (high protein + fiber),Sprinkle of pink salt & paprika (flavor)', 'Calories: ~180 kcal | Protein: 15g | Carbs: 20g | Fats: 5g'),
('3', 'LUNCH', '1-2 PM', 'Tofu & Veggie Bowl:150g tofu (protein),1 cup cauliflower rice or quinoa (fiber + low GI carbs),Roasted broccoli & bell peppers (micronutrients),1 tbsp olive oil (healthy fats),Soy sauce & lemon for flavor', 'Calories: ~350 kcal | Protein: 35g | Carbs: 30g | Fats: 12g'),
('4', 'PRE-WORKOUT', '4-5PM', 'Rice Cake & Peanut Butter:2 rice cakes (light carbs),1 tbsp natural peanut butter (healthy fats)', 'Calories: ~150 kcal | Protein: 6g | Carbs: 20g | Fats: 7g'),
('5', 'POST-WORKOUT', '7-8PM', 'Lentil Soup & Salad:1 cup lentil soup (protein + fiber),Mixed greens salad with cucumbers & tomatoes,1 tbsp flaxseeds (omega-3s)', 'Calories: ~300 kcal | Protein: 25g | Carbs: 35g | Fats: 8g'),
('6', 'DINNER', '9-10PM ', 'Paneer/Tempeh with Veggies:150g paneer or tempeh (high protein),Sautéed zucchini, spinach & mushrooms (fiber + micronutrients),1 tbsp avocado oil (healthy fats)', 'Calories: ~350kcal | Protein: 35g | Carbs: 20g | Fats: 15g'),
('7', 'BEFORE BED', '11PM', 'Cottage Cheese or Greek Yogurt:1/2 cup low-fat cottage cheese or Greek yogurt (slow-digesting protein),1 tbsp walnuts or almonds (healthy fats)', 'Calories: ~150 kcal | Protein: 15g | Carbs: 5g | Fats: 6g');

-- --------------------------------------------------------

--
-- Table structure for table `diet_tracker`
--

CREATE TABLE `diet_tracker` (
  `user_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `meal` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diet_tracker`
--

INSERT INTO `diet_tracker` (`user_id`, `date`, `meal`, `food`) VALUES
(1, '2025-05-12', 'redtfvgbh', 'rtfygbhjn'),
(2, '2025-05-12', 'serdctfgv', 'rdxcfgvbh');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `comments` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `rating`, `comments`, `created_at`) VALUES
(1, 'ridhima', 'ridhimasharma21150@gmail.com', 5, 'good', '2025-05-25 10:01:46'),
(2, 'ridhima', 'ridhimasharma21150@gmail.com', 5, 'good', '2025-05-25 10:01:59'),
(3, 'suvidha', 'suvidha@gmail.com', 4, 'good', '2025-05-25 10:05:36'),
(4, 'suvidha', 'suvidha@gmail.com', 4, 'good', '2025-05-25 10:07:26'),
(5, 'suvidhaaaa', 'suvidhaaa@gmail.com', 4, 'hgtima', '2025-05-25 10:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `fitness_tracker`
--

CREATE TABLE `fitness_tracker` (
  `user_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `workout_details` varchar(255) NOT NULL,
  `daily_intake` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fitness_tracker`
--

INSERT INTO `fitness_tracker` (`user_id`, `date`, `weight`, `workout_details`, `daily_intake`) VALUES
(1, '2025-05-15', '50', 'drcfgvhb', '451230'),
(2, '2025-05-19', '65', 'zawesxdtfgvbyhun', '875412');

-- --------------------------------------------------------

--
-- Table structure for table `gymworkout`
--

CREATE TABLE `gymworkout` (
  `SR_NO` varchar(10) NOT NULL,
  `EVENT` varchar(50) DEFAULT NULL,
  `EXERCISE` varchar(1000) DEFAULT NULL,
  `DESCRIPTION` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gymworkout`
--

INSERT INTO `gymworkout` (`SR_NO`, `EVENT`, `EXERCISE`, `DESCRIPTION`) VALUES
('1', 'CHEST DAY', 'Barbell Bench Press – 4 sets of 6-8 reps,Incline Dumbbell Press – 3 sets of 8-10 reps,Cable Flys or Pec Deck – 3 sets of 10-12 reps,Chest Dips (weighted if possible) – 3 sets of 10-12 reps,Push-ups (to failure) – 2 sets for burnout', 'A Chest workout involves exercise that helps to increase the strength and definition of your chest muscles.A strong chest also helps maintain shoulder stability and prevents injuries.'),
('2', 'ARMS DAY', 'Barbell Curls – 4 sets of 8-10 reps,Hammer Curls – 3 sets of 10-12 reps,Preacher Curls or Concentration Curls – 3 sets of 10-12 reps,Tricep Dips (weighted if possible) – 4 sets of 8-10 reps,Overhead Tricep Extensions – 3 sets of 10-12 reps,Cable Pushdowns – 3 sets of 10-12 reps', 'This program will help you build better biceps and triceps in just 30-40 minutes. Its versatile enough to be completed independently or added to your current program for extra gains.'),
('3', 'BACK DAY', 'Deadlifts – 4 sets of 5-6 reps,Pull-ups or Lat Pulldowns – 4 sets of 8-10 reps,Barbell Rows – 3 sets of 8-10 reps,Single-arm Dumbbell Rows – 3 sets of 10-12 reps,Face Pulls – 3 sets of 10-12 reps,Hyperextensions or Good Mornings – 3 sets of 12-15 reps', 'Back Day is a workout focused on your back muscles. Its part of a Bro Split routine, where you divide your body into different muscle groups, allowing you to train 4–5 days per week while still giving each muscle plenty of time to recover.'),
('4', 'SHOULDER DAY', 'Overhead Barbell Press (OHP) – 4 sets of 6-8 reps,Dumbbell Lateral Raises – 3 sets of 10-12 reps,Arnold Press – 3 sets of 8-10 reps,Face Pulls – 3 sets of 10-12 reps,Barbell or Dumbbell Shrugs – 4 sets of 12-15 reps,Front Raises (plate or dumbbell) – 3 sets of 10-12 reps', 'Shoulder workouts are exercises designed to isolate, strengthen, and tone muscles in your shoulders. Shoulder workouts target several muscle groups in the shoulder area, including the rotator cuff muscles, trapezius muscles, deltoids, and rhomboid muscles.'),
('5', 'STOMACH DAY(Core)', 'Weighted Decline Sit-ups – 3 sets of 10-12 reps,Hanging Leg Raises or Toes to Bar – 3 sets of 12-15 reps,Planks (front & side) – 3 sets of 60 seconds each,Cable Woodchoppers (obliques) – 3 sets of 10-12 reps,Russian Twists (weighted) – 3 sets of 20 reps (10 each side),Mountain Climbers or Bicycle Crunches – 2 sets to failure', 'Subcutaneous fat is belly fat you can feel if you pinch extra skin and tissue around your middle.It builds up deep within the abdomen in the space around the organs.'),
('6', 'LEG DAY', 'Barbell Back Squats – 4 sets of 6-8 reps,Romanian Deadlifts – 3 sets of 8-10 reps,Walking Lunges (dumbbells) – 3 sets of 10-12 reps per leg,Hip Thrusts or Glute Bridges – 3 sets of 10-12 reps,Leg Press or Bulgarian Split Squats – 3 sets of 8-10 reps,Standing Calf Raises – 4 sets of 12-15 reps', 'Leg workout exercises form an integral part of a well-rounded fitness regimen. The legs comprise several large and small muscle groups, including the quadriceps, hamstrings, glutes, and calves. Training each of these muscle groups enhances strength, endurance, balance, and coordination.'),
('7', 'REST DAY', 'Light cardio (walking or cycling),Mobility work and stretching,Foam rolling', 'A rest day is essential for muscle recovery, preventing injuries, and ensuring overall progress in fitness.');

-- --------------------------------------------------------

--
-- Table structure for table `gymworkout1`
--

CREATE TABLE `gymworkout1` (
  `SR_NO` varchar(10) NOT NULL,
  `EVENT` varchar(50) DEFAULT NULL,
  `EXERCISE` varchar(1000) DEFAULT NULL,
  `DESCRIPTION` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gymworkout1`
--

INSERT INTO `gymworkout1` (`SR_NO`, `EVENT`, `EXERCISE`, `DESCRIPTION`) VALUES
('1', 'CHEST DAY', 'Incline Dumbbell Press – 4 sets of 8-10 reps,Flat Barbell Bench Press – 3 sets of 6-8 reps,Cable or Dumbbell Flys – 3 sets of 10-12 reps,Push-ups (to failure) – 2 sets for burnout,Dips (bodyweight or weighted) – 3 sets of 10-12 reps,15-20 min Low-Intensity Steady State (LISS) cardio', 'A Chest workout involves exercise that helps to increase the strength and definition of your chest muscles.A strong chest also helps maintain shoulder stability and prevents injuries.'),
('2', 'ARMS DAY', 'Barbell Curls – 4 sets of 8-10 reps,Dumbbell Hammer Curls – 3 sets of 10-12 reps,Preacher Curls or Concentration Curls – 3 sets of 12-15 reps,Tricep Dips (weighted or bodyweight) – 4 sets of 8-10 reps,Cable Rope Pushdowns – 3 sets of 10-12 reps,Overhead Dumbbell Extensions – 3 sets of 12-15 reps,15 min High-Intensity Interval Training (HIIT) cardio', 'This program will help you build better biceps and triceps in just 30-40 minutes. Its versatile enough to be completed independently or added to your current program for extra gains.'),
('3', 'BACK DAY', 'Deadlifts – 4 sets of 4-6 reps,Pull-ups or Lat Pulldowns – 4 sets of 8-10 reps,Bent-over Barbell Rows – 3 sets of 8-10 reps,Single-arm Dumbbell Rows – 3 sets of 10-12 reps,Face Pulls – 3 sets of 12-15 reps,Hyperextensions (lower back) – 3 sets of 12-15 reps,20 min LISS cardio or 15 min incline walk', 'Back Day is a workout focused on your back muscles. Its part of a Bro Split routine, where you divide your body into different muscle groups, allowing you to train 4–5 days per week while still giving each muscle plenty of time to recover.'),
('4', 'SHOULDER DAY', 'Overhead Barbell Press (OHP) – 4 sets of 6-8 reps,Dumbbell Lateral Raises – 3 sets of 10-12 reps,Arnold Press – 3 sets of 8-10 reps,Face Pulls – 3 sets of 12-15 reps,Barbell or Dumbbell Shrugs – 4 sets of 12-15 reps,Front Raises (plate or dumbbell) – 3 sets of 10-12 reps,15 min HIIT cardio or jump rope', 'Shoulder workouts are exercises designed to isolate, strengthen, and tone muscles in your shoulders. Shoulder workouts target several muscle groups in the shoulder area, including the rotator cuff muscles, trapezius muscles, deltoids, and rhomboid muscles.'),
('5', 'STOMACH DAY(Core)', 'Weighted Decline Sit-ups – 3 sets of 10-12 reps,Hanging Leg Raises or Toes to Bar – 3 sets of 12-15 reps,Planks (front & side) – 3 sets of 60 seconds each,Russian Twists (weighted) – 3 sets of 20 reps (10 each side),Cable Woodchoppers (obliques) – 3 sets of 10-12 reps,30 min LISS cardio or 20 min incline walking', 'Subcutaneous fat is belly fat you can feel if you pinch extra skin and tissue around your middle.It builds up deep within the abdomen in the space around the organs.'),
('6', 'LEG DAY', 'Barbell Back Squats – 4 sets of 6-8 reps,Walking Lunges (dumbbells) – 3 sets of 10-12 reps per leg,Romanian Deadlifts – 3 sets of 8-10 reps,Hip Thrusts or Glute Bridges – 3 sets of 10-12 reps,Leg Press or Bulgarian Split Squats – 3 sets of 8-10 reps,Standing Calf Raises – 4 sets of 12-15 reps,15 min HIIT or 20 min incline treadmill walk', 'Leg workout exercises form an integral part of a well-rounded fitness regimen. The legs comprise several large and small muscle groups, including the quadriceps, hamstrings, glutes, and calves. Training each of these muscle groups enhances strength, endurance, balance, and coordination.'),
('7', 'REST DAY', 'Light cardio (walking,cycling,Swimming),Mobility work and stretching,Foam rolling', 'A rest day is essential for muscle recovery, preventing injuries, and ensuring overall progress in fitness.');

-- --------------------------------------------------------

--
-- Table structure for table `homeworkout`
--

CREATE TABLE `homeworkout` (
  `SR_NO` varchar(10) NOT NULL,
  `EVENT` varchar(50) DEFAULT NULL,
  `EXERCISE` varchar(1000) DEFAULT NULL,
  `DESCRIPTION` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homeworkout`
--

INSERT INTO `homeworkout` (`SR_NO`, `EVENT`, `EXERCISE`, `DESCRIPTION`) VALUES
('1', 'FULL BODY STRENGTH', 'Goblet Squats (Dumbbell/Band) — 4 sets of 8-10 reps,Push-ups (Weighted or Incline for Difficulty) — 3 sets of 8-12 reps,Deadlifts (Dumbbell/Band) — 3 sets of 8-10 reps,Plank to Shoulder Tap — 3 sets of 10 taps each side,Hip Thrusts (Weighted if Possible) — 3 sets of 10-12 reps[✅ Rest: 60-90s between sets]', 'Full Body is a training method that consists of traning all muscles groups during a single training session.'),
('2', 'FAT BURN&STRENGTH', 'Burpees or Jump Squats — 3 sets of 8 reps (Explosive power),Mountain Climbers (Fast-paced) — 3 sets of 20 reps each side,Push-ups to Renegade Row (Dumbbells) — 3 sets of 8-10 reps,Russian Twists (Weighted if Possible) — 3 sets of 20 twists,Superman Hold (Lower Back) — 3 sets of 30 seconds [✅ Rest: 45-60s between sets]', 'Subcutaneous fat is belly fat you cann feel if you pinch extra skin and tissue around your middle.It builds up deep within the abdomen in the space around the organs.'),
('3', 'FULL BODY ENDURANCE&TONING', 'Resistance Band Squats to Press — 3 sets of 10 reps,Step-ups (Chair or Stairs) — 3 sets of 10 reps per leg,Hip Thrusts with Abduction (Glute Burn) — 3 sets of 12 reps,Bicycle Crunches — 3 sets of 15 reps per side,Plank Hold or Side Planks — 3 sets of 30-45 seconds[✅ Rest: 60-90s between sets]', 'Strength training workout involves performing exercises that utilize resistance, such as bodyweight, free weights, or machines, to deliberately contract and work your muscles, leading to increased muscle strength and size.'),
('4', 'BUTT&THIGH TONING', 'Bulgarian Split Squats (Chair or Step) — 3 sets of 10 reps per leg,Glute Bridge March (Alternating Legs) — 3 sets of 10 reps per side,Sumo Squats (Wide Stance) — 3 sets of 8-10 reps,Leg Raises (For Lower Abs) — 3 sets of 12-15 reps,Heel Elevated Glute Bridge(Burnout)-2 sets of 15-20reps[✅ Rest: 60-90s between sets]', 'It will help shed unwanted fat and build lean muscles.');

-- --------------------------------------------------------

--
-- Table structure for table `homeworkout1`
--

CREATE TABLE `homeworkout1` (
  `SR_NO` varchar(10) NOT NULL,
  `EVENT` varchar(50) DEFAULT NULL,
  `EXERCISE` varchar(1500) DEFAULT NULL,
  `DESCRIPTION` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homeworkout1`
--

INSERT INTO `homeworkout1` (`SR_NO`, `EVENT`, `EXERCISE`, `DESCRIPTION`) VALUES
('1', 'FULL BODY FAT BURN&STRENGTH', 'Jump Squats or Bodyweight Squats — 3 sets of 10-12 reps,Push-ups (Incline if Needed) — 3 sets of 8-10 reps,Lunges (Alternating Legs) — 3 sets of 10 reps per leg,Mountain Climbers (Fast-paced) — 3 sets of 20 reps each side,Plank Hold — 3 sets of 30-45 seconds[✅ Rest:45-60s between sets]', 'Full Body is a training method that consists of traning all muscles groups during a single training session.'),
('2', 'LOWER BODY&CORE FOCUS', 'Glute Bridges (With Band for Resistance) — 3 sets of 12-15 reps,Bulgarian Split Squats — 3 sets of 8-10 reps per leg,Hip Thrusts (Weighted or Bodyweight) — 3 sets of 10 reps,Leg Raises (For Lower Abs) — 3 sets of 12-15 reps,Side Planks (With Hip Dips) — 3 sets of 10 dips per side [✅ Rest: 60-90s between sets]', 'Subcutaneous fat is belly fat you cann feel if you pinch extra skin and tissue around your middle.It builds up deep within the abdomen in the space around the organs.'),
('3', 'HIIT&METABOLIC BOOST', 'Burpees or High Knees — 3 sets of 10 reps,Push-ups to Shoulder Tap — 3 sets of 8-10 reps,Lunges to Knee Drive (Explosive) — 3 sets of 8 reps per leg,Russian Twists (Weighted if Possible) — 3 sets of 20 twists,Bicycle Crunches — 3 sets of 15 reps per side[✅ Rest: 45-60s between sets]', 'Strength training workout involves performing exercises that utilize resistance, such as bodyweight, free weights, or machines, to deliberately contract and work your muscles, leading to increased muscle strength and size.'),
('4', 'STRENGTH TONING', 'Step-ups (Using Chair or Stairs) — 3 sets of 10 reps per leg,Deadlifts (Resistance Band or Dumbbells) — 3 sets of 8-10 reps,Push-ups (Weighted or Elevated) — 3 sets of 8-10 reps,Side Lunges (For Thighs) — 3 sets of 10 reps per side,Superman Hold (Lower Back) — 3 sets of 30 seconds[✅ Rest: 60-90s between sets]', 'It will help shed unwanted fat and build lean muscles.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `email`, `username`, `password`) VALUES
(1, 'rahul@gmail.com', 'rahul', '$2y$10$pyZoSNtIXif4xs62uY89HeaVPxo3SYxnrapUQvbGBLZrWANXUF7XC'),
(2, 'ridhimasharma21150@gmail.com', 'ridhima', '$2y$10$63n0ncM1iKAp1s.eHWpDBe.df80pZ0SCPjIjXQhruNlN14joDe2r6'),
(3, 'riya@gmail.com', 'rishika', '$2y$10$pKdIrV2OenLtBtwHo/oo3edcUJE22zN1SnJ.DWkvshWGKB0f8PZAm'),
(4, 'suvidha@gmail.com', 'suvidha', '$2y$10$W6s6i/5HNbFRLWa782Nc3u7k0gUpnW1w/GvRpF1kK1Mr6Gucosjiq'),
(5, 'suvidha1@gmail.com', 'suvidhaa', '$2y$10$5jXb9w85PdTCsDYvFMQG8OGxrdA6DAS5FEahzi9t9nd6xQxhneBW6');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `features` text NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `features`, `class`) VALUES
(1, 'Fitness and Nutrition Coaching', 'Internationally certified coaches|Personalized diet and workout plans|Weekly monitoring with a coach|Regular plan updates|Continuous support - Coach is just a phone call away', 'fitness'),
(2, 'Online Personal Training', 'Online 1-on-1 personal workout training|Certified and experienced professionals|Complete workout guidance & customized plans|Live personal training for your schedule and lifestyle', 'training'),
(3, 'Injury Rehabilition', 'Online 1-on-1 personal training recovery program |Qualified and certified physiotherapists|Complete recovery program from pain to relief| 5 sessions a week. 45 minutes each', 'injury'),
(4, 'FITTER kids', 'Online 1-on-1 personal training sessions|Certified professionals specialising in fitness for kids| Fitness and nutrition activities made interesting for kids |5 sessions a week. 45 minutes each', 'kids');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`email`,`phone`);

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`name`,`email`);

--
-- Indexes for table `dietnonveg`
--
ALTER TABLE `dietnonveg`
  ADD PRIMARY KEY (`SR_NO`);

--
-- Indexes for table `dietnonveg1`
--
ALTER TABLE `dietnonveg1`
  ADD PRIMARY KEY (`SR_NO`);

--
-- Indexes for table `dietplanveg`
--
ALTER TABLE `dietplanveg`
  ADD PRIMARY KEY (`SR_NO`);

--
-- Indexes for table `dietplanveg1`
--
ALTER TABLE `dietplanveg1`
  ADD PRIMARY KEY (`SR_NO`);

--
-- Indexes for table `diet_tracker`
--
ALTER TABLE `diet_tracker`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitness_tracker`
--
ALTER TABLE `fitness_tracker`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `gymworkout`
--
ALTER TABLE `gymworkout`
  ADD PRIMARY KEY (`SR_NO`);

--
-- Indexes for table `gymworkout1`
--
ALTER TABLE `gymworkout1`
  ADD PRIMARY KEY (`SR_NO`);

--
-- Indexes for table `homeworkout`
--
ALTER TABLE `homeworkout`
  ADD PRIMARY KEY (`SR_NO`);

--
-- Indexes for table `homeworkout1`
--
ALTER TABLE `homeworkout1`
  ADD PRIMARY KEY (`SR_NO`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
