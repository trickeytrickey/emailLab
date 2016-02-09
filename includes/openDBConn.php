<?php

//Connect to MySQL from PHP
//Open DB connection and select DB to use
//The @ bypasses the usual PHP error handling, so you get to deal with a
//failure to return from pconnect yourself in the if statement below
//if you leave off the @ then any errors will automatically be thrown.

@ $db = mysql_pconnect("localhost","cgt356web2e", "Yummiest2e780");
mysql_select_db("northwind");

//check to see if connection was successful

if(!$db)
{
	echo "Error: Could not connect to database. Please try agan later.";
	exit;
}
?>
