<?php 
include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: home.php");

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link rel="stylesheet" href="home.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </head>
 
  <ul>
  	<li><a href ="http://localhost/Brent/Login/home.php">Home</a></li>
  	<li><a href= "http://localhost/Brent/Contact%20Us/contact.php">Contact Us</a></li>
  	<li><a href ="http://localhost/Brent/AboutUs/about.php">About Us</a></li>
  	 <li><a href="http://localhost/Brent/Search/search.php">Search </a></li>
  	<li><a href="http://localhost/Brent/Rent/rent.php">Post A Rental</a></li>
  </ul>
 
<body>

<div id ="profile">
  <b id="welcome">Welcome:
  	<a href="http://localhost/Brent/Login/profile.php"><i><?php echo $login_session; ?>
  	</a>
  	</i>
  </b>



  <b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<div>
Are you a Student?<br>
Troubled and looking for  a better shelter<br>   	
Brent is there to work with you providing you information about rentals.<br>
Our homes consist of<br>

<em>WiFi</em><br>
<em>Solar</em><br>
<em>Housemaid</em><br>
<em>Swimming Pools</em><br>

<div class="container">
	Our Hottest Places
  <div class="row">
    <div class="col align-self-start">
      🗽Aerodonome
    </div>
    <div class="col align-self-center">
      ⭐Chiwaridzo
    </div>
    <div class="col align-self-end">
      🌉Chipindura
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col align-self-start">
      🌵Clutters
    </div>
    <div class="col align-self-center">
      💂Shashi Primary
    </div>
    <div class="col align-self-end">
      🎤Shashi West
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col align-self-start">
      💨Shashi East
    </div>
   
    
  </div>
</div>
</body>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<footer>
            <!-- Copyright -->
            <div class="padding-t-b40 container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="" alt="">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="">BRENT</a> All Rights Reserved <a class="fweight-700" href=""></a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>


</html>
