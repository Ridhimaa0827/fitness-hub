<?php
$conn = new mysqli("localhost", "root", "", "fitnesshub");
if($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
?>

<html>
<head> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
  <title>Fitness Hub - Home Workouts</title>
  <style>
    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #0e0e0e;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
      padding: 40px 20px;
      text-align: center;
    }

    h1 {
      font-size: 32px;
      margin-bottom: 30px;
      background: linear-gradient(90deg, #d4af37, #fff700);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 2px 2px 8px rgba(212,175,55,0.3);
    }

    h2 {
      color: #d4af37;  /* Change heading color */
      font-size: 28px;
      margin-bottom: 20px;
      text-shadow: 1px 1px 6px rgba(212,175,55,0.4); /* Subtle shadow for h2 */
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

    table {
      width: 90%;
      margin: 20px auto;
      background: #181818;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 15px rgba(212,175,55,0.1);
    }

    th, td {
      padding: 14px;
      border: 1px solid rgba(212,175,55,0.2);
    }

    th {
      background: #d4af37;
      color: #111;
    }

    tr:nth-child(even) {
      background: #1f1f1f;
    }

    tr:hover {
      background: rgba(212,175,55,0.1);
    }

    .card {
      width: 80%;
      margin: 30px auto;
      background: #111;
      padding: 25px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(212,175,55,0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.02);
    }

    .card ul {
      list-style: none;
      padding: 0;
      margin-top: 20px;
      text-align: left;
    }

    .card li {
      margin-bottom: 10px;
      border-bottom: 1px solid rgba(212,175,55,0.2);
      padding-bottom: 10px;
    }

    .diet-link {
      display: inline-block;
      margin-top: 40px;
      font-size: 18px;
      font-weight: bold;
      color: #d4af37;
      border: 2px solid #d4af37;
      padding: 12px 24px;
      border-radius: 10px;
      text-decoration: none;
      transition: all 0.3s ease-in-out;
    }

    .diet-link:hover {
      background: #d4af37;
      color: #111;
    }
  </style>
</head>

<body>

<h1>🔥 Your Fitness Journey Starts Here 🔥</h1>

<div class="tabs">
  <button class="tab-btn active" onclick="showSection('bulking')">💪 Bulking Plan</button>
  <button class="tab-btn" onclick="showSection('cutting')">🔥 Cutting Plan</button>
</div>

<div id="bulking" class="content-section active">
  <h2>🏋️ Home Workout Plan for Bulking</h2>
  <p>This workout plan is designed to help you gain lean muscle mass using bodyweight or minimal equipment. Consistency and proper nutrition are key!</p>
  <?php
  $sql = "SELECT SR_NO, EVENT, EXERCISE, DESCRIPTION FROM homeworkout";
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
     <h2>💡 Smart Bulking Strategy</h2>
        <ul>
            <li>✔ DO: Use progressive overload (add reps or weight weekly)</li>
            <li>✔ DO: Stay in a clean calorie surplus (+300–500)</li>
            <li>✔ DO: Prioritize compound exercises</li>
            <li>❌ AVOID: Skipping rest or overeating junk food</li>
        </ul>
  </div>
</div>

<div id="cutting" class="content-section">
  <h2>🔥 Home Workout Plan for Cutting</h2>
  <p>This workout plan is designed to help you lose fat while maintaining muscle mass. Consistency and proper nutrition are key!</p>
  <?php
  $sql = "SELECT SR_NO, EVENT, EXERCISE, DESCRIPTION FROM homeworkout1";
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
    <h2>🎯 Your Fat-Loss Game Plan</h2>
        <ul>
            <li>✔ Maintain a calorie deficit (~15% below maintenance)</li>
            <li>✔ 2–3 HIIT sessions per week for fat burn</li>
            <li>✔ 1g protein per pound of bodyweight</li>
            <li>✔ Track water, steps, and get 7–8 hrs of sleep</li>
        </ul>
    </div>
</div>
 <a href="displaygw.php" class="diet-link">👉 GYM WORKOUT PLAN 👈</a>

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
