<?php include('conn.php');



$sql = "DROP DATABASE upenDB";
if (mysqli_query($conn, $sql)) {
 echo "Database deleted successfully... ";
} else {
 echo "Error creating database: " . mysqli_error($conn);
}




 ?>
