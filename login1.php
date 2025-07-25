<?php
if(isset($_POST['submit'])) 
{
$conn = new mysqli("localhost", "root", "", "fitnesshub");
if($conn->connect_error)
{
	die("Connection failed: " .$conn2->connect_error);
}
$usr=$_POST['user'];
$pass= $_POST['password'];

$sql="INSERT INTO LOGIN(username,password) values('$usr','$pass')";
if($conn->query($sql)==TRUE) {
	echo"New record created successfully";
}
else
	echo"Error: ".$sql."<br>".$conn->error;
}
?>

<html>
<head>
<style>
body {
    background-image: url('https://th.bing.com/th/id/OIP.6J1EWxp7PRtsz9ByWx8jkwHaCJ?rs=1&pid=ImgDetMain');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    font-family: Arial, sans-serif;
    text-align: center;
    color: black;
}

.signin-box {
    background: rgba(255, 255, 255, 0.8);
    width: 300px;
    padding: 20px;
    margin: 100px auto;
    border-radius: 10px;
    box-shadow: 0px 0px 10px gray;
}

h1 {
    font-size: 24px;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid gray;
    border-radius: 5px;
}
</style>
</head>
<body>

<div class="signin-box">
    <h1>SIGN IN PAGE</h1>
    <form action="login1.php" method="post">
        <label>ENTER USERNAME:</label>
        <input type="text" name="user" required><br>
        
        <label>ENTER PASSWORD:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" name="submit" value="ENTER">
    </form>
</div>

</body>
</html>
