<?php
extract($_REQUEST);
include('db.php');
$id=$_GET['id'];
$data="select * from login where id=$id";
$select=mysqli_query($connect,$data);
$record=mysqli_fetch_assoc($select);
	
if(isset($_POST['submit']))
{
$data="UPDATE login 
   SET status='$status'
 WHERE id=$id";
 
 $update=mysqli_query($connect,$data);
	if($update)
	{
		header('location:show.php');
		
	}

}


?>




<html>
<head>

<script>
function validateForm() {
  
  if ( document.myForm.gender.selectedIndex == 0 )
    {
        alert ( "Please select your Gender." );
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
<div style="width:50%;  margin-left:42%; font-size:32px; ">
<h1 style="">Edit User </h1></div>
<div style="width:50%; padding:100px 50px 50px 50px; border-left:5px solid red; border-right:5px solid red;border-top:5px solid red; border-bottom:5px solid red; margin-left:25%; ">
<form name="myForm" method="post"   onsubmit="return validateForm();">

<div style="width:50%; float:left;">Name:<?php echo $record['name'];  ?></div>




<div style="width:50%; float:left;">Email:<?php echo $record['email'];  ?></div>

<div style="width:50%; float:left;">Gender:<?php echo $record['gender'];  ?></div>


<div style="width:50%; float:left;">Phone:<?php echo $record['phone'];  ?></div>

<div style="width:50%; float:left;">Pin Code:<?php echo $record['pincode'];  ?></div>

<div style="width:50%; float:left;">District:<?php echo $record['district'];  ?></div>

<div style="width:50%; float:left;">Plan:<?php echo $record['plan'];  ?></div>


<div style="width:50%; float:left;">Category:<?php echo $record['category'];  ?></div>

<div style="width:50%; float:left;">Area:<?php echo $record['area'];  ?></div>

<div style="width:50%; float:left;">Bank:<?php echo $record['bank'];  ?></div>

<div style="width:50%; float:left;">Address:<?php echo $record['address'];  ?></div>


<div style="width:100%; margin-top:2%;float:left;">User Type</div>
<select style="width:25%; margin-top:2%; float:left;" name="status"><option>active</option><option>inactive</option></select>


<input type="submit"   name="submit" class="button" id="submit" value="submit">

</form>
</div>
</body>
</html>