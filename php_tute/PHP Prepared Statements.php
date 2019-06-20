<?php include('conn.php');

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyTable (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "Upen";
$lastname = "Jaiswal";
$email = "upen@rdm.com";
$stmt->execute();

$firstname = "Rajan";
$lastname = "Singh";
$email = "rajan@rdm.com";
$stmt->execute();

$firstname = "Sunaina";
$lastname = "Gupta";
$email = "sunaina@rdm.com";
$stmt->execute();

echo "New records added successfully";

$stmt->close();
$conn->close();
?>
