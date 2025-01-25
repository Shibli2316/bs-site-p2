<?php

// Database connection variables
$server = "localhost";
$username = "root";
$pass = "";
$db = "b115";

// Establish a secure connection with the database
$conn = new mysqli($server, $username, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    // Use error_log instead of echo for secure error reporting
    error_log("Database connection failed: " . $conn->connect_error);
    die("Error while connecting to the database. Please try again later.");
}

// Use UTF-8 encoding for the connection to handle special characters
$conn->set_charset("utf8");
?>
