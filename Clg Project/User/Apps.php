<?php
session_start();
?>
<?php
 if (!isset($_SESSION['loggedin'])){
  header("Location: http://localhost/PHP%20College%20Medical%20website/Clg Project/User/Sign In.php");
 }
 else
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
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/PHP College Medical Website/Clg Project/">Care - Med </a>

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

<?php 
      $mess1="";
      $target_paths="/PHP College Medical Website/Database for images/";
      $EMAILS=$_SESSION['Mail'];
      $conn = mysqli_connect('localhost','root','','carefull_db') or die('Error connecting to MySQL server.');
      $order = "SELECT * FROM  user WHERE Email='$EMAILS'";
      $result = mysqli_query($conn, $order);
      while ($row = mysqli_fetch_array($result)){
        $usr=$row['Username'];
      }
      mysqli_close($conn);
      ?>
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
  <div class="row" style="padding:1vw;">
    <div class="col-xl-12"> <i><u><strong>PERSONAL DOCUMENTS THAT WERE UPLOADED</strong></u></i><br>
      <div class="col-xs-12 col-form-label">
       <?php 
      $target_paths="/PHP College Medical Website/Database for images/";
      $EMAILS=$_SESSION['Mail'];
      $conn = mysqli_connect('localhost','root','','carefull_db') or die('Error connecting to MySQL server.');
      $order = "SELECT * FROM  appointments WHERE Email='$EMAILS'";
      $result = mysqli_query($conn, $order);
      if (mysqli_num_rows($result)!=0){
      while ($row = mysqli_fetch_array($result)){
        if ($row['Files']){
          $File2=$row['Files'];
          $File2_path=$target_paths."$File2";
        }
        else{
          $File2=" NO FILE ";
          $File2_path="";
        }
        $usr=$row['Username'];
        $name=$row['Name'];
        $Age=$row['Age'];
        $city=$row['City'];
        $clinic=$row['Clinic'];
        $doctor=$row['Doctor'];
        $dates=$row['Dates'];
        $PT=$row['Prefered_Time'];
        $Symp=$row['Symptoms'];
        $bool1=$row['Approved'];
?>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  <div class="container" style="background-color: rgba(0,0,0,0.9);">
  <div class="row">
    <div class="col-sm-3">
      <div class="col-xs-12 col-form-label">
        <label for="PN">Patient Name: </label>
        <input type="text" readonly class="form-control-plaintext" id="PN" rows="25" value="<?php echo $name ?>"  style="color: white;width: 88%;" name="PN" readonly>
      </div>
    </div>
        <div class="col-sm-4">
      <div class="col-xs-12 col-form-label">
        <label for="RE">Registered Email: </label>
        <input type="text" readonly class="form-control-plaintext" id="RE" rows="25" value="<?php echo $EMAILS ?>"  style="color: white;width: 88%;" name="RE" readonly>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="col-xs-12 col-form-label">
        <label for="usr1">Username: </label>
        <input type="text" readonly class="form-control-plaintext" id="usr1" rows="25" value="<?php echo $usr ?>"  style="color: white;width: 88%;" name="usr1" readonly>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="col-xs-12 col-form-label">
        <label for="AGES">Age: </label>
        <input type="text" readonly class="form-control-plaintext" id="AGES" rows="25" value="<?php echo $Age ?>"  style="color: white;width: 88%;" name="AGES" readonly>
      </div>
    </div>
  </div>

    <div class="row">
    <div class="col-sm-3">
      <div class="col-xs-12 col-form-label">
        <label for="Dctr">Doctor Name: </label>
        <input type="text" readonly class="form-control-plaintext" id="Dctr" rows="25" value="Doctor <?php echo $doctor ?>"  style="color: white;width: 88%;" name="Dctr" readonly>
      </div>
    </div>
        <div class="col-sm-3">
      <div class="col-xs-12 col-form-label">
        <label for="CL">Clinic: </label>
        <input type="text" readonly class="form-control-plaintext" id="CL" rows="25" value="Clinic <?php echo $clinic ?>"  style="color: white;width: 88%;" name="CL" readonly>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="col-xs-12 col-form-label">
        <label for="CT">City: </label>
        <input type="text" readonly class="form-control-plaintext" id="CT" rows="25" value="<?php echo $city ?>"  style="color: white;width: 88%;" name="CT" readonly>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="col-xs-12 col-form-label">
        <label for="DT">Preferred Time and Date: </label>
        <input type="text" readonly class="form-control-plaintext" id="DT" rows="25" value="<?php echo $PT?>,<?php echo $dates ?>"  style="color: white;width: 88%;" name="DT" readonly>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="col-xs-12 col-form-label">
        <label for="S">Symptoms Recorded: </label>
        <input type="text" readonly class="form-control-plaintext" id="S" rows="25" value="<?php echo $Symp ?>"  style="color: white;width: 88%;" name="S" readonly>
      </div>
    </div>
        <div class="col-sm-4">
      <div class="col-xs-12 col-form-label">
        <label for="Act">File: </label>
        <a href="<?php echo $File2_path ?>" style="text-decoration: none;">
        <input type="text" readonly class="form-control-plaintext" id="Act" rows="25" value="<?php echo $File2 ?>"  style="color: white;width: 88%;" name="Act" readonly></a>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="col-xs-12 col-form-label">
        <label for="DT"></label>
      <button type="submit" class="btn btn-dark" style="color: red;">Delete</button>
  </div>
      </div>
    </div>
      <div class="row">
        <?php 
            if ($bool1==0){
        ?>
        <button type="button" class="btn btn-secondary btn-lg btn-block" style="on-hover">Not Approved</button>
        <?php
      }else{
        ?>
          <button type="button" class="btn btn-success btn-lg btn-block"><a href="Payments.html" style="text-decoration:none; color: white;">Proceed To Payment</a></button>
        <?php
        }
        ?>
      </div>

    </div>

  </form><br> <br><br>  <br>
<?php  }} mysqli_close($conn); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect('localhost','root','','carefull_db') or die('Error connecting to MySQL server.');
  $PName1=$_POST['PN'];
  $RE1=$_POST['RE'];
  $Usrs1=$_POST['usr1'];
  $Age1=$_POST['AGES'];
  $Dctr1=$_POST['Dctr'];
  $CL1=$_POST['CL'];
  $CT1=$_POST['CT'];
  $S1=$_POST['S'];
  $PDT1=$_POST['DT'];
  $PDT=explode(",", $PDT1);
  $order1 = "DELETE FROM  appointments WHERE Email='$EMAILS' AND City='$CT1'AND Name='$PName1' AND Symptoms='$S1' AND Age='$Age1' AND Dates='$PDT[1]' AND Prefered_Time='$PDT[0]' AND Username='$Usrs1';";
  $result = mysqli_query($conn, $order1);
  mysqli_close($conn);
  $mess1="See updated Appointment List!";

//  header("Refresh:0");
    // header("Location: /PHP College Medical website/Clg Project/User/Profile.php");
//    exit();
}
?>
<a href="" style="color: yellow;"><?php echo $mess1; ?></a> 
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