<html>
<head>
	<link rel="stylesheet" type="text/css" href="signup.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  
  <?php
    include 'header.php';
  ?>

<br>
<div class="card" style="width: 50rem;border-radius: 20px;background-color:#f0f5f5;position:relative;left:40%;">
<br>
 <div class="card-body">
<h1 class="card-title" style="text-align:center"><B>Book House</B></h1><br>
<form name="Form2" action="dobooking.php" method="get" enctype="multipart/form-data">


  <table style="align:center;">
    <tr>
      <td><b>House ID: </b></td>
      <td> <input type=number name="h" value="" size=25></td>
    </tr>
    <tr>
      <td><b>Booking Date: </b></td>
      <td> <input type=date name="b" value="" size=25></td>
    </tr>
    <tr>
      <td><b>Period: </b></td>
      <td> <input type=number name="p" value="" size=25></td>
    </tr>
    <tr>
      <td><b>Price: </b></td>
      <td> <input type=number name="pr" value="" size=25></td>
    </tr>
    <tr>
      <td><b>Agreement: </b></td>
      <td> <input type=file name="a" value="" size=25></td>
    </tr>
  </table>
<br><br>
<input type=submit value="Add" class="btn btn-danger" name="submit">
</form><br>
</div>
</div>

</body>

</html>
