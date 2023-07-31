<?php 
    // Database credentials
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "e_commerce_db";

    //Connection String to Connect to the database
    $conn = new mysqli($host, $username, $password, $database);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "<script>console.log('Database connection success');</script>";
    }
?>