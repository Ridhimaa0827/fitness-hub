<?php  
$servername = "localhost";
$username = "root";
$password = "";
$database = "fitnesshub";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error)
{
	die("Connection failed: " .$conn->connect_error);
}
echo "Connected Successfully";

$sql="INSERT INTO LOGIN(username,password) values('ridhiiiii','ridhii123')";
echo $sql;
if(mysqli_query ($conn,$sql)){
	echo"Record inserted Successfully";
}
else {
	echo"Couldn't insert record".mysqli_error($conn);
}
mysqli_close($conn);
?>

