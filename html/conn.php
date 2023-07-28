<?php
// // // Database configuration variables
$host = "localhost"; // Replace with your database host
$username = "root"; // Replace with your database username
$password = "1212"; // Replace with your database password
$database = "server"; // Replace with your database name

// // // Establishing the database connection
$conn = new mysqli($host, $username, $password, $database);

// // // Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
