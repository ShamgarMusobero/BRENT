<?php 
include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: profile.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link href="profile.css" rel="stylesheet" type="text/css">
  <ul>
    <li><a href ="http://localhost/Brent/Login/home.php">Home</a></li>
    <li><a href= "http://localhost/Brent/Contact%20Us/contact.php">Contact Us</a></li>
    <li><a href ="http://localhost/Brent/AboutUs/about.php">About Us</a></li>
     <li><a href="http://localhost/Brent/Search/search.php">Search </a></li>
    <li><a href="http://localhost/Brent/Rent/rent.php">Post A Rental</a></li>
  </ul>
</head>

  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Open Sans', sans-serif;
      color: #222;
    }
    .card {
      height: 475px;
      width: 325px;
      box-shadow: 0px 5px 15px 0px rgba(153,153,153,0.5);
      border-radius: 4px;
    }
    .top {
      height: 55%;
      border-radius: 4px 4px 0px 0px;
      border: 1px solid #ddd;
      /* Setting a background image */
      background-image: url(profile-placeholder.svg);
      padding: 0px 16px;
    }
    .name {
      padding-top: calc(475px * 0.40);
      margin: 0px;
    }
    .status {
      display: inline-block;
      width: 10px;
      height: 10px;
      margin-left: 4px;

      border-radius: 5px;
      background-color: #60D156;
    }
    .title {
      margin-top: 8px;
    }
    .middle {
      height: 5%;
      border-left: 1px solid #ddd;
      border-right: 1px solid #ddd;
      padding: 0px 16px;
    }
    .time {
      color: #444;
      font-size: 0.8em;
      padding-top: 0.2em;
    }
    .bottom {
      height: 40%;
      border-radius: 0px 0px 4px 4px;
      border: 1px solid #ddd;
      padding: 8px 16px;
    }
    .profile-action {
      display: block;
      width: 100%;
      height: 32px;
      /* You could also just set the font family explicitly like we did for the body. */
      font-family: inherit;
      font-size: 1em;
      text-align: left;
	  /* The border-radius property allows for round corners. */
      border-radius: 4px;
      border: 0px;
      background-color: white;
      /* This is how we changed the cursor to be a hand instead of an arrow. */
      cursor: pointer;
    }
    .profile-action:hover {
      background-color: #00A5D2;
      color: white;
    }
  </style>
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

<body>
  <section>
    <div class="card">
      <div class="top">
        <!-- Here we changed the word from 'Stufent' to 'Student' -->
        <h3 class="name">Profile  



        	<span class="status"></span><div id ="profile">
 <?php echo $login_session; ?>
</div></h3>
        <p class="title">
      
        </p>
      </div>
      <div class="middle">
        <div class="time"><script>
  var currentTime = new Date(),
      hours = currentTime.getHours(),
      minutes = currentTime.getMinutes();

  if (minutes < 10) {
   minutes = "0" + minutes;
  }

  var suffix = "AM";
  if (hours >= 12) {
    suffix = "PM";
    hours = hours - 12;
  }
  if (hours == 0) {
   hours = 12;
  }

  document.write(hours + ":" + minutes + " " + suffix)
</script></div>
      </div>
      <div class="bottom">
        <button class="profile-action">Password</button>
        <button class="profile-action">Stastics</button>
        <button class="profile-action">Phone Number</button>
        <button class="profile-action">Address</button>
      </div>
    </div>
  </section>
<form action="actionpack.php" method="post">

<table>
<tr>
  <td> Old Password</td>
  <td><input type="text" name="password" id="passwords" ><span id="messages"></span>

  <td> New password</td>
  <td><input type="text" name="password" id="password" ><span id="messages"></span></td> </td>   
</tr>
<tr>
  <td><input type="submit" name="submit3" value="update"></td>
</tr>
</table>
   <section>
    <div>
    <h1>Stastics</h1>
        <div class="textbox">
        <i class="fas fa-user"></i>
        Number of houses you have contacted <br>
        Number of houses you have posted
        </div>
    </div>
  </section>
  
<table>
  <h1>Phone Number</h1>
<tr>
  <td>Phone Number</td>
  <td><input type="text" name="phone" id="phone" ></td>   
</tr>
<tr>
  <td><input type="submit" name="submit2" value="update"></td>
</tr>
</table>

<table>
  <h1>Address</h1>
<tr>
  <td>Address</td>
  <td><input type="text" name="address" id="address" ></td>   
</tr>
<tr>
  <td><input type="submit" name="submit4" value="update"></td>
</tr>
</table>
    

  <section>
    <div>
      <h1>Delete Account</h1>
      <input type="submit" name="Delete"  value="Delete" >
    </div>
  </section>
</form>

</body>
</html>

