<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "homework";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
  die("Connection failed:" . $conn->connect_error);
}


 ?>
