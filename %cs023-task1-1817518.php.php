<?php
$servername = "localhost";
$username = "1817518";
$password = "Ibby13579";
$database = "db1817518";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>