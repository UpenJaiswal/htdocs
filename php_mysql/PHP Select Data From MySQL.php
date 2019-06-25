<?php include('conn.php');

$sql = "SELECT id, firstname, lastname, email FROM MyTable";
//runs the query and puts the resulting data into a variable called $result
$result = $conn->query($sql);
//the function num_rows() checks if there are more than zero rows returned.
if ($result->num_rows > 0) {
    // output data of each row If there are more than zero rows returned, the function fetch_assoc() puts all the results into an associative array The while() loop loops through the result set and outputs the data from the id, firstname and lastname columns.
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]." Email " . $row["email"] ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
