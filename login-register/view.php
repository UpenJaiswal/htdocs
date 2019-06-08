
<?php
include('connection.php');
$data="select * from upen where status='active'";
$fetch=mysqli_query($conn,$data);
$i=1;


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="style.css">
  <style>  form, .content {
        width: 97%;
        }

        .header {
    width: 100%;
    margin: 8px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 1px;
}



table, th, td {
    border: 1px solid #5F9EA0;
    text-align: center;
}

table.fixed { table-layout:fixed; }
table.fixed th td { overflow: hidden; }
</style>
  </head>
  <body>
<div class="header">
  <h2> User Control </h2>
</div>
    <div class="row">

<form  method="post" >


        <div class="col-lg-12">
          <table class="fixed">
            <col width=".25px" />
            <col width="250px" />
            <col width="7px" />
            <col width="50px" />
            <col width="35px" />
            <col width="500px" />
            <col width="2px" />


            <tr><th>User No.</th><th>Name</th><th>Gender</th><th>Email</th><th>Phone</th><th>Address</th><th>Edit</th>
            </tr>
<?php while($record=mysqli_fetch_assoc($fetch))   {   ?>
            <tr>
             <td> <?php echo $i++;    ?> </td>

             <td> <?php echo $record['Name'];  ?> </td>



            <td> <?php echo $record['Gender'];  ?></td>

            <td> <?php echo $record['Email'];  ?></td>

            <td> <?php echo $record['Phone'];  ?></td>

            <td> <?php echo $record['Address'];  ?></td>

            <td><button class="btn" input class="input-group" type="submit" name="submit" value="Submit" />  <a style="cursor:pointer; color:white;" href="edit.php?id=<?php echo $record['id'];  ?>">View</a></button></td>
            </tr>


        </div>
        <?php }  ?>
</form>
</div>
  </body>
</html>
