<?php include('connection.php');
if (isset($_POST['submit'])) {


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];




$sql = "INSERT INTO upen (Name, Email, Password, Phone, Gender, Address, Status )
VALUES ('$name','$email','$password','$phone','$gender','$address','active')";

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
    <script src="cities.js"></script>
    <link rel="stylesheet" href="style.css">


  </head>
  <body>
<div class="header">
  <h2> User Registeration </h2>
</div>
    <div class="row">

<form  method="post" >
        <div class="col-lg-12">


                <div class="input-group">
                    <label> Name </label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="input-group">
                  <label> Password </label>
                  <input type="password" name="password" class="form-control">
                </div>

                <div class="input-group">
                    <label> Gender </label>
                    <select type="text" name="gender" class="form-control"><option>Select</option><option>Male</option><option>Female</option>
                    </select>
                </div>

                <div class="input-group">
                    <label> Email </label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="input-group">
                  <label> Phone </label>
                  <input type="text" name="phone" class="form-control">
                </div>

                <div class="input-group">
                  <label> Address </label>
                  <input type="text" name="address" class="input-group">
                  <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
                  <select id ="state" class="input-group" required></select>
                  <script language="javascript">print_state("sts");</script>
                </div>


                <button class="btn" input class="input-group" type="submit" name="submit" value="Submit" />Submit
                </button>


        </div>
</form>




</div>


  </body>
</html>
