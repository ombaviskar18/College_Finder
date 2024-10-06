<?php

$idi =  val($_POST["idi"]);
$place = val($_POST["place"]);
$univer = val($_POST["univer"]);
$cocap1 = val($_POST["cocap1"]);
$cocap2 = val($_POST["cocap2"]);
$cocap3 = val($_POST["cocap3"]);
$cvcap1 = val($_POST["cvcap1"]);
$cvcap2 = val($_POST["cvcap2"]);
$cvcap3 = val($_POST["cvcap3"]);
$mecap1 = val($_POST["mecap1"]);
$mecap2 = val($_POST["mecap2"]);
$mecap3 = val($_POST["mecap3"]);
$elcap1 = val($_POST["elcap1"]);
$elcap2 = val($_POST["elcap2"]);
$elcap3 = val($_POST["elcap3"]);
$ejcap1 = val($_POST["ejcap1"]);
$ejcap2 = val($_POST["ejcap2"]);
$ejcap3 = val($_POST["ejcap3"]);
$links = val($_POST["links"]);

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
$sql ="DELETE FROM diploma_colleges where Id='$idi' OR cocap1 ='$cocap1' AND Location ='$place' AND University ='$univer' AND cocap2 ='$cocap2' AND cocap3 ='$cocap3' AND cvcap1 ='$cvcap1' AND cvcap2 ='$cvcap2' AND cvcap3 ='$cvcap3'  AND mecap1 ='$mecap1' AND mecap2 ='$mecap2' AND mecap3 ='$mecap3' AND elcap1 ='$elcap1' AND elcap2 ='$elcap2' AND elcap3 ='$elcap3' AND ejcap1 ='$ejcap1' AND ejcap2 ='$ejcap2' AND ejcap3 ='$ejcap3' AND links ='$links' ";

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