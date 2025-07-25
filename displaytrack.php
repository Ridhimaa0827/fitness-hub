<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    die("User ID is not set in session.");
}

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT username FROM login WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$username_result = $stmt->get_result();

if ($username_result && $username_result->num_rows > 0) {
    $username_row = $username_result->fetch_assoc();
    $username = $username_row['username'];
} else {
    die("No user found with the provided user_id.");
}

$stmt_fitness = $conn->prepare("SELECT * FROM fitness_tracker WHERE user_id = ? ORDER BY date DESC");
$stmt_fitness->bind_param("i", $user_id);
$stmt_fitness->execute();
$fitness_result = $stmt_fitness->get_result();
if (!$fitness_result) {
    die("Error fetching fitness data: " . $conn->error);
}

$stmt_diet = $conn->prepare("SELECT * FROM diet_tracker WHERE user_id = ? ORDER BY date DESC");
$stmt_diet->bind_param("i", $user_id);
$stmt_diet->execute();
$diet_result = $stmt_diet->get_result();
if (!$diet_result) {
    die("Error fetching diet data: " . $conn->error);
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login2.php");
    exit();
}
?>

<html >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Progress</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background:#0d0d0d;
            color: #fff;
            text-align: center;
            transition: background 0.5s ease;
        }

        .hero-banner {
            background: linear-gradient(to right, #d4af37 0%, #111 100%);
            padding: 60px 20px;
            border-bottom: 2px solid #d4af37;
            box-shadow: 0 4px 20px rgba(0,0,0,0.4);
            margin-bottom: 30px;
            animation: fadeIn 1s ease-out;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            color: #fff;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            margin-bottom: 10px;
        }

        .hero-content p {
            font-size: 1.2rem;
            color: #f0f0f0;
            font-style: italic;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            font-size: 2rem;
            color: #d4af37;
            margin-top: 20px;
            text-shadow: 1px 1px 5px rgba(255, 215, 0, 0.7);
        }

        .card {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.6);
            transition: transform 0.3s ease-in-out;
            border: 1px solid #d4af37;
        }

        .card table {
            width: 100%;
            border-collapse: collapse;
        }

        .card th, .card td {
            padding: 12px;
            text-align: center;
            border: 1px solid #d4af37;
        }

        .card th {
            background-color: #d4af37;
            color: #101820;
        }

        .card td {
            background-color: #333;
        }

        button {
            background-color: #d4af37;
            padding: 15px 25px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #101820;
            margin: 10px;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #ff4500;
            transform: scale(1.05);
        }

        .nav-links {
            margin-top: 20px;
        }

        .premium-link {
            display: inline-block;
            padding: 14px 25px;
            background: linear-gradient(45deg, #d4af37, #ffb3d9);
            color: black;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: transform 0.3s ease-in-out;
        }

        .premium-link:hover {
            transform: scale(1.1);
            background: linear-gradient(45deg, #d4af37, #d4af37);
        }

        .footer {
            margin-top: 30px;
            color: #fff;
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>
<body>

<div class="hero-banner">
    <div class="hero-content">
        <h1>Welcome Back, <?php echo htmlspecialchars($username); ?> 👋</h1>
        <p>Track your journey. Stay consistent. Crush your goals 💪</p>
    </div>
</div>

<h2>Your Progress</h2>

<div class="card">
    <h2>Fitness Progress</h2>
    <table>
        <tr>
            <th>Username</th>
            <th>Date</th>
            <th>Weight (kg)</th>
            <th>Workout</th>
            <th>Daily Intake</th>
        </tr>
        <?php if ($fitness_result->num_rows > 0) {
            while ($row = $fitness_result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($username); ?></td>
                    <td><?php echo htmlspecialchars($row['date']); ?></td>
                    <td><?php echo htmlspecialchars($row['weight']); ?></td>
                    <td><?php echo htmlspecialchars($row['workout_details']); ?></td>
                    <td><?php echo htmlspecialchars($row['daily_intake']); ?></td>
                </tr>
            <?php }
        } else { ?>
            <tr><td colspan="5">No fitness records found.</td></tr>
        <?php } ?>
    </table>
</div>

<div class="card">
    <h2>Diet Progress</h2>
    <table>
        <tr>
            <th>Username</th>
            <th>Date</th>
            <th>Meal</th>
            <th>Food Items</th>
        </tr>
        <?php if ($diet_result->num_rows > 0) {
            while ($row = $diet_result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($username); ?></td>
                    <td><?php echo htmlspecialchars($row['date']); ?></td>
                    <td><?php echo htmlspecialchars($row['meal']); ?></td>
                    <td><?php echo htmlspecialchars($row['food']); ?></td>
                </tr>
            <?php }
        } else { ?>
            <tr><td colspan="4">No diet records found.</td></tr>
        <?php } ?>
    </table>
</div>

<div class="nav-links">
    <button onclick="window.location.href='trackers.php'">➕ ADD NEW ENTRY</button>
    <form method="POST" style="display: inline;">
        <button type="submit" name="logout">Logout</button>
    </form>
</div>

<div>
    <a href="displayplans.php" class="premium-link">🚀 Join Premium Plans 🚀</a>
</div>

<div class="footer">
    <p>Made with ❤️ by Your Fitness Team</p>
</div>

</body>
</html>

<?php $conn->close(); ?>
