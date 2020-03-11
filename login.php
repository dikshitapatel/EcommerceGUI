<?php 
include('includes/connection.php')
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
</head>
<body>
	 
  <form method="POST" action="login_val.php">
  		<label>Username</label>
  		<input type="text" name="login"  required>
  		<label>Password</label>
  		<input type="password" name="password" required>
  		<input type="submit"  name="login_user" value="submit">
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>