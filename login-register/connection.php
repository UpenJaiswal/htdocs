<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "login-register";

// crete conection
$conn = mysqli_connect($servername, $username, $password, $db);


// check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}


 ?>
