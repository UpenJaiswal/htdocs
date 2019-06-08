<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

  <div class="header">
  	<h2>REGISTER</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
	
  	<div class="input-group">
  	  <label>USERNAME</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	
	<div class="input-group">
  	  <label>EMAIL</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	
	<div class="input-group">
  	  <label>PASSWORD</label>
  	  <input type="password" name="password_1">
  	</div>
  	
	<div class="input-group">
  	  <label>CONFIRM PASSWORD</label>
  	  <input type="password" name="password_2">
  	</div>
	
	
  	
	<div class="input-gender">
  	  <button type="submit" class="btn" name="reg_user">REGISTER</button>
  	</div>
  	
	<p>
  		ALREADY A MEMBER? <a href="login.php">SIGN IN</a>
  	</p>
  </form>
  
</body>


</html>