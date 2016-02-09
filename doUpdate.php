<?php

//use session object
session_start();

//open DB connection
include("includes/openDBConn.php");

//get the data posted from the form
//add slashes will escape special chars like the apostrophe

$ShipperID	 = $_POST["shipperID"];
$CompanyName = addslashes($_POST["companyName"]);
$Phone		 = addslashes($_POST["phone"]);

//if shipper id is empty, somebody typed this page into the url, redirect 

if(empty($ShipperID))
	header("Location: select.php");
	
//prepare sql statement

$sql = "UPDATE ShippersLab5 SET CompanyName='".$CompanyName."', Phone='".$Phone."' WHERE ShipperID= '".$ShipperID."'"; 

$result = mysql_query($sql);

//clean up
include("includes/closeDBConn.php");

//redirect to default
header("Location: select.php");


?>
