<?php
$host = 'imc.kean.edu';     // Database host
$username = 'tomaselj';     // Database username
$password = '1168753';      // Database password
$dbname = 'datamining';     // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
