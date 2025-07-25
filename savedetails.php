<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fitnesshub";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE details (
    `name` varchar(10) PRIMARY KEY,
    `age` varchar(255),
	`email` varchar(20),
    `height` varchar(255),
	`weight` varchar(10),
    `target_weight` varchar(255),
	`start_date` varchar(20)
)";

$name = isset($_POST['name']) ? $_POST['name'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$height = isset($_POST['height']) ? $_POST['height'] : '';
$weight = isset($_POST['weight']) ? $_POST['weight'] : '';
$target_weight = isset($_POST['target_weight']) ? $_POST['target_weight'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';

$sql = $conn->prepare("INSERT INTO  (name, age, gender, email, height, weight, target_weight, start_date) 
                       VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

if ($sql->execute()) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . $conn->error;
}

$sql->close();
$conn->close();
?>

<html>
<head>
    <title>Personal Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        form {
            max-width: 400px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background: blue;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 4px;
            font-size: 16px;
        }
        button:hover {
            background: darkblue;
        }
    </style>
</head>
<body>
    <form action="savedetails.php" method="POST">
        <h2>Personal Details</h2>

        <label for="name">NAME:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="age">AGE:</label>
        <input type="number" id="age" name="age" min="0" placeholder="Enter your age" required>

        <label for="gender">GENDER:</label>
        <select id="gender" name="gender" required>
            <option value="" disabled selected>Select your gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="email">EMAIL:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="height">HEIGHT (cm):</label>
        <input type="number" id="height" name="height" min="0" placeholder="Enter your height in cm" required>

        <label for="weight">WEIGHT (kg):</label>
        <input type="number" id="weight" name="weight" min="0" placeholder="Enter your weight in kg" required>

        <label for="target_weight">TARGET WEIGHT (kg):</label>
        <input type="number" id="target_weight" name="target_weight" min="0" placeholder="Enter your target weight" required>

        <label for="date">DATE when STARTED:</label>
        <input type="date" id="date" name="date" required>

        <br><br>
        <button type="submit">SAVE</button>
    </form>
</body>
</html>
