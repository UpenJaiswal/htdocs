
<?php
include('connection.php');
$data="select * from upen ";
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
  border: 1px solid black;text-align: center;
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


        
        <?php }  ?>
</form>
</div>
  </body>
</html>
