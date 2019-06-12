<?php
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<?php
	$db = mysqli_connect("localhost", "root", "", "userprofile");
	$results = mysqli_query($db, "SELECT * FROM profile");
	$users = mysqli_fetch_all($results, MYSQLI_ASSOC);
	//<a href="form.php" class="btn btn-success">New profile</a>
?>



<!DOCTYPE html>
<html>
<head>
	<title>ALL USERS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css">

  <style>  form, .content {
          width: 90%;
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
    border: 1px solid #003366;
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
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

	     	   <table class="table table-bordered">
	          <thead>
	            <th>Image</th>
	            <th>Bio</th>
              <th>Username</th>
              <th>Email</th>
              <th>User Type</th>

	          </thead>
	          <tbody>
	            <?php foreach ($users as $user): ?>
	              <tr>
	                <td> <img src="<?php echo 'images/'  . $user['profile_image'] ?>" width="50" height="50" alt=""><img src="<?php echo '../images/'  . $user['profile_image'] ?>" width="50" height="50" alt=""> </td>
	                <td> <?php echo $user['bio']; ?> </td>
                  <td> <?php echo $user['username']; ?> </td>
                  <td> <?php echo $user['email']; ?> </td>
                  <td> <?php echo $user['user_type']; ?> </td>
	              </tr>
	            <?php endforeach; ?>
	          </tbody>
	        </table>

	  </div>
	</body>
	</html>
