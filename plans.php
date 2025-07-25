<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$databasename = "fitnesshub"; 

$conn = new mysqli($servername, $username, $password, $databasename);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE plans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    features TEXT NOT NULL,
    class VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
     echo "Table 'plans' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql_insert = "INSERT INTO plans (title, features, class) VALUES
('Fitness and Nutrition Coaching', 
 'Internationally certified coaches|Personalized diet and workout plans|Weekly monitoring with a coach|Regular plan updates|Continuous support - Coach is just a phone call away',
 'fitness'),
('Online Personal Training', 
 'Online 1-on-1 personal workout training|Certified and experienced professionals|Complete workout guidance & customized plans|Live personal training for your schedule and lifestyle',
 'training'),
 ('Injury Rehabilition', 
 'Online 1-on-1 personal training recovery program |Qualified and certified physiotherapists|Complete recovery program from pain to relief| 5 sessions a week. 45 minutes each',
 'injury'),
 ('FITTER kids', 
 'Online 1-on-1 personal training sessions|Certified professionals specialising in fitness for kids| Fitness and nutrition activities made interesting for kids |5 sessions a week. 45 minutes each',
 'kids')";
 

 if($conn->query($sql_insert) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . $conn->error;
}
?>

