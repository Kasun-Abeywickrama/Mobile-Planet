<?php 
    // Database credentials

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "e_commerce_db";


	$conn = new mysqli($serverName, $userName, $password, $database);
	if($conn->connect_error)
	{
		die("Database connection failed".$conn->connect_error);
	}
?>