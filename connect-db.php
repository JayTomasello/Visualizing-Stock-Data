<?php
include 'dbconfig.php';

if ($conn->connect_error) {
    echo "Error connecting to the database";
} else {
    echo "Successfully connected to the database";
}

$conn->close();
