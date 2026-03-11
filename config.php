<?php

$host = 'localhost'; // Database Host
$username = 'your_username'; // Database Username
$password = 'your_password'; // Database Password
$database = 'your_database'; // Database Name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully"; // Optional: Test connection 
?>