<?php
  session_start();
  if($_SESSION['uname']=="admin")
    {
?>
      <nav class="navbar navbar-inverse" style="font-family:'Segoe UI Regular'">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">House Rental Management System</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Houses <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="houses.php">Houses</a></li>
                <li><a href="rating.php">Rating</a></li>
              </ul>
            </li>

            <!--<li><a href="owner.php">Owners</a></li>-->
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tenants<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="tenant.php">Tenants</a></li>
                <li><a href="members.php">Members</a></li>
              </ul></li>
            <li><a href="booking.php">Booking</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hi, <?php echo $_SESSION['uname'];?></a>
            </li>
            <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
<?php
    }
    else
    {
?>
        <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">House Rental Management System</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Houses <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="houses.php">Houses</a></li>
                <li><a href="rating.php">Rating</a></li>
              </ul>
            </li>

            <li><a href="booking.php"> Bookings</a></li>
            <li><a href="dobookinghtml.php"><button class="btn btn-primary"> Book a House</button></a></li>
            

            
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hi, <?php echo $_SESSION['uname'];?></a>
            </li>
            <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
<?php
    }
?>