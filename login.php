<?php
if(isset($_POST['submit'])) 
{
	echo "ok";
$conn = new mysqli("localhost", "root", "", "fitnesshub");
$sql="INSERT INTO LOGIN(username,password) values('akashhhh','bains08')";
echo $sql;
if(mysqli_query ($conn,$sql)){
	echo"Record inserted Successfully";
}
else {
	echo"Couldn't insert record".mysqli_error($conn);
}
mysqli_close($conn);
	
}
?>

<html>
<body>
<form action = "login.php" method ="post">
<input type = "submit" name="submit" value="save">
</form>
</body>
</html>
