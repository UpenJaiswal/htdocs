<?php
$servername = "localhost:3306";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE upenDB";
if (mysqli_query($conn, $sql)) {
 echo "Database created successfully... ";
} else {
 echo "Error creating database: " . mysqli_error($conn);
}

$dbname = "upenDB";

// Create connection again
$conn = new mysqli($servername, $username, $password, $dbname);

// sql to create table
$sql = "CREATE TABLE MyTable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
 echo "</br>Table created successfully...";
} else {
 echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO MyTable (firstname, lastname, email)
VALUES ('Upen', 'Jaiswal', 'upen.rdm@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "</br>New record inserted successfully...";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
