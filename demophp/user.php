<?php  
session_start();
$id=$_SESSION['id'];
include('db.php');
$data="select * from login where id=$id";
$fetch=mysqli_query($connect,$data);
$getrecord=mysqli_fetch_assoc($fetch);



?>





<html>
<body>

<h1>Login User Status Is  <?php echo $getrecord['status']; ?> Now</h1>
</body>
</html>