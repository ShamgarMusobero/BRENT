<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
   <ul>
    <li><a href ="http://localhost/Brent/Login/home.php">Home</a></li>
    <li><a href= "http://localhost/Brent/Contact%20Us/contact.php">Contact Us</a></li>
    <li><a href ="http://localhost/Brent/AboutUs/about.php">About Us</a></li>
    <li><a href="http://localhost/Brent/Search/search.php">Search </a></li>
    <li><a href="http://localhost/Brent/Rent/rent.php">Post A Rental</a></li>
  </ul>
  </head>
  <body>
<div class="login-box">
  <h1>Post A Rental</h1>
  <img src="rent.jpg" >

  </body>
</html>
<form method="post" action="insert.php ">
  <div>
<input type="text" name ="name" placeholder="Name" required >
<input type="text" name ="phone" placeholder="Phone Number" required>
<input type="text" name="address" placeholder="Address" required>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <div>
      <b>House</b><br>
      <input type="radio" name="house" value="boarding" required>Boarding
      <input type="radio" name="house"  value="notboarding" required>Not Boarding
    </div>
    </div>
    <div class="col-6">
      <div>
      <br><b>Total Number Of People Required</b><br>
      <input type="radio" name="NoP" value="10" required>1-10
      <input type="radio" name="NoP" value="20" required>20-30
      <input type="radio" name="NoP" value="30" required>30-40
      </div>
    </div>
    <div class="col">
      <div>
      <br><b>ZESA</b><br>
      <input type="radio" name="zesa" value="yes" required>Yes
      <input type="radio" name="zesa" value="no" required>No 
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div id="WiFi">

    <br><b>Network</b><br>
    <input type="radio" name="WiFi" value="WiFi" required>WiFi
    <input type="radio" name="WiFi" value="noWiFi" required>No WiFi
    </div>
    </div>
    <div class="col-5">
      <div>
      <br><b>HouseMaids</b><br>
      <input type="radio" name="maids" value="maids" required>Yes
      <input type="radio" name="maids" value="nomaids" required>No 
      </div>
    </div>
    <div class="col">
      <div>
<br><b>Number of people in A room</b><br>
<input type="radio" name="NoM" value="1" required>1
<input type="radio" name="NoM" value="2" required>2
<input type="radio" name="NoM" value="3" required>3
</div>
    </div>
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col">
      <div>
      <br><b>Swimming Pool</b><br>
      <input type="radio" name="pool" value="yes" required>Yes
      <input type="radio" name="pool" value="no" required>No 
      </div>
    </div>
    <div class="col-6">
      <div>
      <br><b>Solar</b><br>
      <input type="radio" name="solar" value="yes" required>Solar
      <input type="radio" name="solar" value="no" required>No Solar
      </div>
    </div>
    <div class="col">
      <div>
      <br><b>Places</b><br>

      <input type="radio" name="places" value="Aerodonome" required>Aerodonome<br>
      <input type="radio" name="places" value="Chiwaridzo" required>Chiwaridzo<br>
      <input type="radio" name="places" value="Chipindura" required>Chipindura<br>
      <input type="radio" name="places" value="Clutters" required>Clutters<br>
      <input type="radio" name="places" value="ShashiView" required>Shashi View<br>
      <input type="radio" name="places" value="ShashiEast" required>Shashi East<br>
      <input type="radio" name="places" value="ShashiWest" required>Shashi West<br>
      <input type="radio" name="places" value="ShashiPrimary" required>Shashi Primary<br>
      <div>
      <br>
  
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-5">
      <div>
      <br><b>Stoves</b><br>
      <input type="radio" name="stoves" value="yes" required>Yes<br>
      <input type="radio" name="stoves" value="no"  required>No 
      </div>
    </div>
    <div class="col">
      
      <input type="submit"  value="Post">
    </div>
  </div>
</div>
</form>
