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
      echo "Database created successfully ";
  } else {
      echo "Error creating database: " . mysqli_error($conn);
  }

$dbname = "upenDB";

// Create connection
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
      echo " and also MyTable created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }
  mysqli_close($conn);
  ?>
