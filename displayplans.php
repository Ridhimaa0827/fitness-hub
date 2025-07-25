<?php
$conn = new mysqli("localhost", "root", "", "fitnesshub");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<head>
    <head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <title>FITNESS PLANS</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #0d0d0d; /* Pure black background */
            margin: 0;
            padding: 0;
            color: #ffffff; /* White text */
        }

        .container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 48px;
            font-weight: bold;
            color: #d4af37; /* Gold heading */
            margin-bottom: 10px;
        }

        p {
            font-size: 20px;
            color: #f0f0f0;
        }

        .plans {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }

        .plan-box {
            background: #111; /* Dark inner box */
            color: #fff;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 2px solid #d4af37;
        }

        .plan-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(212, 175, 55, 0.5);
        }

        .plan-box h2 {
            font-size: 24px;
            margin-bottom: 16px;
            color: #d4af37; /* Gold heading inside cards */
        }

        .plan-box ul {
            list-style: none;
            padding: 0;
            font-size: 16px;
            color: #ddd;
            margin-bottom: 20px;
        }

        .plan-box li {
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 12px 24px;
            font-size: 16px;
            background: #d4af37;
            color: black;
            font-weight: bold;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            background: black;
            color: #d4af37;
            border: 2px solid #d4af37;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Find the Right Plan for You</h1>
    <p>Experience premium training, personalized to your lifestyle.</p>

    <div class="plans">
        <?php
        $plans = [
            [
                "title" => "Fitness and Nutrition Coaching",
                "features" => [
                    "Internationally certified coaches",
                    "Personalized diet and workout plans",
                    "Weekly monitoring with a coach",
                    "Regular plan updates",
                    "Continuous support - Coach is just a call away"
                ],
                "class" => "fitness"
            ],
            [
                "title" => "Online Personal Training",
                "features" => [
                    "Online 1-on-1 personal workout training",
                    "Certified and experienced professionals",
                    "Complete workout guidance & customized plans",
                    "Live personal training for your schedule"
                ],
                "class" => "training"
            ],
            [
                "title" => "Injury Rehabilitation",
                "features" => [
                    "1-on-1 personal training recovery program",
                    "Certified physiotherapists",
                    "Complete recovery program from pain to relief",
                    "5 sessions a week, 45 minutes each"
                ],
                "class" => "injury"
            ],
            [
                "title" => "Fittr Kids",
                "features" => [
                    "1-on-1 personal training sessions",
                    "Certified professionals in fitness for kids",
                    "Fun and engaging fitness activities",
                    "5 sessions a week, 45 minutes each"
                ],
                "class" => "kids"
            ]
        ];

        foreach ($plans as $plan) {
            echo "<div class='plan-box {$plan['class']}'>";
            echo "<h2>{$plan['title']}</h2><ul>";
            foreach ($plan['features'] as $feature) {
                echo "<li>✔ $feature</li>";
            }
            echo "</ul><a href='displaycoaches.php' class='btn'>VIEW COACHES</a></div>";
        }
        ?>
    </div>
</div>

</body>
</html>
