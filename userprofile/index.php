<?php
	include('admin/functions.php');

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
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
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
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>


	  <div class="content">
	      <div class="col-4 offset-md-4" >
	     	   <table class="table table-bordered">
	          <thead>
	            <th>Image</th>
	            <th>Bio</th>
	          </thead>
	          <tbody>
	            <?php foreach ($users as $user): ?>
	              <tr>
	                <td> <img src="<?php echo 'admin/images/' . $user['profile_image'] ?>" width="90" height="90" alt=""> </td>
	                <td> <?php echo $user['bio']; ?> </td>
	              </tr>
	            <?php endforeach; ?>
	          </tbody>
	        </table>
	      </div>

	  </div>
	</body>
	</html>
