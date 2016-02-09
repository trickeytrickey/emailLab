<?php
//use session object
session_start();

//open up DB connection
include("includes/openDBConn.php");

//prepare sql statement
$sql = "DELETE FROM ShippersLab5 WHERE ShipperID=2";

//execute the sql query and store the result
$result = mysql_query($sql);

//clean up

include("includes/closeDBConn.php");
//redirect to default
header("Location: select.php");
?>
