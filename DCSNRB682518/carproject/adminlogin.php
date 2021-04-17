<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin||login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url(images/ferrari.jpg); background-attachment: fixed; background-size: 100%">
  <div class="header">
  	<h3> Admin ||Login</h3>
  </div>
	 
  <form method="post" action="adminlogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="adminregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>