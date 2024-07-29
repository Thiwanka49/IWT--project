<?php
// Database configuration
$host = 'localhost';
$dbName = 'lifeinsurancesystem';
$username = 'root';
$password = '';

// Establish database connection
$conn = mysqli_connect($host, $username, $password, $dbName);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}
?>
