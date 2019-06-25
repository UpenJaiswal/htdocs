<?php include('conn.php');

$sql = "UPDATE MyTable SET firstname='Gaurav', lastname='Thakur', email='gaurav@rdm.com' WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

 ?>
