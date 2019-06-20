<?php include('conn.php');


$sql = "INSERT INTO MyTable (firstname, lastname, email)
VALUES ('Upen', 'Jaiswal', 'upen@rdm.com');";
$sql .= "INSERT INTO MyTable (firstname, lastname, email)
VALUES ('Rajan', 'Singh', 'rajan@rdm.com');";
$sql .= "INSERT INTO MyTable (firstname, lastname, email)
VALUES ('Sunaina', 'Gupta', 'Sunaina@rdm.com')";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



 ?>
