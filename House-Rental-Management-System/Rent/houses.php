<!DOCTYPE html>
<html lang="en">
<head>
  <title>House Rental Management System</title>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="font-family:'Segoe UI Regular'">

<?php
include 'header.php';
?>
<div class="container">

<a href="houses2.php" class='btn btn-primary'>Show Ratings</a>
<br>
 <?php
if($_SESSION['ltype']=="admin")
  {
?>
<br>
  <a href='addhouse.html' class='btn btn-primary'>Add House</a> <br>
<?php  
}
?>

  <br>
  <table border="1" id="customers" style="font-family:'Segoe UI Regular'">
    <tr>
      <th>House ID</th>
      <th>Owner ID</th>
      <th>No of rooms</th>
      <th>Address</th>
      <th>City</th>
      <th>State</th>
      <th>Country</th>
      <th>Description</th>
      <th>Rate for rent</th>
      <th>Pics of the house</th>
    </tr>
<?php
include("connection.php");
$query="select * from house";
$data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['id']."</td><td>".$result['owner_id']."</td><td>".$result['no_of_rooms']."</td><td> ".$result['address']."</td><td>";
echo  $result['city']."</td><td>".$result['state']."</td><td>".$result['country']."</td><td> ".$result['description']."</td><td>".$result['rate']."</td><td>";
echo '<img src="data:pics/jpeg;base64,'.base64_encode( $result['pics'] ).'"/>';
echo "</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
