<?php
session_start();
?>
<?php
 if (($_SESSION['loggedin'])==false){
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
      $EMAILS=$_SESSION['Mail'];
      $conn = mysqli_connect('localhost','root','','carefull_db') or die('Error connecting to MySQL server.');
      $order = "SELECT * FROM user WHERE Email='$EMAILS'";
      $result = mysqli_query($conn, $order);
      while ($row = mysqli_fetch_array($result)){
        $usr=$row['Username'];
        $FN=$row['First_Name'];
        $LN=$row['Last_Name'];
        $Gndr=$row['Gender'];
        $Mails=$row['Email'];
        $age=$row['Age'];
        $pass1=$row['Password'];
      }
?>
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
    <div class="col-xl-12"> <i><u><strong>PERSONAL INFORMATION</strong></u></i><br>
      <div class="form-row">
      <div class="form-group col-md-6 mb-0">
        <label for="FName" class="col-xl-6 col-form-label"  style="color:#FFF700;">First Name:</label>
        <input type="text" readonly class="form-control-plaintext" id="FName" style="color: white" value=<?php echo $FN ?>>
      </div>
      <div class="form-group col-md-6 mb-0">
        <label for="LName" class="col-xl-6 col-form-label" style="color:#FFF700;">Last Name:</label>
        <input type="text" readonly class="form-control-plaintext" id="LName" style="color: white" value=<?php echo $LN ?>>
      </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-6 mb-0">
        <label for="gndr" class="col-xl-6 col-form-label"  style="color:#FFF700;">Gender:</label>
        <input type="text" readonly class="form-control-plaintext" id="gndr" style="color: white" value=<?php echo $Gndr ?>>
      </div>
      <div class="form-group col-md-6 mb-0">
        <label for="usrnm" class="col-xl-6 col-form-label" style="color:#FFF700;">Age:</label>
        <input type="text" readonly class="form-control-plaintext" id="usrnm" style="color: white" value=<?php echo $age ?>>
      </div>
      </div>
      <div class="col-xl-12 col-form-label">
        <label for="Email" class="col-xl-6 col-form-label" style="color:#FFF700;">Email:</label>
        <input type="text" readonly class="form-control-plaintext" id="Email"  rows="25" style="color: white" value=<?php echo $Mails ?>>
      </div>
    </div>
   </div>
<?php
$mess1="";
$PasswErr="";
$OldPasswErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  
  if (empty($_POST["live1"])) {
    $OldPasswErr = "Old Password is required for verifying you";
  }
  else
  {
    $Old=test_input($_POST["live1"]);
  }
  
  if (empty($_POST["live2"]) || empty($_POST["live3"])) {
    $PasswErr = "Enter Password 2 times";
  }
  else
  {
    if($pass1==$Old){
    $passwords1=test_input($_POST["live2"]);
    $passwords2=test_input($_POST["live3"]);
    $uppercase = preg_match('@[A-Z]@', $passwords1);
    $lowercase = preg_match('@[a-z]@', $passwords1);
    $number    = preg_match('@[0-9]@', $passwords1);
    $specialChars = preg_match('@[^\w]@', $passwords1);
    $lengths = strlen($passwords1) >= 8;
    if((!$uppercase or !$lowercase or !$number or !$specialChars or !$lengths) && $passwords1!=$passwords2){
      $PasswErr = "Password don't match the correct format or are not the same!";
    }
    else{
      $order2 = "UPDATE user SET Password = '$passwords1'  WHERE Email='$EMAILS'";
      $result2 = mysqli_query($conn,$order2);
      $mess1="Password Updated!";
      }
    }
    else{
      $OldPasswErr="Enter correct Password!";
    }

    }
}
?>


   <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#myModal"> Change Password </button>
    <?php echo $mess1; ?> 
   <div class="modal fade" id="myModal" role="dialog" style="background-color: rgba(0,0,0,0.9);">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content"  style="background-color: rgba(0,0,0,0.7);">
        <div class="modal-header">
          <h4 class="modal-title"><strong>Change Password</strong></h4>
          <button type="button" class="close" data-dismiss="modal" style="color: cyan">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
          <form class="form-container" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
              <label for="live1"><b>Old Password</b></label>
              <input type="Password" placeholder="Old Password" style="color: black;" name="live1" required><br><span class="error" style="color:red;"><?php echo $OldPasswErr;?><br>

              <label for="live2"><b>New Password</b></label>
              <input type="Password" placeholder="New Password" style="color: black;" name="live2" required><br><span class="error" style="color:red;"><?php echo $PasswErr;?><br>

               <label for="live3"><b>Confirm Password</b></label>
               <input type="Password" placeholder="Confirm New Password" style="color: black;" name="live3" required>
             <BR><BR>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  </div>
  </form>
  </div>
  </div>
  </center>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>