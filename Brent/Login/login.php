<?php
include('action.php');
if(isset($_SESSION['login_user'])){
header("location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <form method="post" action="">
  <div class="login-box" id="login">
  <h1>Login</h1>

	  <div class="textbox">
	    <i class="fas fa-user"></i>
	    <input type="text" id="name" name="username" placeholder="Username">
	  </div>

	  <div class="textbox">
	    <i class="fas fa-lock"></i>
	    <input type="password" id="password"placeholder="Password" name="password">
	  </div>

  <input type="submit" name="submit"class="btn" value="Login">
  <span><?php echo $error; ?></span>
</form>
</div>
  </body>
</html>
