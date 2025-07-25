<?php
$conn = new mysqli("localhost", "root", "", "fitnesshub");
if($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
?>

<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Diet Plan Toggle</title>
  <style>
    body {
      background-color: #0e0e0e;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
      padding: 30px;
      text-align: center;
    }

    h1 {
      color: #d4af37;
      font-size: 32px;
      margin-bottom: 40px;
      text-shadow: 1px 1px 4px rgba(212, 175, 55, 0.3);
    }

    .toggle-buttons {
      display: flex;
      justify-content: center;
      margin-bottom: 40px;
      gap: 20px;
    }

    .toggle-btn {
      background-color: #181818;
      color: #d4af37;
      border: 2px solid #d4af37;
      padding: 12px 30px;
      font-size: 16px;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .toggle-btn:hover {
      background-color: #d4af37;
      color: #111;
    }

    .toggle-btn.active {
      background-color: #d4af37;
      color: #000;
      box-shadow: 0 0 30px rgba(212, 175, 55, 0.7);
      transform: scale(1.08);
    }

    .plan-section {
      display: none;
      animation: fadeIn 0.7s ease-in-out forwards;
    }

    .plan-section.active {
      display: block;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
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
    }

    tr:nth-child(even) {
      background-color: #1e1e1e;
    }

    tr:hover {
      background-color: rgba(212, 175, 55, 0.15);
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
      color: #d4af37;
      margin-bottom: 15px;
    }

    .card p, .card ul li {
      color: #f0f0f0;
    }

    .card ul {
      list-style: none;
      padding: 0;
    }

    .card ul li {
      margin: 8px 0;
    }
  </style>
</head>
<body>

<h1>🥗 Toggle Between Your Diet Goals 🥗</h1>

<div class="toggle-buttons">
  <button class="toggle-btn active" onclick="showSection('bulking')">💪 Bulking Plan</button>
  <button class="toggle-btn" onclick="showSection('cutting')">🔥 Cutting Plan</button>
</div>


<div id="bulking" class="plan-section active">
  <h2 style="color:#d4af37;">VEG DIET PLAN FOR BULKING 💪</h2>
  <?php
  $sql = "SELECT SR_NO, MEAL, TIME, `FOOD OPTIONS`, `DAILY INTAKE` FROM dietplanveg";
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
    <h2>🍽️ Daily Intake (Bulking)</h2>
    <p><b>Calories:</b> 2450-2700 kcal</p>
    <p><b>Protein:</b> 180-200g</p>
    <p><b>Carbs:</b> 250-270g</p>
    <p><b>Fats:</b> 75-85g</p>
  </div>

  <div class="card">
    <h2>✅ Bulking Tips</h2>
    <ul>
      <li>✔ Focus on progressive overload in training</li>
      <li>✔ Eat frequently and prep meals</li>
      <li>✔ Supplement wisely: creatine, B12</li>
      <li>✔ Track gains and adjust calories</li>
    </ul>
  </div>
</div>

<div id="cutting" class="plan-section">
  <h2 style="color:#d4af37;">VEG DIET PLAN FOR CUTTING 🔥</h2>
  <?php
  $sql = "SELECT SR_NO, MEAL, TIME, `FOOD OPTIONS`, `DAILY INTAKE` FROM dietplanveg1";
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
    <h2>🍽️ Daily Intake (Cutting)</h2>
    <p><b>Calories:</b> 1800-2200 kcal</p>
    <p><b>Protein:</b> 160-180g</p>
    <p><b>Carbs:</b> 150-180g</p>
    <p><b>Fats:</b> 60-70g</p>
  </div>

  <div class="card">
    <h2>✅ Cutting Tips</h2>
    <ul>
      <li>✔ Keep protein high to protect muscle</li>
      <li>✔ Reduce carbs carefully</li>
      <li>✔ Focus on strength + cardio</li>
      <li>✔ Hydrate and sleep well</li>
    </ul>
  </div>
</div>
<a href="displaydnv.php" class="diet-link">👉 NON VEG DIET PLAN 👈</a>

<script>
  function showSection(sectionId) {
    const buttons = document.querySelectorAll(".toggle-btn");
    const sections = document.querySelectorAll(".plan-section");

    buttons.forEach(btn => btn.classList.remove("active"));
    sections.forEach(sec => sec.classList.remove("active"));

    document.getElementById(sectionId).classList.add("active");
    event.target.classList.add("active");
  }
</script>

<?php $conn->close(); ?>
</body>
</html>
