<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$databasename = "fitnesshub"; 

$conn = new mysqli($servername, $username, $password, $databasename);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE homeworkout (
    `SR_NO` varchar(10) PRIMARY KEY,
    `EVENT` varchar(50),
    `EXERCISE` varchar(1000),
    `DESCRIPTION` varchar(500)
)";

if ($conn->query($sql) === TRUE) {
     echo "Table 'homeworkout' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql_insert="INSERT into homeworkout (`SR_NO`, `EVENT`, `EXERCISE`, `DESCRIPTION`) VALUES
    ('1','FULL BODY STRENGTH','Goblet Squats (Dumbbell/Band) — 4 sets of 8-10 reps,Push-ups (Weighted or Incline for Difficulty) — 3 sets of 8-12 reps,Deadlifts (Dumbbell/Band) — 3 sets of 8-10 reps,Plank to Shoulder Tap — 3 sets of 10 taps each side,Hip Thrusts (Weighted if Possible) — 3 sets of 10-12 reps[✅ Rest: 60-90s between sets]','Full Body is a training method that consists of traning all muscles groups during a single training session.'),
    
	('2','FAT BURN&STRENGTH','Burpees or Jump Squats — 3 sets of 8 reps (Explosive power),Mountain Climbers (Fast-paced) — 3 sets of 20 reps each side,Push-ups to Renegade Row (Dumbbells) — 3 sets of 8-10 reps,Russian Twists (Weighted if Possible) — 3 sets of 20 twists,Superman Hold (Lower Back) — 3 sets of 30 seconds [✅ Rest: 45-60s between sets]','Subcutaneous fat is belly fat you cann feel if you pinch extra skin and tissue around your middle.It builds up deep within the abdomen in the space around the organs.'),
    
	('3','FULL BODY ENDURANCE&TONING','Resistance Band Squats to Press — 3 sets of 10 reps,Step-ups (Chair or Stairs) — 3 sets of 10 reps per leg,Hip Thrusts with Abduction (Glute Burn) — 3 sets of 12 reps,Bicycle Crunches — 3 sets of 15 reps per side,Plank Hold or Side Planks — 3 sets of 30-45 seconds[✅ Rest: 60-90s between sets]','Strength training workout involves performing exercises that utilize resistance, such as bodyweight, free weights, or machines, to deliberately contract and work your muscles, leading to increased muscle strength and size.'),
    
	('4','BUTT&THIGH TONING','Bulgarian Split Squats (Chair or Step) — 3 sets of 10 reps per leg,Glute Bridge March (Alternating Legs) — 3 sets of 10 reps per side,Sumo Squats (Wide Stance) — 3 sets of 8-10 reps,Leg Raises (For Lower Abs) — 3 sets of 12-15 reps,Heel Elevated Glute Bridge(Burnout)-2 sets of 15-20reps[✅ Rest: 60-90s between sets]','It will help shed unwanted fat and build lean muscles.')";

if ($conn->query($sql_insert) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . $conn->error;
}

$sql2= "CREATE TABLE homeworkout1 (
    `SR_NO` varchar(10) PRIMARY KEY,
    `EVENT` varchar(50),
    `EXERCISE` varchar(1500),
    `DESCRIPTION` varchar(500)
)";

if ($conn->query($sql2) === TRUE) {
     echo "Table 'homeworkout1' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql_insert2="INSERT into homeworkout1 (`SR_NO`, `EVENT`, `EXERCISE`, `DESCRIPTION`) VALUES
    ('1','FULL BODY FAT BURN&STRENGTH','Jump Squats or Bodyweight Squats — 3 sets of 10-12 reps,Push-ups (Incline if Needed) — 3 sets of 8-10 reps,Lunges (Alternating Legs) — 3 sets of 10 reps per leg,Mountain Climbers (Fast-paced) — 3 sets of 20 reps each side,Plank Hold — 3 sets of 30-45 seconds[✅ Rest:45-60s between sets]','Full Body is a training method that consists of traning all muscles groups during a single training session.'),
    
	('2','LOWER BODY&CORE FOCUS','Glute Bridges (With Band for Resistance) — 3 sets of 12-15 reps,Bulgarian Split Squats — 3 sets of 8-10 reps per leg,Hip Thrusts (Weighted or Bodyweight) — 3 sets of 10 reps,Leg Raises (For Lower Abs) — 3 sets of 12-15 reps,Side Planks (With Hip Dips) — 3 sets of 10 dips per side [✅ Rest: 60-90s between sets]','Subcutaneous fat is belly fat you cann feel if you pinch extra skin and tissue around your middle.It builds up deep within the abdomen in the space around the organs.'),
    
	('3','HIIT&METABOLIC BOOST','Burpees or High Knees — 3 sets of 10 reps,Push-ups to Shoulder Tap — 3 sets of 8-10 reps,Lunges to Knee Drive (Explosive) — 3 sets of 8 reps per leg,Russian Twists (Weighted if Possible) — 3 sets of 20 twists,Bicycle Crunches — 3 sets of 15 reps per side[✅ Rest: 45-60s between sets]','Strength training workout involves performing exercises that utilize resistance, such as bodyweight, free weights, or machines, to deliberately contract and work your muscles, leading to increased muscle strength and size.'),
    
	('4','STRENGTH TONING','Step-ups (Using Chair or Stairs) — 3 sets of 10 reps per leg,Deadlifts (Resistance Band or Dumbbells) — 3 sets of 8-10 reps,Push-ups (Weighted or Elevated) — 3 sets of 8-10 reps,Side Lunges (For Thighs) — 3 sets of 10 reps per side,Superman Hold (Lower Back) — 3 sets of 30 seconds[✅ Rest: 60-90s between sets]','It will help shed unwanted fat and build lean muscles.')";

if ($conn->query($sql_insert2) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . $conn->error;
}
$conn->close();
?>


