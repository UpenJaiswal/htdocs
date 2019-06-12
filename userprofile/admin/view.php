
<?php
include('../functions.php');
$data="select * from profile ";
$fetch=mysqli_query($db,$data);
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
    background: #003366;
    text-align: center;
    border: 1px solid #003366;
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
            <col width="500px" />
            <col width="500px" />
						<col width="100px" />
            <col width="500px" />
            <col width="200px" />






            <tr><th>User No.</th><th>User Picture</th><th>About</th><th>Username</th><th>Email</th><th>Type of User</th>
            </tr>
<?php while($record=mysqli_fetch_assoc($fetch))   {   ?>
            <tr>
             <td> <?php echo $i++;    ?> </td>

             <td> <?php echo $record['profile_image'];  ?> </td>



            <td> <?php echo $record['bio'];  ?></td>

            <td> <?php echo $record['username'];  ?></td>

            <td> <?php echo $record['email'];  ?></td>

            <td> <?php echo $record['user_type'];  ?></td>



            <td><button class="btn" input class="input-group" type="submit" name="submit" value="Submit" />  <a style="cursor:pointer; color:white;" href="../index.php?id=<?php echo $record['id'];  ?>">View</a></button></td>
            </tr>


        </div>
        <?php }  ?>
</form>
</div>
  </body>
</html>
