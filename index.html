<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
?>

<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fitness Hub</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #0a0a0a;
      color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
      min-height: 100vh;
      overflow-x: hidden;
      animation: fadeInBody 1s ease-in;
      position: relative;
    }

    @keyframes fadeInBody {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .guest-banner {
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: #1e1e1e;
      color: #fff;
      padding: 12px 20px;
      border-radius: 10px;
      border-left: 4px solid #FFD700;
      box-shadow: 0 4px 15px rgba(255, 215, 0, 0.1);
      font-size: 14px;
    }

    .guest-banner a {
      color: #FFD700;
      text-decoration: underline;
      margin-left: 10px;
    }

    .container {
      display: grid;
      grid-template-columns: 1fr 2fr;
      gap: 30px;
      width: 100%;
      max-width: 1200px;
      background: #111;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(255, 215, 0, 0.1);
      animation: slideInContainer 1.2s ease forwards;
    }

    @keyframes slideInContainer {
      from {
        transform: translateY(50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .sidebar {
      background-color: #111;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      border-right: 2px solid #FFD700;
      animation: fadeInSidebar 1s ease-in-out;
    }

    @keyframes fadeInSidebar {
      0% { transform: translateX(-30px); opacity: 0; }
      100% { transform: translateX(0); opacity: 1; }
    }

    .sidebar h2 {
      margin-bottom: 20px;
      color: #FFD700;
      font-size: 22px;
      text-align: center;
    }

    .sidebar a {
      background-color: #1e1e1e;
      color: #fff;
      padding: 14px 20px;
      margin: 10px 0;
      border-left: 5px solid transparent;
      border-radius: 10px;
      text-decoration: none;
      font-weight: bold;
      transition: all 0.3s ease;
      transform: translateX(-15px);
      opacity: 0;
    }

    .sidebar a.visible {
      transform: translateX(0);
      opacity: 1;
    }

    .sidebar a:hover {
      background-color: #2c2c2c;
      border-left: 5px solid #FFD700;
      color: #FFD700;
      transform: scale(1.02);
    }

    .main {
      padding: 40px 30px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      background-color: #fff;
      border-radius: 0 20px 20px 0;
    }

    .card {
      background: #fff;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      border-left: 5px solid #FFD700;
      transition: transform 0.4s ease, opacity 0.4s ease;
      opacity: 0;
      transform: translateY(20px);
      text-align: center;
    }

    .card.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .card h2 {
      color: #0a0a0a;
      margin-bottom: 10px;
    }

    .card p {
      color: #444;
    }

    @media (max-width: 768px) {
      .container {
        grid-template-columns: 1fr;
      }

      .main {
        border-radius: 0 0 20px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <h2>🔗 Navigate</h2>
      <a href="bmi.html">📝 BMI Calculator</a>
      <a href="displayhw.php">💪 Home Workout</a>
      <a href="displaygw.php">🏋️ Gym Workout</a>
      <a href="displaydvp.php">🥗 Veg Diet Plan</a>
      <a href="displaydnv.php">🍗 Non-Veg Diet Plan</a>

      <?php if ($loggedIn): ?>
        <a href="trackers.php">📍 Track Your Fitness</a>
        <a href="displayplans.php">🚀 Join Premium Plans</a>
      <?php else: ?>
        <a href="login2.php" onclick="alert('⚠️ Please login to access the tracker.')">📍 Track Your Fitness</a>
        <a href="login2.php" onclick="alert('⚠️ Please login to view premium plans.')">🚀 Join Premium Plans</a>
      <?php endif; ?>
    </div>

    <div class="main">
      <div class="card">
        <h2>🏋️ Personalized Workouts</h2>
        <p>Get tailored workout plans for your fitness goals.</p>
      </div>
      <div class="card">
        <h2>🍏 Nutrition & Diet Plans</h2>
        <p>Healthy meal plans curated for your body type.</p>
      </div>
      <div class="card">
        <h2>🤝 Community Support</h2>
        <p>Join a community that keeps you motivated daily.</p>
      </div>
      <div class="card">
        <h2>🚀 Premium Plan</h2>
        <p>Access live coaching and premium support with expert trainers.</p>
      </div>
    </div>
  </div>

  <script>
    const cards = document.querySelectorAll('.card');
    const links = document.querySelectorAll('.sidebar a');

    const observer = new IntersectionObserver(entries => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add("visible");
          }, index * 150);
        }
      });
    }, { threshold: 0.3 });

    cards.forEach(card => observer.observe(card));

    links.forEach((link, index) => {
      setTimeout(() => {
        link.classList.add('visible');
      }, index * 150);
    });
  </script>
</body>
</html>
