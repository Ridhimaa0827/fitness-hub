<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Plans</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }
        .plans {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 20px;
        }
        .plan-box {
            flex: 1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .plan-box h2 {
            margin-bottom: 10px;
        }
        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .fitness { background: linear-gradient(to bottom, #ffebcd, #f5d1a1); }
        .training { background: linear-gradient(to bottom, #e6f7e9, #c3e6cb); }
    </style>
</head>
<body>

<div class="container">
    <h1>The right plan for your health</h1>
    <p>Choose the perfect plan for your fitness needs. Flexible and easy to follow.</p>

    <div class="plans">
        <?php
        $plans = [
            [
                "title" => "Fitness and Nutrition Coaching",
                "features" => [
                    "Internationally certified coaches",
                    "Personalized diet and workout plans suited for your lifestyle, goals, medical conditions, and food preferences",
                    "Weekly monitoring with a coach to understand your progress",
                    "Regular plan updates as per your progress and needs",
                    "Continuous support - Coach is just a phone call or message away"
                ],
                "class" => "fitness"
            ],
            [
                "title" => "Online Personal Training",
                "features" => [
                    "Online 1-on-1 personal workout training",
                    "Certified and experienced professionals",
                    "Complete workout guidance & customized plans",
                    "Live personal training for your schedule and lifestyle"
                ],
                "class" => "training"
            ]
        ];

        foreach ($plans as $plan) {
            echo "<div class='plan-box {$plan['class']}'>";
            echo "<h2>{$plan['title']}</h2><ul>";
            foreach ($plan['features'] as $feature) {
                echo "<li>✔ $feature</li>";
            }
            echo "</ul><a href='#' class='btn'>View Coaches</a></div>";
        }
        ?>
    </div>
</div>

</body>
</html>
