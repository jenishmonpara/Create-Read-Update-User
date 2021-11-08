<?php

session_start();
$servername = "localhost:8889";
$username = "root";
$password = "root";
$db = "employee";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>