<?php include('conn.php');
if (isset($_POST['submit'])) {



$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$marks = $_POST['marks'];
$result = $_POST['result'];
$grade = $_POST['grade'];

$sql = "INSERT INTO students(name, age, sex, marks, result, grade) VALUES ('$name', '$age', '$sex','$marks', '$result', '$grade')";

if ($conn->query($sql) === TRUE) {
echo "done"
} else {
  echo "error:" . $sql . "</br>" . $conn->error;
}
}
mysqli_close($conn);
 ?>
