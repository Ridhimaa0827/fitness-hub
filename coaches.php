<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "fitnesshub";


$conn = new mysqli($servername, $username, $password, $databasename);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS coaches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    level VARCHAR(50) NOT NULL,
    rating FLOAT NOT NULL,
    people_coached INT NOT NULL,
    slots_available INT NOT NULL,
	price DECIMAL(10,2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'coaches' is ready!<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$checkData = "SELECT COUNT(*) as count FROM coaches";
$result = $conn->query($checkData);
$row = $result->fetch_assoc();

if ($row['count'] == 0) {
    $sql_insert = "INSERT INTO coaches (name, level, rating, people_coached, slots_available,price) VALUES
    ('Sekhar Vedala', 'BASIC', 5, 401, 17, 4999),
    ('Sarita Rajput', 'STARTER', 5, 18, 13, 3999),
    ('Leena Doshi', 'ADVANCE', 4.9, 1930, 18, 7499),
	('Gaurav Dhingra', 'BASIC', 5, 280, 10, 4500),
    ('Himanshu Sachdeva', 'ADVANCE', 4.9, 2218, 11, 7999),
    ('Shweta Srivastava', 'STARTER', 4.7, 142, 16, 3799),
	('Prince Chaudhary', 'ADVANCE', 5,181, 9, 7499),
    ('Aman Sharma', 'Premium', 4.9, 133, 7, 12499);
	

    if ($conn->query($sql_insert) === TRUE) {
        echo "Data inserted successfully!<br>";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}

$sql_fetch = "SELECT * FROM coaches";
$result = $conn->query($sql_fetch);

?>

