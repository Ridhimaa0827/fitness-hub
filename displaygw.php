<?php
$conn = new mysqli("localhost", "root", "", "fitnesshub");
if($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
?>

<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <title>Fitness Hub - Gym Workout Plans</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #0e0e0e;
            font-family: 'Segoe UI', sans-serif;
            padding: 30px;
            color: #ffffff;
            text-align: center;
        }

        h1, h2 {
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 20px;
            color: #d4af37;
            text-shadow: 1px 1px 4px rgba(212, 175, 55, 0.3);
        }

        .tabs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .tab-btn {
            padding: 12px 24px;
            border: 2px solid #d4af37;
            background: transparent;
            color: #d4af37;
            font-weight: bold;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-btn.active, .tab-btn:hover {
            background: #d4af37;
            color: #111;
        }

        .content-section {
            display: none;
            animation: fadeIn 0.6s ease forwards;
        }

        .content-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            background: #181818;
            border-radius: 20px;
            padding: 25px;
            margin: 30px auto;
            width: 85%;
            box-shadow: 0 0 25px rgba(212, 175, 55, 0.2);
            border: 1px solid rgba(212, 175, 55, 0.2);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card h2 {
            margin-bottom: 15px;
            font-size: 22px;
        }

        .card ul {
            list-style-type: none;
            padding: 0;
        }

        .card ul li {
            padding: 10px;
            border-bottom: 1px solid rgba(212, 175, 55, 0.2);
            color: #f0f0f0;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 30px auto;
            background: #121212;
            color: #f5f5f5;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0px 0px 15px rgba(212, 175, 55, 0.2);
        }

        th, td {
            padding: 14px;
            border: 1px solid rgba(212, 175, 55, 0.3);
            font-size: 16px;
        }

        th {
            background-color: #d4af37;
            color: #111;
            font-size: 17px;
        }

        tr:nth-child(even) {
            background-color: #1e1e1e;
        }

        tr:hover {
            background-color: rgba(212, 175, 55, 0.15);
        }

        tr:hover td {
            color: #ffffff;
            transition: color 0.3s ease-in-out;
        }

        .diet-link {
            display: inline-block;
            margin-top: 40px;
            font-size: 20px;
            font-weight: bold;
            color: #d4af37;
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid #d4af37;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
        }

        .diet-link:hover {
            background-color: #d4af37;
            color: #111;
            text-decoration: none;
        }

        hr {
            border: none;
            border-top: 1px solid rgba(212, 175, 55, 0.2);
            margin: 50px auto;
            width: 70%;
        }
    </style>
</head>
<body>

<h1> 🔥 Crush Your Fitness Goals 🔥<br> Your Fitness Journey Begins Now</h1>

<div class="tabs">
    <button class="tab-btn active" onclick="showSection('bulking')">💪 Bulking Plan</button>
    <button class="tab-btn" onclick="showSection('cutting')">🔥 Cutting Plan</button>
</div>


<div id="bulking" class="content-section active">
    <h2>🏋️ GYM WORKOUT PLAN FOR BULKING</h2>
    <p>Bulking involves increasing your caloric intake in order to build muscle mass. The goal is to consume more calories than you burn, and focus on strength training to maximize muscle growth while minimizing fat gain.</p>
    <?php
    $sql = "SELECT `SR_NO`,`EVENT`,`EXERCISE`,`DESCRIPTION` FROM gymworkout";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table><tr><th>SR_NO</th><th>EVENT</th><th>EXERCISE</th><th>DESCRIPTION</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['SR_NO']}</td><td><b>{$row['EVENT']}</b></td><td>{$row['EXERCISE']}</td><td><b>{$row['DESCRIPTION']}</b></td></tr>";
        }
        echo "</table>";
    }
    ?>
    <div class="card">
        <h2>⚡ Professional Bulking Tips</h2>
        <ul>
            <li>✔ Ensure a caloric surplus: Aim for a consistent intake of 250–500 extra calories per day.</li>
            <li>✔ Optimize protein intake: Consume at least 1g of protein per pound of body weight to support muscle repair and growth.</li>
            <li>✔ Implement progressive overload: Gradually increase weights or reps each week to continually challenge your muscles.</li>
            <li>✔ Prioritize recovery: Ensure 7-9 hours of sleep per night to allow optimal muscle repair and growth.</li>
        </ul>
    </div>
</div>


<div id="cutting" class="content-section">
    <h2>🔥 GYM WORKOUT PLAN FOR CUTTING</h2>
    <p>Cutting is designed to help you lose fat while preserving muscle mass. During a cutting phase, your goal is to be in a caloric deficit while maintaining strength and muscle mass through resistance training and increased cardio.</p>
    <?php
    $sql = "SELECT `SR_NO`,`EVENT`,`EXERCISE`,`DESCRIPTION` FROM gymworkout1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table><tr><th>SR_NO</th><th>EVENT</th><th>EXERCISE</th><th>DESCRIPTION</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['SR_NO']}</td><td><b>{$row['EVENT']}</b></td><td>{$row['EXERCISE']}</td><td><b>{$row['DESCRIPTION']}</b></td></tr>";
        }
        echo "</table>";
    }
    ?>
    <div class="card">
        <h2>⚡ Professional Cutting Tips</h2>
        <ul>
            <li>✔ Maintain a caloric deficit: Aim to consume 250–500 fewer calories than your maintenance level.</li>
            <li>✔ Prioritize high-quality protein: Consume 1–1.2g of protein per pound of body weight to prevent muscle loss.</li>
            <li>✔ Incorporate cardio: Include 3–4 cardio sessions per week (HIIT and LISS are both effective).</li>
            <li>✔ Keep lifting heavy: Maintain strength through progressive overload to preserve muscle while shedding fat.</li>
            <li>✔ Stay hydrated and sleep well: Aim for 3–4 liters of water daily and 7-9 hours of sleep per night for optimal performance and recovery.</li>
        </ul>
    </div>
</div>

<a href="displaydvp.php" class="diet-link">👉 VEG DIET PLAN 👈</a>

<script>
    function showSection(id) {
        document.querySelectorAll('.content-section').forEach(sec => sec.classList.remove('active'));
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.getElementById(id).classList.add('active');
        document.querySelector(`[onclick="showSection('${id}')"]`).classList.add('active');
    }
</script>

<?php $conn->close(); ?>

</body>
</html>
