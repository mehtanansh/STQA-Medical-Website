<?php
session_start();
?>
<?php
 if (!isset($_SESSION['loggedin'])){
  $_SESSION['loggedin']=false;
  header("Location: http://localhost/PHP%20College%20Medical%20website/Clg Project/User/Sign In.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
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

*{
   box-sizing: border-box;
   color: cyan;
}

label {
  margin-bottom: 10px;
  display: block;
}

input[type=text] {
  width: 45%;
  margin-right: 20px;
  margin-bottom: 20px;
  padding: 4px;
  border: 1px solid #ccc;
  border-radius: 2px;
}

body {
  background-image: url("steam.jpg");
  background-repeat: no-repeat;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-position: 50% 50%;
  margin:0;
  padding: 0;
  font-family: "Lato", sans-serif;
  color: white;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 57;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 5vw;}
  .sidenav a {font-size: 18px;}
}
</style>
<?php 
      $target_paths="/PHP College Medical Website/Database for images/";
      $EMAILS=$_SESSION['Mail'];
      $conn = mysqli_connect('localhost','root','','carefull_db') or die('Error connecting to MySQL server.');
      $order = "SELECT * FROM user WHERE Email='$EMAILS'";
      $result = mysqli_query($conn, $order);
      while ($row = mysqli_fetch_array($result)){
        $File1=$row['File1'];
        $File1_path=$target_paths."$File1";
        if ($row['File2']){
          $File2=$row['File2'];
          $File2_path=$target_paths."$File2";
        }
        else{
          $File2=" NO FILE ";
          $File2_path="";
        }
        if ($row['File3']){
          $File3=$row['File3']; 
          $File3_path=$target_paths."$File3";
        }
        else{
          $File3=" NO FILE ";
          $File3_path="";
        }
        if ($row['File4']){
          $File4=$row['File4'];
          $File4_path=$target_paths."$File4";
        }
        else{
          $File4=" NO FILE ";
          $File4_path="";
        }
        if ($row['File5']){
          $File5=$row['File5'];
          $File5_path=$target_paths."$File5";
        }
        else{
          $File5=" NO FILE ";
          $File5_path="";
        }
        $usr=$row['Username'];
      }
?>
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
  <div>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <p><img src="avatar.png" width="42px" height="42px" align="left" style="font-size: 25px;"><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HELLO, <?php echo $usr ?> </strong></p><br>
      <hr style="margin-left: auto;margin-right: auto;border:dashed 2px cyan;"><br>
      <a href="Profile.php"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a>
      <a href="Address.php"> <i class="fa fa-address-card" aria-hidden="true"></i> My Address</a>
      <a href="Documents.php"> <i class="fa fa-file" aria-hidden="true"></i> Uploaded Documents</a>
      <a href="Apps.php"> <i class="fa fa-calendar" aria-hidden="true"></i> Appointments</a>
    </div>
    <span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776; More</span>
  </div>
  <center>
  <div class="container">
    <h1>Care-Full</h1>
    <h2>A Place to reach out any doctor in minutes</h2>
  </div>
  <div class="container">
<!--     {% for message in messages %}
      <div>
        <strong style="color: red;">{{ message }}</strong>
      </div>
    {% endfor %} -->
  <div class="row" style="padding:1vw;">
    <div class="col-xl-12"> <i><u><strong>PERSONAL DOCUMENTS THAT WERE UPLOADED</strong></u></i><br>
      
      <div class="col-xs-12 col-form-label">
        <label for="F1" class="col-xl-6 col-form-label"  style="color:#FFF700;">First File:</label>
        <a href="<?php echo $File1_path ?>" target="_blank" style="color: white;"><i class="fa fa-fw fa-file-pdf-o"></i><?php echo $File1 ?></a>
      </div>

      <div class="col-xs-12 col-form-label">
        <label for="F1" class="col-xl-6 col-form-label"  style="color:#FFF700;">Second File:</label>
        <a href="<?php echo $File2_path ?>" target="_blank" style="color: white;"><i class="fa fa-fw fa-file-pdf-o"></i><?php echo $File2 ?></a>
      </div>

      <div class="col-xs-12 col-form-label">
        <label for="F1" class="col-xl-6 col-form-label"  style="color:#FFF700;">Third File:</label>
        <a href="<?php echo $File3_path ?>" target="_blank" style="color: white;"><i class="fa fa-fw fa-file-pdf-o"></i><?php echo $File3 ?></a>
      </div>

      <div class="col-xs-12 col-form-label">
        <label for="F1" class="col-xl-6 col-form-label"  style="color:#FFF700;">Fourth File:</label>
        <a href="<?php echo $File4_path ?>" target="_blank" style="color: white;"><i class="fa fa-fw fa-file-pdf-o"></i><?php echo $File4 ?></a>
      </div>

      <div class="col-xs-12 col-form-label">
        <label for="F1" class="col-xl-6 col-form-label"  style="color:#FFF700;">Fifth File:</label>
        <a href="<?php echo $File5_path ?>" target="_blank" style="color: white;"><i class="fa fa-fw fa-file-pdf-o"></i><?php echo $File5 ?></a>
      </div>
</div></div></div></center>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>