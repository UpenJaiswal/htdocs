<?php
session_start();
include('db.php');
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$data="SELECT * FROM `login` WHERE `email`='$email' AND `phone` = '$password' AND `status`='active'";
	
	$insert=mysqli_query($connect,$data);
	
	
	$count=mysqli_num_rows($insert);
	
	$getrecord=mysqli_fetch_assoc($insert);
	if($getrecord)
	{
		echo "fetch";
	}
	echo $getrecord['user_role'];
	
	
	if($getrecord['user_role'] == 'Admin')
	{
    header('location:show.php');
	$_SESSION['id'] = $getrecord['id'];
	}
	if($getrecord['user_role'] == 'Employee')
	{
		header('location:user.php');
		
		$_SESSION['id'] = $getrecord['id'];
	}
	
	
	
	
}


?>




<html>
<head>

<script>
function validateForm() {
 
  var x = document.forms["myForm"]["email"].value;
  var y = document.forms["myForm"]["password"].value;
 
 
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
  if (y == "") {
    alert("Password must be filled out");
    return false;
  }
  
  
}
</script>
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
.button:hover{color:red;}
</style>
<title>login 
</title>
</head>
<body>
<div style="width:50%;  margin-left:40%; font-size:32px; ">
<h1 style="">Login Form</h1></div>
<div style="width:50%; padding:100px 50px 50px 50px; border-left:5px solid red; border-right:5px solid red;border-top:5px solid red; border-bottom:5px solid red; margin-left:25%; ">
<form name="myForm" method="post"   onsubmit="return validateForm();">

<div style="width:50%; float:left;">Email</div><input type="email"  name="email" id="email"><br /><br />
<div style="width:50%; float:left;">Password</div><input  type="password" name="password" id="password"><br /><br />


<input type="submit"   name="submit" class="button" id="submit" value="submit">

</form>
</div>
</body>
</html>