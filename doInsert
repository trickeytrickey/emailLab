<?php
session_start();

//bet the data posted from the form
//addslashes will escape special characters

$ShipperID	 = $_POST["shipperID"];
$CompanyName = addslashes($_POST["companyName"]);
$Phone		 = addslashes($_POST["phone"]);

if(($ShipperID=="") || ($CompanyName=="") || ($Phone==""))
{	//check for empty form values
	$_SESSION["errorMessage"] = "You must enter a value for all boxes!";
	header("Location: insert.php");
	exit;
}
else if(!is_numeric($ShipperID))
{	//make sure this is a number
	$_SESSION["errorMessage"] = "You must enter a number for ShipperID!";
	header("Location: insert.php");
	exit;
}
else 
{ 
	//everything else is ok so far
	$_SESSION["errorMessage"] = "";
}

//open DB connection
include("includes/openDBConn.php");

//Prepare SQL statements
	$sql = "SELECT ShipperID FROM ShippersLab5 WHERE ShipperID=".$ShipperID;
	
//execute the sql query
$result = mysql_query($sql);

//check to see if there are records in the result, if not set the number of results = 0
	if(empty($result))
		$num_results = 0;
	else 
		$num_results = mysql_num_rows($result);
		
//check to see if shipper id is already in DB
if($num_results !=0)
{
	$_SESSION["errorMessage"] = "The ShipperID you entered already exists!";
	header("Location: insert.php");
	exit;
}
else
{
	$_SESSION["errorMessage"] = "";
}

//Prepare sql statement
$sql = "INSERT INTO ShippersLab5(ShipperID, CompanyName, Phone) VALUES(".$ShipperID.", '".$CompanyName."', '".$Phone."')";

//execute the sql query and store the result of the execution into $result
$result = mysql_query($sql);

//clean up
include("includes/closeDBConn.php");

//redirect to default
header("Location: select.php");
exit;
?>

