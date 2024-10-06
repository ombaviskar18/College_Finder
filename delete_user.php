<?php

$user =  val($_POST["user"]);

function val($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="mywebsite";

//create connection

$conn =new mysqli($servername, $username, $password, $dbname);

//check connection

if($conn -> connect_error)
{
	die("Connection failed:" . $conn -> connect_error);
}

//Delete query
$sql ="DELETE FROM users where username='$user'";

if($conn -> query($sql)===true)
{
     echo "<h2><center>Record Deleted successfully";
}
else
{
    echo "Error:".sql."<br>".$conn -> error;
}

$conn -> close();
?>