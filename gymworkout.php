<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$databasename = "fitnesshub"; 

$conn = new mysqli($servername, $username, $password, $databasename);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE gymworkout (
    `SR_NO` varchar(10) PRIMARY KEY,
    `EVENT` varchar(50),
    `EXERCISE` varchar(1000),
    `DESCRIPTION` varchar(500)
)";

if ($conn->query($sql) === TRUE) {
     echo "Table 'gymworkout' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql_insert="INSERT into gymworkout(`SR_NO`, `EVENT`, `EXERCISE`, `DESCRIPTION`)  VALUES
    ('1','CHEST DAY','Barbell Bench Press – 4 sets of 6-8 reps,Incline Dumbbell Press – 3 sets of 8-10 reps,Cable Flys or Pec Deck – 3 sets of 10-12 reps,Chest Dips (weighted if possible) – 3 sets of 10-12 reps,Push-ups (to failure) – 2 sets for burnout','A Chest workout involves exercise that helps to increase the strength and definition of your chest muscles.A strong chest also helps maintain shoulder stability and prevents injuries.'),
    
	('2','ARMS DAY','Barbell Curls – 4 sets of 8-10 reps,Hammer Curls – 3 sets of 10-12 reps,Preacher Curls or Concentration Curls – 3 sets of 10-12 reps,Tricep Dips (weighted if possible) – 4 sets of 8-10 reps,Overhead Tricep Extensions – 3 sets of 10-12 reps,Cable Pushdowns – 3 sets of 10-12 reps','This program will help you build better biceps and triceps in just 30-40 minutes. Its versatile enough to be completed independently or added to your current program for extra gains.'),
   
	('3','BACK DAY','Deadlifts – 4 sets of 5-6 reps,Pull-ups or Lat Pulldowns – 4 sets of 8-10 reps,Barbell Rows – 3 sets of 8-10 reps,Single-arm Dumbbell Rows – 3 sets of 10-12 reps,Face Pulls – 3 sets of 10-12 reps,Hyperextensions or Good Mornings – 3 sets of 12-15 reps','Back Day is a workout focused on your back muscles. Its part of a Bro Split routine, where you divide your body into different muscle groups, allowing you to train 4–5 days per week while still giving each muscle plenty of time to recover.'),
    
	('4','SHOULDER DAY','Overhead Barbell Press (OHP) – 4 sets of 6-8 reps,Dumbbell Lateral Raises – 3 sets of 10-12 reps,Arnold Press – 3 sets of 8-10 reps,Face Pulls – 3 sets of 10-12 reps,Barbell or Dumbbell Shrugs – 4 sets of 12-15 reps,Front Raises (plate or dumbbell) – 3 sets of 10-12 reps','Shoulder workouts are exercises designed to isolate, strengthen, and tone muscles in your shoulders. Shoulder workouts target several muscle groups in the shoulder area, including the rotator cuff muscles, trapezius muscles, deltoids, and rhomboid muscles.'),
	
	('5','STOMACH DAY(Core)','Weighted Decline Sit-ups – 3 sets of 10-12 reps,Hanging Leg Raises or Toes to Bar – 3 sets of 12-15 reps,Planks (front & side) – 3 sets of 60 seconds each,Cable Woodchoppers (obliques) – 3 sets of 10-12 reps,Russian Twists (weighted) – 3 sets of 20 reps (10 each side),Mountain Climbers or Bicycle Crunches – 2 sets to failure','Subcutaneous fat is belly fat you can feel if you pinch extra skin and tissue around your middle.It builds up deep within the abdomen in the space around the organs.'),
	
	('6','LEG DAY','Barbell Back Squats – 4 sets of 6-8 reps,Romanian Deadlifts – 3 sets of 8-10 reps,Walking Lunges (dumbbells) – 3 sets of 10-12 reps per leg,Hip Thrusts or Glute Bridges – 3 sets of 10-12 reps,Leg Press or Bulgarian Split Squats – 3 sets of 8-10 reps,Standing Calf Raises – 4 sets of 12-15 reps','Leg workout exercises form an integral part of a well-rounded fitness regimen. The legs comprise several large and small muscle groups, including the quadriceps, hamstrings, glutes, and calves. Training each of these muscle groups enhances strength, endurance, balance, and coordination.'),
	
    ('7','REST DAY','Light cardio (walking or cycling),Mobility work and stretching,Foam rolling','A rest day is essential for muscle recovery, preventing injuries, and ensuring overall progress in fitness.')";	

if($conn->query($sql_insert) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . $conn->error;
}
$sql2 = "CREATE TABLE IF NOT EXISTS gymworkout1 (
    `SR_NO` varchar(10) PRIMARY KEY,
    `EVENT` varchar(50),
    `EXERCISE` varchar(1000),
    `DESCRIPTION` varchar(500)
)";

if ($conn->query($sql2) === TRUE) {
     echo "Table 'gymworkout1' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql_insert2="INSERT into gymworkout1(`SR_NO`, `EVENT`, `EXERCISE`, `DESCRIPTION`)  VALUES
    ('1','CHEST DAY','Incline Dumbbell Press – 4 sets of 8-10 reps,Flat Barbell Bench Press – 3 sets of 6-8 reps,Cable or Dumbbell Flys – 3 sets of 10-12 reps,Push-ups (to failure) – 2 sets for burnout,Dips (bodyweight or weighted) – 3 sets of 10-12 reps,15-20 min Low-Intensity Steady State (LISS) cardio','A Chest workout involves exercise that helps to increase the strength and definition of your chest muscles.A strong chest also helps maintain shoulder stability and prevents injuries.'),
    
	('2','ARMS DAY','Barbell Curls – 4 sets of 8-10 reps,Dumbbell Hammer Curls – 3 sets of 10-12 reps,Preacher Curls or Concentration Curls – 3 sets of 12-15 reps,Tricep Dips (weighted or bodyweight) – 4 sets of 8-10 reps,Cable Rope Pushdowns – 3 sets of 10-12 reps,Overhead Dumbbell Extensions – 3 sets of 12-15 reps,15 min High-Intensity Interval Training (HIIT) cardio','This program will help you build better biceps and triceps in just 30-40 minutes. Its versatile enough to be completed independently or added to your current program for extra gains.'),
   
	('3','BACK DAY','Deadlifts – 4 sets of 4-6 reps,Pull-ups or Lat Pulldowns – 4 sets of 8-10 reps,Bent-over Barbell Rows – 3 sets of 8-10 reps,Single-arm Dumbbell Rows – 3 sets of 10-12 reps,Face Pulls – 3 sets of 12-15 reps,Hyperextensions (lower back) – 3 sets of 12-15 reps,20 min LISS cardio or 15 min incline walk','Back Day is a workout focused on your back muscles. Its part of a Bro Split routine, where you divide your body into different muscle groups, allowing you to train 4–5 days per week while still giving each muscle plenty of time to recover.'),
    
	('4','SHOULDER DAY','Overhead Barbell Press (OHP) – 4 sets of 6-8 reps,Dumbbell Lateral Raises – 3 sets of 10-12 reps,Arnold Press – 3 sets of 8-10 reps,Face Pulls – 3 sets of 12-15 reps,Barbell or Dumbbell Shrugs – 4 sets of 12-15 reps,Front Raises (plate or dumbbell) – 3 sets of 10-12 reps,15 min HIIT cardio or jump rope','Shoulder workouts are exercises designed to isolate, strengthen, and tone muscles in your shoulders. Shoulder workouts target several muscle groups in the shoulder area, including the rotator cuff muscles, trapezius muscles, deltoids, and rhomboid muscles.'),
	
	('5','STOMACH DAY(Core)','Weighted Decline Sit-ups – 3 sets of 10-12 reps,Hanging Leg Raises or Toes to Bar – 3 sets of 12-15 reps,Planks (front & side) – 3 sets of 60 seconds each,Russian Twists (weighted) – 3 sets of 20 reps (10 each side),Cable Woodchoppers (obliques) – 3 sets of 10-12 reps,30 min LISS cardio or 20 min incline walking','Subcutaneous fat is belly fat you can feel if you pinch extra skin and tissue around your middle.It builds up deep within the abdomen in the space around the organs.'),
	
	('6','LEG DAY','Barbell Back Squats – 4 sets of 6-8 reps,Walking Lunges (dumbbells) – 3 sets of 10-12 reps per leg,Romanian Deadlifts – 3 sets of 8-10 reps,Hip Thrusts or Glute Bridges – 3 sets of 10-12 reps,Leg Press or Bulgarian Split Squats – 3 sets of 8-10 reps,Standing Calf Raises – 4 sets of 12-15 reps,15 min HIIT or 20 min incline treadmill walk','Leg workout exercises form an integral part of a well-rounded fitness regimen. The legs comprise several large and small muscle groups, including the quadriceps, hamstrings, glutes, and calves. Training each of these muscle groups enhances strength, endurance, balance, and coordination.'),
	
    ('7','REST DAY','Light cardio (walking,cycling,Swimming),Mobility work and stretching,Foam rolling','A rest day is essential for muscle recovery, preventing injuries, and ensuring overall progress in fitness.')";	

if($conn->query($sql_insert2) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>

