<?php include('conn.php');

// sql to delete a record
$sql = "DELETE FROM MyTable WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


 ?>
