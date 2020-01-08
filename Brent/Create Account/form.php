<?php
$name =  $_POST['name'];
$username =  $_POST['username'];
$surname =  $_POST['surname'];
$phone =  $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];


if (!empty($name) || !empty($username) ||  !empty($surname)  || !empty($address) || !empty($password) || !empty($phone)) {

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "Rent";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()) {
	die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
$SELECT = "SELECT phone From Accounts Where phone = ? Limit 1";
$INSERT = "INSERT INTO Accounts (name, username, surname, address, password, phone) VALUES(?, ?, ?, ?, ?, ?)";


$stmt = $conn->prepare($SELECT);
$stmt->bind_param("i", $phone);
$stmt->execute();
$stmt->bind_result($phone);
$stmt->store_result();
$rnum = $stmt->num_rows;

if ($rnum==0) {
	$stmt-> close();

	$stmt =$conn->prepare($INSERT);
	$stmt->bind_param("sssssi", $name, $username, $surname, $address, $password, $phone);
	$stmt->execute();
     echo "<script>alert('Register successfully');</script>";
     header('location: http://localhost/Brent/Login/login.php');
    
} else {
     
    echo "<script>alert('Someone has already registered with that phone number');</script>";
   
  

}

$stmt->close();
$conn->close();
}

} else {
echo "All fields are required";
die();

}
?>
