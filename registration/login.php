<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
  <div class="header">
  	<h2>LOGIN</h2>
  </div>
	 
  <form method="post" action="login.php">
  
  	<?php include('errors.php'); ?>
	
  	<div class="input-group">
  		<label>USERNAME</label>
  		<input type="text" name="username" >
  	</div>
	
  	<div class="input-group">
  		<label>PASSWORD</label>
  		<input type="password" name="password">
  	</div>
	
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">LOGIN</button>
  	</div>
	
  	<p>
  		NOT A MEMBER? <a href="register.php">REGISTER</a>
  	</p>
	
  </form>
  
</body>


</html>