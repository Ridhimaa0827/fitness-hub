<?php
if(isset($_POST['submit'])) 
{
$conn = new mysqli("localhost", "root", "", "fitnesshub");
if($conn->connect_error)
{
	die("Connection failed: " .$conn->connect_error);
}


$sql="select `SR_NO`, `EVENT`, `EXERCISE`, `DESCRIPTION` from  homeworkout";
$result=$conn->query($sql);
if($result->num_rows > 0){
	echo"<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%; text-align: center;'>";
	echo"<tr style= 'background-color:pink; color:black;'>
	       <th>SR_NO</th>
           <th>EVENT</th>
           <th>EXERCISE</th>
           <th>DESCRIPTION</th>
           </tr>";
	while($row=$result->fetch_assoc()){
		echo "<tr>";
		echo"<td>".$row["SR_NO"]."</td>";
		echo"<td>".$row["EVENT"]."</td>";
		echo"<td>".$row["EXERCISE"]."</td>";
		echo"<td><b>".$row["DESCRIPTION"]."</td>";
		echo"</tr>";
	}
	echo"</table>";
}
else{
	echo"Error: ".$sql."<br>".$conn->error;
}
$conn->close();

    echo "<h2>⚡ Pro Tips for Better Results:</h2>";
    echo "<ul>";
    echo "<li>✔ Drink 3-4L water daily</li>";
    echo "<li>✔ Avoid junk, sugar, and processed food</li>";
    echo "<li>✔ Get 7-8 hours of quality sleep</li>";
    echo "<li>✔ Stay consistent with workouts</li>";
    echo "</ul>";
	
echo "<br><a href='displaygw.php' style='color:black; font-size:18px;'>💪 GYM WORKOUT </a>";
	
}

?>
<html>
<head>
<style>
body{
      background-image: url('https://th.bing.com/th/id/R.52ba833cbb39e80751679a1ac40bec97?rik=yxRQmZDgAlohjQ&riu=http%3a%2f%2fstatic8.depositphotos.com%2f1258191%2f929%2fi%2f950%2fdepositphotos_9290157-stock-photo-fitness-woman-doing-fitness-exercise.jpg&ehk=yCRYC6f%2bF3yxsjBZEDaK%2bcvGj6z0YtxV8jnzlHI9qbg%3d&risl=&pid=ImgRaw&r=0');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
	  font-family: Arial,sans-serif;
	  text-align:center;
	  color: black;
	  color: black;
	  font-weight: bold;
}
</style>
</head>
<form action = "displayhw.php" method ="post">
<br>
<input type = "submit" name="submit" value="display">
</form>
</body>
</html>

