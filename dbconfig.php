<?php
$host = 'imc.kean.edu';  // Your database host
$username = 'tomaselj';  // Your database username
$password = '1168753';  // Your database password
$dbname = 'datamining';  // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
