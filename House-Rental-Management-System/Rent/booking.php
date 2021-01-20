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

<br><br>
  <table border="1" id="customers" style="font-family:'Segoe UI Regular'">
    <tr>
      <th>Tenant ID</th>
      <th>House ID</th>
      <th>Booking Date</th>
      <th>Period</th>
      <th>Price</th>
      <th>Agreement</th>
    </tr>
<?php
include("connection.php");
if($_SESSION['uname'] =="admin")
  {
    $query="select * from booking";
  }
  else
  {
    $tid = $_SESSION['t_id'];
    $query="select * from booking where t_id='$tid'";

  }
$data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['t_id']."</td><td>".$result['h_id']."</td><td>".$result['booking_date']."</td><td>".$result['period']."</td><td>".$result['price']."</td><td>";
 echo "<a href='v.php?tid=".$result['t_id']."&hid=".$result['h_id']."'>View File</a>";
 echo "</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
