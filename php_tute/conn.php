<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "upenDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

?>
