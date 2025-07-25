<?php 
$servername = "localhost";
$username = "root"; 
$password = ""; 
$databasename = "fitnesshub"; 

$conn = new mysqli($servername, $username, $password, $databasename);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE dietplanveg (
    `SR_NO` varchar(10) PRIMARY KEY,
    `MEAL` varchar(255),
	`TIME` varchar(20),
    `FOOD OPTIONS` varchar(255),
	`DAILY INTAKE` varchar(255)
	
)";

if ($conn->query($sql) === TRUE) {
     echo "Table 'dietplanveg' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql_insert="INSERT into dietplanveg(`SR_NO`,`MEAL`,`TIME`,`FOOD OPTIONS`,`DAILY INTAKE`)  VALUES
	
	('1','BREAKFAST','8:30-9:30AM','Protein Oats Bowl:1 cup oats (complex carbs),1 scoop plant-based protein powder (pea/rice protein),1 tbsp peanut butter (healthy fats),1 banana (energy boost),Chia & flax seeds (fiber + omega-3s)','Calories: ~450 kcal | Protein: 30g | Carbs: 50g | Fats: 15g'),
   
	('2','MID-MORNING SNACK','11 AM','Greek Yogurt Bowl (or Plant-based yogurt):1 cup plain Greek yogurt (or soy yogurt),1 handful mixed nuts (healthy fats),Berries for antioxidants','Calories: ~300 kcal | Protein: 20g | Carbs: 20g | Fats: 15g'),
    
	('3','LUNCH','1-2 PM','Quinoa Lentil Bowl:1 cup quinoa (complete protein + complex carbs),1 cup cooked lentils (protein + fiber),Roasted veggies (broccoli, carrots, bell peppers),1 tbsp olive oil (healthy fats)','Calories: ~500 kcal | Protein: 35g | Carbs: 60g | Fats: 12g'),
	
	('4','PRE-WORKOUT','4-5PM','Banana & Almond Butter Toast:1 slice whole grain bread,1 banana,1 tbsp almond butter','Calories: ~250 kcal | Protein: 8g | Carbs: 40g | Fats: 9g'),
	
	('5','POST-WORKOUT','7-8PM','Protein Smoothie:1 scoop plant-based protein,1 cup almond milk,1 cup frozen berries,1 tbsp chia seeds,1 tsp honey (optional)','Calories: ~300 kcal | Protein: 30g | Carbs: 30g | Fats: 10g'),	
    
	('6','DINNER','9-10PM ','Tofu/Paneer Stir-fry:200g tofu or paneer (protein),1 cup brown rice (complex carbs),Mixed veggies (fiber + vitamins),1 tbsp sesame oil or olive oil','Calories: ~500kcal | Protein: 40g | Carbs: 50g | Fats: 15g'),
	
	('7','BEFORE BED','11PM','Cottage Cheese or Almond Milk with Seeds:1/2 cup cottage cheese (casein protein),1 tbsp pumpkin seeds (magnesium + zinc)','Calories: ~150 kcal | Protein: 15g | Carbs: 5g | Fats: 6g')";

if($conn->query($sql_insert) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . $conn->error;
}

$sql2 = "CREATE TABLE dietplanveg1 (
    `SR_NO` varchar(10) PRIMARY KEY,
    `MEAL` varchar(255),
	`TIME` varchar(20),
    `FOOD OPTIONS` varchar(255),
	`DAILY INTAKE` varchar(255)
	
)";

if ($conn->query($sql2) === TRUE) {
     echo "Table 'dietplanveg1' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql_insert2="INSERT into dietplanveg1(`SR_NO`,`MEAL`,`TIME`,`FOOD OPTIONS`,`DAILY INTAKE`)  VALUES
	
	('1','BREAKFAST','8:30-9:30AM','High-Protein Smoothie:1 scoop plant-based protein powder,1 cup unsweetened almond milk,1/2 banana (energy),1 tbsp chia seeds (fiber + omega-3s),Handful of spinach (micronutrients)','Calories: ~250 kcal | Protein: 30g | Carbs: 20g | Fats: 7g'),
   
	('2','MID-MORNING SNACK','11 AM','Boiled Chickpeas or Roasted Edamame:1/2 cup boiled chickpeas or roasted edamame (high protein + fiber),Sprinkle of pink salt & paprika (flavor)','Calories: ~180 kcal | Protein: 15g | Carbs: 20g | Fats: 5g'),
    
	('3','LUNCH','1-2 PM','Tofu & Veggie Bowl:150g tofu (protein),1 cup cauliflower rice or quinoa (fiber + low GI carbs),Roasted broccoli & bell peppers (micronutrients),1 tbsp olive oil (healthy fats),Soy sauce & lemon for flavor','Calories: ~350 kcal | Protein: 35g | Carbs: 30g | Fats: 12g'),
	
	('4','PRE-WORKOUT','4-5PM','Rice Cake & Peanut Butter:2 rice cakes (light carbs),1 tbsp natural peanut butter (healthy fats)','Calories: ~150 kcal | Protein: 6g | Carbs: 20g | Fats: 7g'),
	
	('5','POST-WORKOUT','7-8PM','Lentil Soup & Salad:1 cup lentil soup (protein + fiber),Mixed greens salad with cucumbers & tomatoes,1 tbsp flaxseeds (omega-3s)','Calories: ~300 kcal | Protein: 25g | Carbs: 35g | Fats: 8g'),	
    
	('6','DINNER','9-10PM ','Paneer/Tempeh with Veggies:150g paneer or tempeh (high protein),Sautéed zucchini, spinach & mushrooms (fiber + micronutrients),1 tbsp avocado oil (healthy fats)','Calories: ~350kcal | Protein: 35g | Carbs: 20g | Fats: 15g'),
	
	('7','BEFORE BED','11PM','Cottage Cheese or Greek Yogurt:1/2 cup low-fat cottage cheese or Greek yogurt (slow-digesting protein),1 tbsp walnuts or almonds (healthy fats)','Calories: ~150 kcal | Protein: 15g | Carbs: 5g | Fats: 6g')";
if($conn->query($sql_insert2) === TRUE) {
    echo "Data inserted into 'dietplanveg1' successfully!<br>";
} else {
    echo "Error inserting data into 'dietplanveg1': " . $conn->error . "<br>";


}

$conn->close();
?>

