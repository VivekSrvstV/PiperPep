<?php

	$realserver="/large/";
	
	error_reporting(0);
	
	//define connection 
	define("DB_HOST", "localhost");
	define("DB_USER", "hipdb");
	define("DB_PASSWORD","Hipdbimt");

	//define Database name
	if ($_SERVER['HTTP_HOST']=="localhost") {
	  define("DB_DATABASE", "hipdb");
	} else { 
	  define("DB_DATABASE", "hipdb");
	}

	//call function to make connection
	include("set3.php");
	
	//connectie met database
	$connect = dbConnect();

?>
