<?php
// MySQL database connection variables
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === FALSE) {
  die("Error creating database: " . $conn->error);
}

// Select database
$conn->select_db($dbname);

// Create table
$sql = "CREATE TABLE IF NOT EXISTS users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === FALSE) {
  die("Error creating table: " . $conn->error);
}

// Close connection
$conn->close();
?>