<?php
session_start();
extract($_REQUEST);
include('db.php');
if(isset($_POST['submit']))
{
	$data="insert into login values ('','$name','$email','$gender','$phone','$PinCode','$District','$plan','$bank','$category','$area','$address','active','Employee')";
   
	$insert=mysqli_query($connect,$data);
	
	
	
	
}


?>

<html>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="cities.js"></script>
<script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  var y = document.forms["myForm"]["email"].value;

  var a = document.forms["myForm"]["phone"].value;
  var b = document.forms["myForm"]["PinCode"].value;
  var c = document.forms["myForm"]["District"].value;
 
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (y == "") {
    alert("email must be filled out");
    return false;
  }
 
  if (a == "") {
    alert("Phone must be filled out");
    return false;
  }
  if (b == "") {
    alert("Pin Code must be filled out");
    return false;
  }
  if (c == "") {
    alert("District must be filled out");
    return false;
  }
  if ( document.myForm.gender.selectedIndex == 0 )
    {
        alert ( "Please select your Gender." );
        return false;
    }
	if ( document.myForm.address.selectedIndex == 0 )
    {
        alert ( "Please select your Address." );
        return false;
    }
	if ( document.myForm.plan.selectedIndex == 0 )
    {
        alert ( "Please select your Education Detail." );
        return false;
    }
	if ( document.myForm.bank.selectedIndex == 0 )
    {
        alert ( "Please select your Bank." );
        return false;
    }
	if ( document.myForm.category.selectedIndex == 0 )
    {
        alert ( "Please select your Category." );
        return false;
    }
	if ( document.myForm.area.selectedIndex == 0 )
    {
        alert ( "Please select your Area." );
        return false;
    }
  
}
</script>

<style>
table, tr, td {
  border: 1px solid black;
 
}
tr{ width:100%;}

</style>
<style>
.button {
	width:50%;
  background-color: #000000; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:20%;
   margin-top:6%;
   cursor:pointer;
   border-radius:20px;
}

</style>

<body>
<div style="  background-color:black; color:white; ">
<div style=" width:33.3%;font-size:24px; background-color:black; float:left; height:100px;color:white;">
<h1  ><a href="show.php" style="cursor:pointer;color:white;">Dasboard</a></h1>
</div>
<div style=" width:33.3%; background-color:black; float:left;  height:100px;color:white;"><h1 style="color:white;"><a href="add_user.php" style="cursor:pointer;color:white;">Add User</a></h1>
</div>
<div style=" width:33.3%; background-color:black; float:left;  height:100px;color:white;"><h1 style="color:white;"><a href="add_user.php" style="cursor:pointer;color:white;">Logout</a></h1>
</div>

</div>



<form name="myForm" method="post"   onsubmit="return validateForm();">
<div class="row">
<div class="col-md-6">

<input type="text" placeholder="Enter Your Name"  name="name" id="name" >
</div>

<div class="col-md-6">
<input type="email" placeholder="Enter Your Email" name="email" id="email">
</div>



<div class="col-md-6">
<select name="gender">
<option>select Gender</option>
<option>male</option>
<option >female</option>

</select>
</div>

<div class="col-md-6">
<input type="text" placeholder="Enter Your Phone Number"  name="phone" id="phone" ></div>




<div class="col-md-6">
<input type="text" placeholder="Enter Your Pincode" name="PinCode" id="PinCode" ></div>
<div class="col-md-6">
<input type="text" placeholder="Enter Your District"  name="District" id="District" ></div>
<div class="col-md-6">

<select  name="plan">
<option>select Plan</option>
<option>Basic</option>
<option>Premium</option>

</select>
</div>
<div class="col-md-6">

<select  name="bank">
<option>select Bank</option>
<option>Punjab National bank</option>
<option>S.B.I</option>
<option>yes bank</option>

</select>
</div>
<div class="col-md-6">

<select  name="category">
<option>select Category</option>
<option>O.B.C</option>
<option>General</option>
<option>SC/ST</option>


</select>
</div>
<div class="col-md-6">

<select  name="area">
<option>select Area</option>
<option>Rural</option>
<option>Urban</option>



</select>
</div>
<div class="col-md-6">

<select name="address" onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
<select  id ="state" class="form-control" required></select>
<script language="javascript">print_state("sts");</script></div>

<input type="hidden"  name="status" id="status" value="active" >
<div class="col-md-12">
<input type="submit"   name="submit" class="button" id="submit" value="submit">
</div>
</div>

</form>


</body>
</html>