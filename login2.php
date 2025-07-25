<?php
session_start();

if (isset($_POST['submit'])) {
    $conn = new mysqli("localhost", "root", "", "fitnesshub");

    if ($conn->connect_error) {
        die('<div style="color: white; font-weight: bold;">Connection failed: ' . $conn->connect_error . '</div>');
    }

    $usr = trim($_POST['user']);
    $email = trim($_POST['email']);
    $pass = $_POST['password'];
	
    $sql = "SELECT user_id, username, password FROM login WHERE email='$email' AND username='$usr'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();


        if (password_verify($pass, $row['password'])) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];

            header("Location: trackers.php");
            exit();
        } else {
            echo '<div class="error-box">Incorrect password</div>';
        }
    } else {
        echo '<div class="error-box">Invalid email or username</div>';
    }

    $conn->close();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Fitness Hub</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
             background: url('login.jpeg') no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 0;
        }

        .login-box {
            z-index: 1;
            backdrop-filter: blur(10px);
            background: rgba(28, 28, 28, 0.6);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(255, 215, 0, 0.3);
            text-align: center;
            animation: fadeInUp 1s ease forwards;
            opacity: 0;
            transform: translateY(50px);
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            margin-bottom: 25px;
            color: #FFD700;
            font-size: 32px;
            position: relative;
        }

        h1::after {
            content: "";
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #FFD700, #FFB700);
            display: block;
            margin: 10px auto 0;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
            color: #ddd;
            font-weight: 500;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #444;
            background: #2a2a2a;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            transition: border 0.3s ease, background 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #FFD700;
            background: #1f1f1f;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            background: linear-gradient(90deg, #FFD700, #FFB700);
            color: #000;
            border: none;
            padding: 14px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.3s ease;
        }

        input[type="submit"]:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(255, 215, 0, 0.4);
        }

        input[type="submit"]:active {
            transform: scale(0.98);
        }

        .alt-option {
            margin-top: 30px;
            position: relative;
        }

        .alt-option p {
            color: #ccc;
            margin-bottom: 10px;
        }

        .alt-option::before {
            content: "";
            width: 100px;
            height: 2px;
            background: linear-gradient(90deg, transparent, #FFD700, transparent);
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .alt-option a {
            text-decoration: none;
        }

        .alt-option button {
            background: transparent;
            color: #FFD700;
            padding: 10px 20px;
            font-size: 16px;
            border: 1px solid #FFD700;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .alt-option button:hover {
            background: #FFD700;
            color: #000;
        }

        @media screen and (max-width: 500px) {
            .login-box {
                padding: 30px 20px;
            }

            h1 {
                font-size: 26px;
            }
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h1>Login</h1>
        <form action="login2.php" method="post">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>

            <label for="user">Username</label>
            <input type="text" name="user" id="user" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" name="submit" value="Login">
        </form>

        <div class="alt-option">
            <p>New here?</p>
            <a href="signin.php"><button type="button">Create an Account</button></a>
        </div>
    </div>
</body>
</html>
