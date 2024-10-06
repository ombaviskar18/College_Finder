<?php

$servername ="localhost";
$username ="qwerty";
$password ="qwerty";
$dbname ="mywebsite";

//create connection

$conn =new mysqli($servername, $username, $password, $dbname);

//check connection

if($conn -> connect_error)
{
	die("Connection failed:" . $conn -> connect_error);
}

//Insert query
$sql = "INSERT INTO diploma_colleges (cap2) VALUES ('99.91')";

if($conn -> query($sql)===true)
{	
	 echo "<h2><center>New Record added successfully at :";
}
else
{
	echo "Error:".sql."<br>".$conn -> error;
}

$conn -> close();
?>