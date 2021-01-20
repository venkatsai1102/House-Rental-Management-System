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
  <table border="1" id="customers" style="font-family:'Segoe UI Regular'">
    <tr>
      <th>House ID</th>
      <th>Tenant ID</th>
      <th>Rating</th>
      <th>Comment</th>
    </tr>
<?php
include("connection.php");
$query="select * from rating";
$data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['id']."</td><td>".$result['t_id']."</td><td>".$result['rating']."</td><td>".$result['comment']."</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
