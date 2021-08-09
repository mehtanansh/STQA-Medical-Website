<?php
session_start();
if ($_SESSION['loggedin']!=true)
{
  $_SESSION['loggedin']=false;
}
?>
<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="0_1_CompanyLogo.png" type="image/x-icon">
		<style type="text/css">
			body
			{
			background-image:url('DRK2.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			background-position: 50% 50%;
			margin:0;
			padding: 0;
			}

			input::-webkit-outer-spin-button,
			input::-webkit-inner-spin-button {
		    -webkit-appearance: none;
		    margin: 0;
		}
		html {
  font-size: 1rem;
}

@include media-breakpoint-up(sm) {
  html {
    font-size: 1.6rem;
  }
}

@include media-breakpoint-up(md) {
  html {
    font-size: 1.6rem;
  }
}

@include media-breakpoint-up(lg) {
  html {
    font-size: 1.8rem;
  }
}


	</style>
	</head>
	<body style="color:white">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="http://localhost/PHP%20College%20Medical%20website/Clg%20Project/">Care - Med</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/PHP%20College%20Medical%20website/Clg%20Project/">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php
      if ($_SESSION['loggedin']!=true){?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          New User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="doctor/">Sign Up as a Doctor</a>
          <a class="dropdown-item" href="user/Sign Up.php">Sign Up as a User</a>
        </div>
      </li>
        <li class="nav-item dropdown">
        <div class="form-inline my-2 my-lg-0">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign In
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="doctor">Sign In as a Doctor</a>
          <a class="dropdown-item" href="user/Sign In.php">Sign In as a User</a>
        </div>
      </li>
    </div>
      <?php 
      }
      else{
      ?>
      <div class="form-inline my-2 my-lg-0">
        <a href="Logout.php">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
        </a>
      </div>


      <?php 
      }
      ?>

    </ul>
  </div>
</nav>

	<center>
	<h1>Care - Med</h1><br>
    <h2>We are always there for you</h2>
	</center>
	<div style="padding-top: 2%;color: #ff9900">
		<div>
			<center>
				<img src="Cont.png" width="35%" class="img-fluid" alt="HouseService">
			</center>
		</div>
	</div><br>
	<center>
		<div class="container">
			<h2 style="column-span: all;">Contact Us</h2>
		  <div class="row">
		    <div class="col-sm">
		      <strong>Name</strong><br>
				Pth Floor, XYZ Centre,<br>
				ABC Road,<br>
				Churchgate<br>
				Mumbai - 400020<br>
				India
		    </div>
		    <div class="col-sm">
		    T +91 abcdefghij<br>
			T +91 abcdefghij<br>
			F +91 abcdefghij<br>
			help@HouseHelpers.com<br>
			Queries@HouseHelpers.com<br>
			</div>
		  </div>
		</div>
	<center>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</center>