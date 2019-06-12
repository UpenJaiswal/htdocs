<?php include('admin/functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

		<form action="register.php" method="post" enctype="multipart/form-data">

			<?php if (!empty($msg)): ?>
				<div class="alert <?php echo $msg_class ?>" role="alert">
					<?php echo $msg; ?>
				</div>
			<?php endif; ?>
			<div class="form-group text-center" style="position: relative;" >
				<span class="img-div">
					<img src="images/avatar.png" onClick="triggerClick()" id="profileDisplay">
				</span>
				<input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
				<label></label>
				<div class="text-center img-placeholder"  onClick="triggerClick()">
				<button	><p>Click Here </br>to Upload Image</p></button>
				</div>
			</div>
			<div class="form-group">
				<label>Bio</label>
				<textarea name="bio" class="form-control"></textarea>
			</div>

		<?php echo display_error(); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
			<input type="hidden" name="user" value="user">
		</div>
		<div class="input-group">
			<button type="submit"  class="btn" name="save_profile">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>

	</form>



</body>
</html>
