<?php 

$cutoff = val($_POST["cutoff"]);

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
if($conn -> connect_error)
{
	die("Connection failed:" . $conn -> connect_error);
}
?>

<html>
	<body>
	<table width="1500" align="center" border="1" cellspacing="1" cellpadding="5">
    
 <tr>
   <td><p>Id</p></td>
   <td><p>College Name</p></td>  
   <td><p>Cutoff</p></td>  
</tr>
      <tr>
   <td><?php

//$sql ="SELECT Id,College_Name,CutOff FROM colleges";
$sqlid ="SELECT Id FROM colleges_cet WHERE CutOff < $cutoff";

$result =$conn->query($sqlid);
 if($result->num_rows > 0)
{
	while($row =$result->fetch_assoc())
	{
	echo $row["Id"] ."<br>";
	}
}
else
{
	echo "Zero Result Found";
}
?>	
</td>
 <td>
 	<?php
 	$sqlclgname ="SELECT College_Name FROM colleges_cet WHERE CutOff < $cutoff";

$result =$conn->query($sqlclgname);
   if($result->num_rows > 0)
{
	while($row =$result->fetch_assoc())
	{
	echo $row["College_Name"]."<br>";
	}
}
else
{
	echo "Zero Result Found";
}
?>
</td>
   <td>
   	<?php
 	$sqlcutoff ="SELECT CutOff FROM colleges_cet WHERE CutOff < $cutoff";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
	while($row =$result->fetch_assoc())
	{
	echo $row["CutOff"]."<br>";
	}
}
else
{
	echo "Zero Result Found";
}
?>
</td>   
      </tr>
   </table>
   </body>
   </html>

<?php $conn -> close(); ?>