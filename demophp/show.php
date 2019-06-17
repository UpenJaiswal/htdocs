<?php  
include('db.php');
session_start();
$id=$_SESSION['id'];
$data="select * from login where status='active' AND `user_role` = 'Employee'";
$fetch=mysqli_query($connect,$data);
$i=1;
if($id)
{
	
}
else
{
	
		header('location:login.php');

}


?>

<html>

<head>

<style>
table, tr, td {
  border: 1px solid black;
 
}
tr{ width:100%;}

</style>

<body>
<div style="  background-color:black; color:white; ">
<div style=" width:33.3%;font-size:24px; background-color:black; float:left; height:100px;color:white;">
<h1 ><a href="show.php" style="cursor:pointer;color:white;">Dasboard</a></h1>
</div>
<div style=" width:33.3%; background-color:black; float:left;  height:100px;color:white;"><h1 style="color:white;"><a href="add_user.php" style="cursor:pointer;color:white;">Add User</a></h1>
</div>
<div style=" width:33.3%; background-color:black; float:left;  height:100px;color:white;"><h1 style="color:white;"><a href="logout.php" name="logout" style="cursor:pointer;color:white;">Logout</a></h1>
</div>

</div>

<div style="width:80%;  margin-left:15%; margin-top:4%; font-size:32px;  ">
<table > 

<tr><td>S.No</td><td>Name</td><td>email</td><td>Gender</td><td>Phone</td><td>PinCode</td><td>District</td><td>Plan</td><td>Bank</td><td>Category</td><td>Area</td><td>Address</td><td>edit</td>
</tr>

<?php while($record=mysqli_fetch_assoc($fetch))   {   ?>
<tr><td><?php echo $i++;  ?><td><?php echo $record['name'];  ?></td><td><?php echo $record['email'];  ?></td><td><?php echo $record['gender'];  ?></td>
<td><?php echo $record['phone'];  ?></td><td><?php echo $record['pincode'];  ?></td><td><?php echo $record['district'];  ?></td><td><?php echo $record['plan'];  ?></td>
<td><?php echo $record['bank'];  ?></td><td><?php echo $record['category'];  ?></td><td><?php echo $record['area'];  ?></td><td><?php echo $record['address'];  ?></td>
<td><a style="cursor:pointer;" href="edit.php?id=<?php echo $record['id'];  ?>">edit</a></td>

</tr>

<?php }  ?>

</table>
</div>
</body>

</head>
</html>