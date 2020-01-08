<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"Rent");

if(isset($_POST["submit3"])){
session_start();

$user_check = $_SESSION['login_user'];
mysqli_query($link, "UPDATE Accounts set password='$_POST[password]' where username = '$user_check' ");
header("location: profile.php");
}

if(isset($_POST["submit2"])){
session_start();

$user_check = $_SESSION['login_user'];
mysqli_query($link, "UPDATE Accounts set phone='$_POST[phone]' where username = '$user_check' ");
header("location: profile.php");
}

if(isset($_POST["submit4"])){
session_start();

$user_check = $_SESSION['login_user'];
mysqli_query($link, "UPDATE Accounts set address='$_POST[address]' where username = '$user_check' ");
header("location: profile.php");
}
if(isset($_POST["Delete"])){
session_start();
$user_check = $_SESSION['login_user'];
mysqli_query($link, "DELETE FROM Accounts where username = '$user_check' ");
session_destroy();
header("location: login.php");
}
?>