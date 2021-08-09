<?php
session_start();
?>
<?php
 if (!isset($_SESSION['loggedin'])){
  $_SESSION['loggedin']=false;
  header("Location: http://localhost/PHP%20College%20Medical%20website/Clg Project/User/Sign In.php");
 }
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body
{
background-image:url("BackFin2.jpg");
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-position: 50% 50%;
font-family: sans-serif;
color: yellow;
margin:0;
padding: 0;
}

label {
  margin-bottom: 10px;
  display: inline-block;
  font-weight: bold;
  color: yellow;
}

input[type=text]{
  margin-right: 20px;
  margin-bottom: 20px;
  padding: 4px;
  border: 1px solid #ccc;
  border-radius: 2px;
}

input[type=date] {
  margin-right: 20px;
  margin-bottom: 20px;
  padding: 4px;
  border: 1px solid #ccc;
  border-radius: 2px;
}

html {
  font-size: 1rem;
}

@include media-breakpoint-up(sm) {
  html {
    font-size: 1.2rem;
  }
}

@include media-breakpoint-up(md) {
  html {
    font-size: 1.4rem;
  }
}

@include media-breakpoint-up(lg) {
  html {
    font-size: 1.6rem;
  }
}

</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>
    Book Appointment
  </title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Care - Med </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/PHP%20College%20Medical%20website/Clg%20Project/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Appointment Form.php"> New Appointment </a>
      </li>

    </ul>
    <div class="form-inline my-2 my-lg-0">
      <a href="Logout.php">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
    </a>
    </div>
  </div>
</nav>
	<CENTER>
  <div class="container">
    <h1>Care - Med</h1>
    <h2></h2>
	<div>
		<img src="tick.jpg" class="img-fluid" >
	<br><br>
	<div class="container" style="background-color: black; color:yellow;">
		<strong>Your Request has been Submitted and the appointment will be cancelled!</strong><br>You will recieve your <strong>Confirmation E-Mail in the next 4Hrs</strong>. If you don't recieve any E-mail pls<strong> <a href="ContactUs.php">Contact Us</a></strong>!!<br>
		<br> Hope you have a good experience with our Team.<br>
		<br><p  style="color: blue">Thank You !!!!</p><br>
	</div><br><br>
	<button type="button" class="btn btn-warning">
		<a href="/PHP College Medical Website/Clg Project/" style="text-decoration: none;color:black;" > &laquo; Back To home </a>
	</button>
	<button type="button" class="btn btn-success">
		<a href="/PHP College Medical Website/Clg Project/User/Profile.php" style="text-decoration: none;color:black;" class="next">My Profile &raquo;</a>
	</button></fieldset>
	</CENTER>
	</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</div>
</CENTER></body></html>