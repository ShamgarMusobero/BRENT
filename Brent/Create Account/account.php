
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link rel="stylesheet" href="style.css">
  <body>
  	<script >
  		function myfun() {
  			var a = document.getElementById('password').value;
            var b = document.getElementById('passwords').value;

  			if(a==""){
  				document.getElementById("messages").innerHTML="Please FIll Passsword";
  				return false;
  			}
        if(a.length<9){
          document.getElementById("messages").innerHTML="*** Passsword length must be greater than 8 charset";
          return false;
        }
        if(a.length>25){
          document.getElementById("messages").innerHTML="*** Passsword length must be smaller than 25 charset";
          return false;
  		}
      if(a!=b){
        document.getElementById("messages").innerHTML="*** Passsword do not match";
          return false;
      }
}


  	</script>
  	<form method="post" action="form.php" onsubmit="return myfun()">
<div class="login-box">
  <h1>Create Account</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username" placeholder="Username" >
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password" value="" id="password">
    <span id="messages"></span>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Confirm Password"  id="passwords" >
    <span id="messages"></span>
  </div>
  
<div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Name" name ="name" required >
  </div>

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name ="surname" placeholder="Surname" required>
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name ="phone" placeholder="Phone Number" required>
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="address" placeholder="Address" required>
  </div>

  <div>
  <input type="button" name="login" class="btn" value="Sign in" onclick="window.location.href='http://localhost/Brent/Login/login.php'">
  <input type="submit" name="create" class="btn" value="Create Account">
</div>
</form>
  </body>
</html>
