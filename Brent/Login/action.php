<?php
 session_start();
 $error = '';

if (isset($_POST['submit'])) {
 if (empty($_POST['username']) || empty($_POST['password'])){
 	$error ="Username or Password is invalid";
}
else
{
	$username = $_POST['username'];
    $password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "","Rent");

$query = "SELECT username, password FROM Accounts WHERE username=? and password=? LIMIT 1";

$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username,$password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();


if($stmt->fetch())
	{
	$_SESSION['login_user'] = $username;
	header("location: home.php");
	}
else {
	$error ="Username or Password is invalid";
}
	mysqli_close($conn);
}
}
?>