<?php
$conn = new mysqli("localhost", "root", "", "fitnesshub");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitness Coaches</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: #121212;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 20px;
        }
        .coach-cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 50px;
            margin-top: 20px;
        }
        .coach-card {
            border: 1px solid rgba(255, 215, 0, 0.5);
            padding: 25px;
            width: 320px;
            height: 330px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
            background: rgba(30, 30, 30, 0.9);
            border-radius: 15px;
            transition: 0.3s ease-in-out;
        }
        h1 {
            font-size: 2.5em;
            font-weight: 700;
            color:  #d4af37;;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .coach-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(255,215,0,0.5);
        }
        .coach-level {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 10px 15px;
            border-radius: 15px;
            font-size: 15px;
            font-weight: bold;
            color:  #d4af37;;
        }
        .coach-rating {
            color: #ffcc00;
            font-size: 1.2em;
        }
        .coach-price {
            font-size: 1.1em;
            font-weight: bold;
            color: #ffb300;
            margin: 5px 0;
        }
        .coach-buttons button {
            padding: 12px 18px;
            margin: 5px;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            background-color: #d4af37;;
            color: #121212;
            font-size: 15px;
            font-weight: bold;
            transition: 0.3s ease-in-out;
        }
        .coach-buttons button:hover {
            background-color: #ffb300;
            box-shadow: 0 0 10px rgba(255,215,0,0.8);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Our Experienced Coaches</h1>
    <div class="coach-cards">
        <?php
        $coaches = [
            ["id" => 1, "name" => "SEKHAR VEDALA", "level" => "BASIC", "rating" => "5", "coached" => 401, "slots" => 4, "price" => "₹4,999 for 3 Months"],
            ["id" => 2, "name" => "SARITA RAJPUT", "level" => "STARTER", "rating" => "5", "coached" => 18, "slots" => 3, "price" => "₹3,999 for 3 Months"],
            ["id" => 3, "name" => "LEENA DOSHI", "level" => "ADVANCE", "rating" => "4.9", "coached" => 1930, "slots" => 4, "price" => "₹7,499 for 3 Months"],
            ["id" => 4, "name" => "GAURAV DHINGRA", "level" => "BASIC", "rating" => "5", "coached" => 280, "slots" => 6, "price" => "₹4,500 for 3 Months"],
            ["id" => 5, "name" => "HIMANSHU SACHDEVA", "level" => "ADVANCE", "rating" => "4.9", "coached" => 2218, "slots" => 3, "price" => "₹7,999 for 3 Months"],
            ["id" => 6, "name" => "SHWETA SRIVASTAVA", "level" => "STARTER", "rating" => "4.7", "coached" => 142, "slots" => 5, "price" => "₹3,799 for 3 Months"],
			["id" => 7, "name" => "PRINCE CHOUDHARY", "level" => "ADVANCE", "rating" => "5", "coached" => 181, "slots" => 9, "price" => "₹7,499 for 3 Months"],
			["id" => 7, "name" => "AMAN SHARMA", "level" => "PREMIUM", "rating" => "4.9", "coached" => 133, "slots" => 7, "price" => "₹12,499 for 3 Months"]		
        ];

        foreach ($coaches as $coach) {
			echo "<div class='coach-card'>";
			echo "<div class='coach-level'>{$coach['level']}</div>";
			echo "<h2>{$coach['name']}</h2>";
		echo "<p class='coach-price'>Training Price: {$coach['price']}</p>";
		echo "<p>{$coach['rating']}<span class='coach-rating'>★</span> | {$coach['coached']} People Coached</p>";
		echo "<p>{$coach['slots']} slots available</p>";
		echo "<div class='coach-buttons'>";
		echo "<button>💬</button>";
		echo "<a href='booking.php?coach_id=" . $coach['id'] . 
		"&coach_name=" . urlencode($coach['name']) . 
		"&price=" . urlencode($coach['price']) . "'>
		<button>BOOK YOUR SLOT</button></a>";
		echo "</div>";
		echo "</div>";
		}
        ?>
    </div>
</div>

</body>
</html>