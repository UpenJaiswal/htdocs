<?php include('connection.php');
if (isset($_POST['submit'])) {
$email = $_POST['email'];
$phone = $_POST['phone'];

if (empty($email)) {
  	array_push($errors, "Username is required");
  }
  if (empty($phone)) {
  	array_push($errors, "Password is required");
  }


  if (count($errors) == 0) {
    	$phone = md5($phone);
    	$query = "SELECT * FROM upen WHERE Email='$email' AND Phone='$phone'";
    	$results = mysqli_query($db, $query);
    	if (mysqli_num_rows($results) == 1) {
    	  $_SESSION['email'] = $email;
    	  $_SESSION['success'] = "You are now logged in";
    	  header('location: view.php');
    	}else {
    		array_push($errors, "Wrong username/password combination");
    	}





//$sql = "SELECT * FROM upen where Email='$email' and Phone='$phone'";




//if ($result=mysqli_query($conn,$sql))
  //{
  // Return the number of rows in result set
//  $rowcount=mysqli_num_rows($result);
//  printf("Result set has %d rows.\n",$rowcount);
  // Free result set
//  mysqli_free_result($result);
//  }




//$result = $conn->query($sql);
//$count=mysqli_num_rows (  $result );
//echo $count;
//if ($result)
//{
//header('Location: view.php');


}




}

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
  <h2> User Login </h2>
</div>
    <div class="row">

<form  method="post" >
        <div class="col-lg-12">

                <div class="input-group">
                    <label> Email </label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="input-group">
                  <label> Phone </label>
                  <input type="text" name="phone" class="form-control">
                </div>

                <button class="btn" input class="input-group" type="submit" name="submit" value="Submit" />Submit
                </button>

        </div>
</form>

</div>

  </body>
</html>
