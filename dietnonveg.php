<?php 
$servername = "localhost";
$username = "root"; 
$password = ""; 
$databasename = "fitnesshub"; 

$conn = new mysqli($servername, $username, $password, $databasename);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE dietnonveg (
    `SR_NO` varchar(10) PRIMARY KEY,
    `MEAL` varchar(255),
	`TIME` varchar(20),
    `FOOD OPTIONS` varchar(255),
	`DAILY INTAKE` varchar(255)
	
)";

if ($conn->query($sql) === TRUE) {
     echo "Table 'dietnonveg' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql_insert="INSERT into dietnonveg(`SR_NO`,`MEAL`,`TIME`,`FOOD OPTIONS`,`DAILY INTAKE`)  VALUES
	
	('1','BREAKFAST','8:30-9:30AM','Oats & Eggs Power Bowl:1 cup oats (complex carbs),3 whole eggs + 2 egg whites (protein + healthy fats),1 tbsp peanut butter (healthy fats),1 banana (energy boost),1 tbsp chia or flaxseeds (fiber + omega-3s)','Calories: ~550 kcal | Protein: 40g | Carbs: 60g | Fats: 18g'),
   
	('2','MID-MORNING SNACK','11 AM','Grilled Chicken Wrap:100g grilled chicken breast (lean protein),1 whole wheat tortilla (complex carbs),Lettuce, tomato, and hummus (fiber + micronutrients)','Calories: ~300 kcal | Protein: 30g | Carbs: 30g | Fats: 6g'),
    
	('3','LUNCH','1-2 PM','Grilled Salmon or Chicken Rice Bowl:150g grilled salmon or chicken breast (protein + omega-3s),1 cup brown rice (complex carbs),Steamed broccoli and carrots (fiber),1 tbsp olive oil (healthy fats)','Calories: ~500 kcal | Protein: 45g | Carbs: 50g | Fats: 15g'),
	
	('4','PRE-WORKOUT','4-5PM','Rice Cakes with Almond Butter & Honey:2 rice cakes (light carbs),1 tbsp almond butter (healthy fats),1 tsp honey (quick energy)','Calories: ~200 kcal | Protein: 7g | Carbs: 30g | Fats: 10g'),
	
	('5','POST-WORKOUT','7-8PM','Protein Shake with Banana:1 scoop whey protein (fast-digesting protein),1 medium banana (glycogen replenishment),1 cup almond milk','Calories: ~250 kcal | Protein: 30g | Carbs: 30g | Fats: 3g'),	
    
	('6','DINNER','9-10PM ','Steak or Chicken with Sweet Potato:150g lean steak or chicken breast (protein),1 medium sweet potato (complex carbs),Roasted asparagus or spinach (fiber),1 tbsp butter or olive oil (healthy fats)','Calories: ~500kcal | Protein: 45g | Carbs: 40g | Fats: 15g'),
	
	('7','BEFORE BED','11PM','Cottage Cheese or Greek Yogurt:1/2 cup low-fat cottage cheese or Greek yogurt (slow-digesting protein),1 tbsp walnuts or flaxseeds (healthy fats)','Calories: ~200 kcal | Protein: 20g | Carbs: 5g | Fats: 10g')";

if($conn->query($sql_insert) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . $conn->error;
}

$sql2 = "CREATE TABLE dietnonveg1 (
    `SR_NO` varchar(10) PRIMARY KEY,
    `MEAL` varchar(255),
	`TIME` varchar(20),
    `FOOD OPTIONS` varchar(255),
	`DAILY INTAKE` varchar(255)
	
)";

if ($conn->query($sql2) === TRUE) {
     echo "Table 'dietnonveg' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql_insert2="INSERT into dietnonveg1(`SR_NO`,`MEAL`,`TIME`,`FOOD OPTIONS`,`DAILY INTAKE`)  VALUES
	
	('1','BREAKFAST','8:30-9:30AM','High-Protein Omelette:3 egg whites + 1 whole egg (protein + healthy fats),1/2 cup spinach & mushrooms (micronutrients),1 slice whole grain toast (complex carbs),1 tbsp avocado or olive oil (healthy fats)','Calories: ~300 kcal | Protein: 28g | Carbs: 20g | Fats: 12g'),
   
	('2','MID-MORNING SNACK','11 AM','Grilled Chicken & Nuts:100g grilled chicken breast (lean protein),10 almonds or walnuts (healthy fats)','Calories: ~200 kcal | Protein: 25g | Carbs: 2g | Fats: 12g'),
    
	('3','LUNCH','1-2 PM','Grilled Salmon Bowl (or Chicken):150g grilled salmon (protein + omega-3s),1 cup quinoa or brown rice (complex carbs),Steamed broccoli & carrots (fiber),1 tbsp olive oil (healthy fats)','Calories: ~400 kcal | Protein: 40g | Carbs: 35g | Fats: 15g'),
	
	('4','PRE-WORKOUT','4-5PM','Rice Cake & Peanut Butter:2 rice cakes (light carbs),1 tbsp natural peanut butter (healthy fats)','Calories: ~150 kcal | Protein: 6g | Carbs: 20g | Fats: 7g'),
	
	('5','POST-WORKOUT','7-8PM','Protein Shake & Banana:1 scoop whey isolate (fast-digesting protein),1 medium banana (carbs for glycogen replenishment)','Calories: ~220kcal | Protein: 30g | Carbs: 25g | Fats: 2g'),	
    
	('6','DINNER','9-10PM ','rilled Chicken or Turkey with Veggies:150g grilled chicken breast or turkey (lean protein),1 cup zucchini, spinach, or asparagus (fiber + micronutrients),1 tbsp olive oil (healthy fats)','Calories: ~300kcal | Protein: 40g | Carbs: 5g | Fats: 12g'),
	
	('7','BEFORE BED','11PM','Cottage Cheese or Greek Yogurt:1/2 cup low-fat cottage cheese or Greek yogurt (slow-digesting protein),1 tbsp flaxseeds or walnuts (healthy fats)','Calories: ~150 kcal | Protein: 15g | Carbs: 5g | Fats: 6g')";
if($conn->query($sql_insert2) === TRUE) {
    echo "Data inserted into 'dietnonveg1' successfully!<br>";
} else {
    echo "Error inserting data into 'dietnonveg1': " . $conn->error . "<br>";


}

$conn->close();
?>

