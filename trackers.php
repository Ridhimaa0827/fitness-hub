<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
	header("location: login2.php");
	exit();
}
$user_id = $_SESSION['user_id'];

if (isset($_POST['track_fitness'])) {
    $date = $_POST['date'];
    $weight = $_POST['weight'];
    $workout_details = $_POST['workout_details'];
    $daily_intake = $_POST['daily_intake'];

$stmt = $conn->prepare("INSERT INTO fitness_tracker (user_id, date, weight, workout_details, daily_intake) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("isdss", $user_id, $date, $weight, $workout_details, $daily_intake);

    if ($stmt->execute()) {
        echo "<script>alert('✅ Fitness Progress Saved Successfully!');</script>";
    } else {
        echo "<script>alert('❌ Error Saving Fitness Data.');</script>";
    }
    $stmt->close();
}

if (isset($_POST['track_diet'])) {
    $date = $_POST['date'];
    $meal = $_POST['meal'];
    $food = $_POST['food'];

    $stmt = $conn->prepare("INSERT INTO diet_tracker (user_id, date, meal, food) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $date, $meal, $food);

    if ($stmt->execute()) {
        echo "<script>alert('✅ Diet Progress Saved Successfully!');</script>";
    } else {
        echo "<script>alert('❌ Error Saving Diet Data.');</script>";
    }
    $stmt->close();
}
?>
<html >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Track Your Progress</title>
    <style>
        :root {
            --bg-color: #000;
            --text-color: #fff;
            --form-bg: #111;
            --border-color: #D4AF37;
            --highlight: #D4AF37;
            --input-bg: #222;
        }

        body.light-mode {
            --bg-color: #f5f5f5;
            --text-color: #111;
            --form-bg: #fff;
            --border-color: #D4AF37;
            --highlight: #D4AF37;
            --input-bg: #f0f0f0;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
            margin: 0;
            padding: 40px 10px;
            transition: background 0.4s, color 0.4s;
        }

        .tab-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .tab-buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            background-color: var(--highlight);
            color: #000;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .tab-buttons button.active {
            background-color: #fff;
            color: #111;
        }

        .form-section {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }

        .form-section.active {
            display: block;
        }

        form {
            background: var(--form-bg);
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0px 0px 20px rgba(212, 175, 55, 0.2);
            width: 90%;
            max-width: 500px;
            margin: 0 auto 40px;
            border: 2px solid var(--border-color);
        }

        input, textarea {
            background-color: var(--input-bg);
            border: 2px solid var(--border-color);
            border-radius: 6px;
            padding: 12px;
            width: 100%;
            margin-bottom: 14px;
            font-size: 15px;
            color: var(--text-color);
            outline: none;
        }

        label {
            display: block;
            text-align: left;
            margin: 8px 0 5px;
            font-size: 14px;
            font-weight: bold;
        }

        button[type="submit"] {
            background-color: var(--highlight);
            color: black;
            padding: 12px 20px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #fff;
            color: #111;
        }

        a {
            color: var(--highlight);
            font-weight: bold;
            text-decoration: none;
            font-size: 18px;
        }

        a:hover {
            text-decoration: underline;
        }

        .theme-toggle {
            position: absolute;
            top: 20px;
            right: 30px;
            background: var(--highlight);
            color: black;
            padding: 8px 14px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            border: none;
        }
		.view-progress-link {
			display: inline-block;
			margin-top: 30px;
			padding: 12px 30px;
			font-size: 18px;
			font-weight: 700;
			color: var(--highlight);
			background: transparent;
            border: 2px solid var(--highlight);
            border-radius: 12px;
            text-decoration: none;
            box-shadow: 0 0 8px rgba(212, 175, 55, 0.6);
            transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
        }

        .view-progress-link:hover {
             background-color: var(--highlight);
			 color: #000;
			 box-shadow: 0 0 15px rgba(212, 175, 55, 0.9);
		}

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>


    <h2>📊 Track Your Progress</h2>

    <div class="tab-buttons">
        <button class="active" onclick="showTab('fitness')">💪 Fitness</button>
        <button onclick="showTab('diet')">🥗 Diet</button>
    </div>

    <div id="fitness" class="form-section active">
        <form method="POST">
            <label for="date">📅 Date:</label>
            <input type="date" name="date" required>

            <label for="weight">⚖ Weight (kg):</label>
            <input type="number" step="0.1" name="weight" placeholder="Enter your weight" required>

            <label for="workout_details">💪 Workout Details:</label>
            <textarea name="workout_details" placeholder="Describe your workout..." required></textarea>

            <label for="daily_intake">🍎 Daily Intake:</label>
            <input type="number" name="daily_intake" placeholder="Calories, Proteins, Carbs, Fats" required>

            <button type="submit" name="track_fitness">✅ Save Fitness Progress</button>
        </form>
    </div>

    <div id="diet" class="form-section">
        <form method="POST">
            <label for="date">📅 Date:</label>
            <input type="date" name="date" required>

            <label for="meal">🍽 Meal:</label>
            <input type="text" name="meal" placeholder="Breakfast, Lunch, Dinner..." required>

            <label for="food">🥦 Food Items:</label>
            <textarea name="food" placeholder="List your food items..." required></textarea>

            <button type="submit" name="track_diet">✅ Save Diet Progress</button>
        </form>
    </div>

   <a href="displaytrack.php" class="view-progress-link">📍 View Progress</a>

    <script>
        function showTab(tabName) {
            document.querySelectorAll(".form-section").forEach(div => div.classList.remove("active"));
            document.querySelectorAll(".tab-buttons button").forEach(btn => btn.classList.remove("active"));

            document.getElementById(tabName).classList.add("active");
            event.target.classList.add("active");
        }

    </script>

</body>
</html>
