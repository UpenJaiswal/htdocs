<?php
extract($_REQUEST);
include('connection.php');
	$id=$_GET['id'];
$data="select * from upen where id=$id";
$select=mysqli_query($conn,$data);
$record=mysqli_fetch_assoc($select);

if(isset($_POST['submit']))
{
$data="UPDATE upen
   SET status='$status'
 WHERE id=$id";

 $update=mysqli_query($conn,$data);
	if($update)
	{
		header('location:view.php');

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
  <h2> User Control </h2>
</div>
    <div class="row">

<form  method="post" >
        <div class="col-lg-12">


                <div class="input-group">
                    <label> Name:   <?php echo $record['Name'];  ?> </label>

                </div>

                

                <div class="input-group">
                    <label> Gender:   <?php echo $record['Gender'];  ?></label>

                </div>

                <div class="input-group">
                    <label> Email:   <?php echo $record['Email'];  ?></label>

                </div>

                <div class="input-group">
                  <label> Phone:   <?php echo $record['Phone'];  ?></label>

                </div>



                <div class="input-group">
                  <label> Address:   <?php echo $record['Address'];  ?></label>


                </div>

                <div class="input-group">
                <label> User Status </label>
                <select type="text" name="status" class="form-control"><option>Select</option><option>active</option><option>inactive</option>
                </select>
                </div>


                <button class="btn" input class="input-group" type="submit" name="submit" value="Submit" />Submit
                </button>


        </div>
</form>




</div>


  </body>
</html>
