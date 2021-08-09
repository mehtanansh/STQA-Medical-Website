<?php
session_start();
?>
<?php
 if (!isset($_SESSION['loggedin'])){
  $_SESSION['loggedin']=false;
 }
?>
<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>
		Home
	</title>
</head>	
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="">Care-Med</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php
      if ($_SESSION['loggedin']!=true){?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          New User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="user/Sign Up.php">Sign Up as a User</a>
        </div>
      </li>
        <li class="nav-item dropdown">
        <div class="form-inline my-2 my-lg-0">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign In
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="user/Sign In.php">Sign In as a User</a>
        </div>
      </div>
      </li>
      <?php 
      }
      else{
      ?>
      <li class="nav-item">
      <div class="form-inline my-2 my-lg-0">
      <a href="User/Logout.php">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
    </a>
    </div>
  </li>

      <?php 
      }
      ?>

    </ul>
  </div>
</nav>
<div>
  <center>
<img src="download.jpg" width="70%" class="img-fluid" alt="HouseService"></center>
</div>
<br>
<center>
  <div class="d-flex flex-row justify-content-around" style="padding: 2%;background-color: #BFC9CA;padding: 2vw;border-radius: 1vw;font-size: 1.05vw;">
    <div class="p-2" style="background-color: #686868;padding: 1vw;border-radius: 1vw;"><a href="#Here_House_Clean" style="color: #FFD12A;text-decoration: none;">
      <a href="User/Appointment Form.php">
      <img src="Mob.png" width="100" height="75">
      <br>Book an Appointment</a>
    </div>

    <div class="p-2" style="background-color: #686868;padding: 1vw;border-radius: 1vw;"><a href="#Here_Fitness" style="color: #FFD12A;text-decoration: none;">
      <a href="User/Profile.php">
      <img src="Profile.png" width="70" height="75">
      <br><strong style="margin: 25px;"> View Your Profile </strong></a>
    </div>

    <div class="p-2" style="background-color: #686868;padding: 1vw;border-radius: 1vw;"><a href="#Here_App_Rep" style="color: #FFD12A;text-decoration: none;">
      <a href="">
      <img src="Sched.png" width="100" height="75">
      <br>Check Doctors Schedule</a>
    </div>

    <div class="p-2" style="background-color: #686868;padding: 1vw;border-radius: 1vw;"><a href="#Here_App_Rep" style="color: #FFD12A;text-decoration: none;">
      <a href=" ">
      <img src="Abt.png" width="100" height="75">
      <br> <strong style="margin: 50px;">About Us</strong></a>
    </div>

    <div class="p-2" style="background-color: #686868;padding: 1vw;border-radius: 1vw;"><a href="#Here_App_Rep" style="color: #FFD12A;text-decoration: none;">
      <a href="User/ContactUs.php">
      <img src="Cont.png" width="100" height="75">
      <br><strong style="margin: 40px;">Contact Us</strong></a>
    </div>

  </div><br><br>
  </center>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>