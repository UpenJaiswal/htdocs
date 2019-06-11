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

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}
mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="header">
  <h2>Students Results</h2>
</div>
<div class="row">
  <form method="post">
    <div class="col-lg-12">
    <div class="input-group">
      Name:
      <input type="text" name="name" placeholder="Enter Student Name">
    </div>

    <div class="input-group">
      Age:
      <input type="text" name="age" placeholder="Enter Student Age">
    </div>

    <div class="input-group">
      Sex:
      <select type="text" name="sex"><option>Select</option><option>Male</option><option>Female</option></select>
    </div>

    <div class="input-group">
    Marks:
      <select type="text" name="marks" ><option>Select</option><option>10%-29%</option><option>30%-49%</option><option>50%-69%</option><option>70%-90%</option></select>
    </div>

    <div class="input-group">
    Result:
      <select type="text" name="result" ><option>Select</option><option>Pass</option><option>Fail</option></select>
    </div>

    <div class="input-group">
    Grade:
      <select type="test" name="grade" ><option>Select</option><option>A</option><option>B</option><option>C</option></select>
    </div>

    <div class="input-group" class="btn" >
      <input type="submit" name="submit" value="Submit">
    </div>
  </div>
</form>
</div>



  </body>
</html>
