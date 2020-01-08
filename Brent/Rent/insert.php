  <?php

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$zesa = $_POST['zesa'];
$house = $_POST['house'];
$WiFi = $_POST['WiFi'];
$maids = $_POST['maids'];
$pool = $_POST['pool'];
$stoves = $_POST['stoves'];
$places = $_POST['places'];
$NoM = $_POST['NoM'];
$solar = $_POST['solar'];
$NoP = $_POST['NoP'];

if (!empty($name) || !empty($address) || !empty($phone) || !empty($zesa) || !empty($house) || !empty($maids)|| !empty($pool)|| !empty($stoves) | !empty($places)) {

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "Rent";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()) { die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else  {
$SELECT = "SELECT name From Rental Where name = ? Limit 1";
$INSERT = "INSERT INTO Rental (name ,address, phone, zesa, house, WiFi, maids, pool ,stoves, places,NoM ,solar,NoP) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?)";

$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s", $name);
$stmt->execute();
$stmt->bind_result($name);
$stmt->store_result();
$rnum = $stmt->num_rows;

if ($rnum==0) {
	$stmt-> close();
	$stmt =$conn->prepare($INSERT);
	$stmt->bind_param("ssisssssssisi",$name,$address,$phone,$zesa,$house,$WiFi,$maids,$pool,$stoves,$places,$NoM,$solar,$NoP);
	$stmt->execute();
     echo "<script>alert('Rent posted successfully');</script>";
   header('location: http://localhost/Brent/Search/search.php');
    
} else {
     
    echo "<script>alert('Someone has already registered with that name');</script>";
    
   
  

}

$stmt->close();
$conn->close();
}

} else {
echo "All fields are required";
die();

}
?>