<?php

$clgname =  val($_POST["clgname"]);
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

//Insert query
$sql ="INSERT INTO cet_colleges (College_Name,cocap1,Location,University,cocap2,cocap3,cvcap1,cvcap2,cvcap3,mecap1,mecap2,mecap3,elcap1,elcap2,elcap3,ejcap1,ejcap2,ejcap3,links) VALUES ('$clgname','$cocap1','$place','$univer','$cocap2','$cocap3','$cvcap1','$cvcap2','$cvcap3','$mecap1','$mecap2','$mecap3','$elcap1','$elcap2','$elcap3','$ejcap1','$ejcap2','$ejcap3','$links')";

if($conn -> query($sql)===true)
{	
	 $lastid=$conn->insert_id;
	 echo "<h2><center>New Record added successfully at :".$lastid;

}
else
{
	echo "Error:".sql."<br>".$conn -> error;
}

$conn -> close();
?>