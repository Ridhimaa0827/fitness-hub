<?php
$conn = new mysqli("localhost", "root", "", "fitnesshub");
if($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>🏋️‍♂️ Fitness Hub - Diet Plans</title>
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

        h1 {
            color: #d4af37;
            margin-bottom: 40px;
            text-shadow: 1px 1px 4px rgba(212, 175, 55, 0.3);
        }

        .toggle-btns {
            margin-bottom: 30px;
        }

        .toggle-btns button {
            background-color: transparent;
            border: 2px solid #d4af37;
            color: #d4af37;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .toggle-btns button.active,
        .toggle-btns button:hover {
            background-color: #d4af37;
            color: #111;
        }

        .section {
            display: none;
            animation: fadeIn 0.6s ease-in-out;
        }

        .section.active {
            display: block;
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
        }

        th {
            background-color: #d4af37;
            color: #111;
        }

        tr:nth-child(even) {
            background-color: #1e1e1e;
        }

        .card {
            background: #181818;
            border-radius: 20px;
            padding: 25px;
            margin: 30px auto;
            width: 85%;
            box-shadow: 0 0 25px rgba(212, 175, 55, 0.2);
            border: 1px solid rgba(212, 175, 55, 0.2);
        }

        .card h2 {
            margin-bottom: 15px;
            font-size: 22px;
            color: #d4af37;
        }

        .card ul {
            list-style: none;
            padding: 0;
        }

        .card ul li {
            padding: 10px;
            border-bottom: 1px solid rgba(212, 175, 55, 0.2);
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

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <h1>🍖 Eat Smart, Train Hard — Non-Veg Diet Plans</h1>

    <div class="toggle-btns">
        <button id="bulkingBtn" class="active" onclick="showSection('bulking')">💪 Bulking</button>
        <button id="cuttingBtn" onclick="showSection('cutting')">🔥 Cutting</button>
    </div>

  
    <div id="bulking" class="section active">
        <h2>🍗 Non-Veg Diet Plan for Bulking</h2>
        <?php
        $sql = "SELECT SR_NO, MEAL, TIME, `FOOD OPTIONS`, `DAILY INTAKE` FROM dietnonveg";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table><tr><th>SR_NO</th><th>MEAL</th><th>TIME</th><th>FOOD OPTIONS</th><th>DAILY INTAKE</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['SR_NO']}</td><td><b>{$row['MEAL']}</b></td><td>{$row['TIME']}</td><td><b>{$row['FOOD OPTIONS']}</b></td><td>{$row['DAILY INTAKE']}</td></tr>";
            }
            echo "</table>";
        }
        ?>
        <div class="card">
            <h2>🍽️ Total Daily Intake (Bulking)</h2>
            <p><b>Calories:</b> ~2500-2700 kcal</p>
            <p><b>Protein:</b> ~190-200g</p>
            <p><b>Carbs:</b> ~250-270g</p>
            <p><b>Fats:</b> ~75-85g</p>
        </div>
        <div class="card">
            <h2>✅ Tips for Bulking</h2>
            <ul>
                <li>✔ Progressive overload in workouts is key.</li>
                <li>✔ Prioritize protein for muscle repair and growth.</li>
                <li>✔ Don’t fear healthy fats — they help with hormones.</li>
                <li>✔ Track your weight and adjust calories if needed.</li>
            </ul>
        </div>
    </div>


    <div id="cutting" class="section">
        <h2>🥦 Non-Veg Diet Plan for Cutting</h2>
        <?php
        $sql = "SELECT SR_NO, MEAL, TIME, `FOOD OPTIONS`, `DAILY INTAKE` FROM dietnonveg1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table><tr><th>SR_NO</th><th>MEAL</th><th>TIME</th><th>FOOD OPTIONS</th><th>DAILY INTAKE</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['SR_NO']}</td><td><b>{$row['MEAL']}</b></td><td>{$row['TIME']}</td><td><b>{$row['FOOD OPTIONS']}</b></td><td>{$row['DAILY INTAKE']}</td></tr>";
            }
            echo "</table>";
        }
        ?>
        <div class="card">
            <h2>🍽️ Total Daily Intake (Cutting)</h2>
            <p><b>Calories:</b> ~1720-1900 kcal</p>
            <p><b>Protein:</b> ~180-190g</p>
            <p><b>Carbs:</b> ~120-140g</p>
            <p><b>Fats:</b> ~55-65g</p>
        </div>
        <div class="card">
            <h2>✅ Tips for Cutting</h2>
            <ul>
                <li>✔ Stick to whole, nutrient-dense foods.</li>
                <li>✔ Prioritize progressive overload in weight training.</li>
                <li>✔ Maintain a high protein intake to avoid muscle loss.</li>
                <li>✔ Track macros and adjust portions if fat loss stalls.</li>
            </ul>
        </div>
    </div>

    <?php $conn->close(); ?>

    <a href='trackers.php' class='diet-link'>🖲️ TRACK YOUR PROGRESS</a>

    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            const buttons = document.querySelectorAll('.toggle-btns button');

            sections.forEach(section => {
                section.classList.remove('active');
            });

            buttons.forEach(button => {
                button.classList.remove('active');
            });

            document.getElementById(sectionId).classList.add('active');
            document.getElementById(sectionId + 'Btn').classList.add('active');
        }
		
    </script>
</body>
</html>
