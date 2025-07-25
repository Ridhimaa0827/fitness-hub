<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "fitnesshub";

$conn = new mysqli($servername, $username, $password, $databasename);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$booking_success = isset($_SESSION['booking_success']) ? $_SESSION['booking_success'] : false;
$feedback_success = isset($_SESSION['feedback_success']) ? $_SESSION['feedback_success'] : false;

$coach_id = isset($_GET['coach_id']) ? intval($_GET['coach_id']) : 0;
$coach_name = isset($_GET['coach_name']) ? $conn->real_escape_string($_GET['coach_name']) : "";

$price = 0.0;
$price_raw = "";
if (isset($_GET['price'])) {
    $price_raw = urldecode($_GET['price']);
    $price_clean = str_replace(['₹', ','], '', $price_raw);
    $price = floatval($price_clean);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_type']) && $_POST['form_type'] === 'booking') {
    $coach_id = intval($_POST['coach_id']);
    $coach_name = $conn->real_escape_string($_POST['coach_name']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $date = $conn->real_escape_string($_POST['date']);
    $time = $conn->real_escape_string($_POST['time']);
    $price = isset($_POST['price']) ? floatval($_POST['price']) : 0.0;

    if ($price <= 0) {
        die("<p style='color: red;'>⚠️ Error: Price value is missing or invalid!</p>");
    }

    $stmt = $conn->prepare("INSERT INTO booking(coach_id, coach_name, name, email, phone, address, date, time, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssssd", $coach_id, $coach_name, $name, $email, $phone, $address , $date, $time, $price);

    if ($stmt->execute()) {
        $_SESSION['booking_success'] = true;
        $_SESSION['feedback_success'] = false; 
        $booking_success = true;
        $feedback_success = false;
    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_type']) && $_POST['form_type'] === 'feedback') {
    $fb_name = $conn->real_escape_string($_POST['fb_name']);
    $fb_email = $conn->real_escape_string($_POST['fb_email']);
    $fb_rating = intval($_POST['fb_rating']);
    $fb_comments = $conn->real_escape_string($_POST['fb_comments']);

    $stmt = $conn->prepare("INSERT INTO feedback (name, email, rating, comments) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $fb_name, $fb_email, $fb_rating, $fb_comments);

    if ($stmt->execute()) {
        $_SESSION['feedback_success'] = true;
        $feedback_success = true;
    } else {
        echo "<p style='color: red;'>Feedback Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Your Slot & Feedback - FitnessHub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: #181818;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.6);
            border: 2px solid rgba(255, 215, 0, 0.8);
            min-height: 650px; /* ensure consistent height */
        }
        label {
            display: block;
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            color: #d4af37;
            margin-bottom: 5px;
        }
        input, select, textarea {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 2px solid rgba(255, 215, 0, 0.5);
            border-radius: 8px;
            background: #222;
            color: white;
            resize: vertical;
            min-height: 42px;
            box-sizing: border-box;
        }
        textarea {
            min-height: 100px;
        }
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #d4af37;
            box-shadow: 0 0 8px rgba(255, 215, 0, 0.8);
        }
        input[type="submit"] {
            background-color: #d4af37;
            color: black;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: 0.3s ease-in-out;
        }
        input[type="submit"]:hover {
            background-color: #ffb300;
            box-shadow: 0 0 10px rgba(255,215,0,0.8);
            transform: translateY(-2px);
        }
        h2.success {
            color: #4CAF50;
        }
    </style>
</head>
<body>

<div class="container">
    <?php if ($booking_success): ?>
        <h2 class="success">🥳 Booking Successful!</h2>
        <h3>THANK YOU FOR TRUSTING US</h3>
        <p>WE WILL CONNECT YOU SOON 💫</p>

        <?php if (!$feedback_success): ?>
            <h3>Please Give Your Feedback</h3>
            <form method="post" action="">
                <input type="hidden" name="form_type" value="feedback" />
                
                <label for="fb_name">Name:</label>
                <input type="text" id="fb_name" name="fb_name" required>
                
                <label for="fb_email">Email:</label>
                <input type="email" id="fb_email" name="fb_email" required>
                
                <label for="fb_rating">Rate your experience:</label>
                <select id="fb_rating" name="fb_rating" required>
                    <option value="" disabled selected>Select rating</option>
                    <option value="5">⭐⭐⭐⭐⭐ - Excellent</option>
                    <option value="4">⭐⭐⭐⭐ - Good</option>
                    <option value="3">⭐⭐⭐ - Average</option>
                    <option value="2">⭐⭐ - Poor</option>
                    <option value="1">⭐ - Very Poor</option>
                </select>
                
                <label for="fb_comments">Comments:</label>
                <textarea id="fb_comments" name="fb_comments" rows="4" required></textarea>
                
                <input type="submit" value="Submit Feedback">
            </form>
        <?php else: ?>
            <h3 class="success">Thank you for your valuable feedback!</h3>
            <script>
                setTimeout(function() {
                    window.location.href = "login2.php";
                }, 3000);
            </script>
            <?php
                session_unset();
                session_destroy();
            ?>
        <?php endif; ?>

    <?php else: ?>
        <h1 style="color: #d4af37;">Book Your Slot</h1>
        <form method="post" action="">
            <input type="hidden" name="form_type" value="booking" />
            
            <label>Selected Coach:</label>
            <input type="text" name="coach_name" value="<?php echo htmlspecialchars($coach_name); ?>" readonly>
            <input type="hidden" name="coach_id" value="<?php echo htmlspecialchars($coach_id); ?>">

            <label>Price:</label>
            <input type="text" value="<?php echo htmlspecialchars($price_raw); ?>" readonly>
            <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">

            <label for="name">Your Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Your Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="phone">Your Phone:</label>
            <input type="tel" name="phone" id="phone" required>

            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>

            <label for="date">Preferred Date:</label>
            <input type="date" name="date" id="date" required>

            <label for="time">Preferred Time:</label>
            <select name="time" id="time" required>
                <option value="">-- Select Time Slot --</option>
                <option value="10:00 AM">10:00 AM</option>
                <option value="11:30 AM">11:30 AM</option>
                <option value="01:00 PM">1:00 PM</option>
                <option value="02:30 PM">2:30 PM</option>
                <option value="04:00 PM">4:00 PM</option>
                <option value="05:30 PM">5:30 PM</option>
                <option value="07:00 PM">7:00 PM</option>
            </select>

            <input type="submit" value="Book Now">
        </form>
    <?php endif; ?>
</div>

</body>
</html>
