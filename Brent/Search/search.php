<?php
if(isset($_POST['search']))
{
$valueToSearch = $_POST['valueToSearch'];
$query ="SELECT * FROM Rental WHERE CONCAT(id,name,address,phone,zesa,house,maids,WiFi,stoves,pool,places,NOM,solar,NoP) LIKE '%".$valueToSearch."%'";
$search_result = filterTable($query);
}
else {
$query = "SELECT * FROM Rental";
$search_result = filterTable($query);
}

function filterTable($query)
{
	$connect = mysqli_connect("localhost","root","","Rent");
	$filter_Result = mysqli_query($connect, $query);
	return $filter_Result;
}
?>
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


<form method="post">
	<input type="text" name="valueToSearch" placeholder="value To Search"><br><br>
	<input type="submit" name="search" value="Filter"><br><br>

  <body>
<table>
	<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Zesa</th>
			<th>house</th>
			<th>Housemaids</th>
			<th>WiFi</th>
			<th>Stoves</th>
			<th>Swimming Pool</th>
			<th>Places</th>
            <th>Solar</th>
			<th>Number in a room</th>
			<th>Number Required</th>
			
	</tr>
	<?php while($row = mysqli_fetch_array($search_result)):?> 
	<tr>

		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['phone'];?></td>
		<td><?php echo $row['zesa'];?></td>
		<td><?php echo $row['house'];?></td>
		<td><?php echo $row['maids'];?></td>
		<td><?php echo $row['WiFi'];?></td>
		<td><?php echo $row['stoves'];?></td>
		<td><?php echo $row['pool'];?></td>
		<td><?php echo $row['places'];?></td>
		<td><?php echo $row['solar'];?></td>
		<td><?php echo $row['NOM'];?></td>
		<td><?php echo $row['NoP'];?></td>
	</tr>
	<?php endwhile;?>
</table>
</form>
</body>
</html>
