<?php
$servername = "mi-linux.wlv.ac.uk";
$username = "1421617";
$password = "123abc";
$dbname = "db1421617";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
