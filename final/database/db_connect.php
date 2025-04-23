<?php
// Database credentials
$host = 'localhost'; // Database host
$username = 'root';   // Database username
$password = '';       // Database password (for localhost it could be empty)
$dbname = 'hotel_booking'; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
