<?php 
    // Database credentials
    $serverName = "localhost";
	$userName = "root";
	$password = "";
	$database = "e_commerce_db";

	$conn = new mysqli($serverName, $userName, $password, $database);
	if($conn->connect_error)
	{
		die("Database connection failed".$conn->connect_error);
	}
?>