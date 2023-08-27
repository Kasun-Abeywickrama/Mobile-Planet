<?php 
    // Database credentials
    $host = "sql309.infinityfree.com";
    $username = "if0_34731176";
    $password = "KVrWl3mXlEV";
    $database = "if0_34731176_e_commerce_db";

    //Connection String to Connect to the database
    $conn = new mysqli($host, $username, $password, $database);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "<script>console.log('Database connection success');</script>";
    }
?>