<?php
session_start();
?>
<?php
 if (($_SESSION['loggedin'])==false){
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

</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>
    Book Appointment
  </title>
</head>
<body>
<?php

$EMAILS=$_SESSION['Mail'];
$conn = mysqli_connect('localhost','root','','carefull_db') or die('Error connecting to MySQL server.');
$order = "SELECT * FROM user WHERE Email='$EMAILS'";
$result = mysqli_query($conn, $order);
while ($row = mysqli_fetch_array($result)){
  $usr=$row['Username'];
  $Mails=$row['Email'];
}
mysqli_close($conn);
$NameErr="";
$FilesErr="";
$SympErr="";
$Names="";
$CityName="";
$ClinicPlace="";
$DoctorName="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$AgeErr="";
$CityName=test_input($_POST['city']);
$ClinicPlace=test_input($_POST['Clinic']);
$DoctorName=test_input($_POST['Doctors']);
$Dates_Req=test_input($_POST['dov']);
$Time_Req=test_input($_POST['PT']);

  if (empty($_POST["fname"])) {
    $NameErr = "Name is required for registering you as a Patient";
  } 
  else
  {
    $Names=test_input($_POST["fname"]);
  }

  if (empty($_POST["fname"])) {
    $SympErr = "Symptoms are required for diagnosis of diseases";
  }
  else
  {
    $Symps=test_input($_POST['Symptoms']);
  }

  if (empty($_POST["age"])) {
    $AgeErr = "Age is required";
  } 
  else
  {
    $Ages=test_input($_POST["age"]);
  }

  $uploadOk = 1;
  $Done=0;
  $target_paths="C:/xampp/htdocs/PHP College Medical Website/Database for images/";
  $FI="";
 if(file_exists($_FILES['File1']['tmp_name']) || is_uploaded_file($_FILES['File1']['tmp_name'])) {
    $file_type=$_FILES['File1']['type'];
    if ($file_type=="application/pdf" || $file_type=="image/png" || $file_type=="image/jpg" || $file_type=="image/jpeg"){
    $target_path = $target_paths.basename( $_FILES['File1']['name']);
    $FI=$_FILES['File1']['name'];
    $uploadOk = 1;

    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["File1"]["tmp_name"]);
      if($check !== false) {
        $uploadOk = 1;
        $Done=1;
      } else {
        $FilesErr3="The uploaded file should be an image.";
        $uploadOk = 0;
      }
    }
    if(!move_uploaded_file($_FILES['File1']['tmp_name'], $target_path)) {
        $FilesErr = "Sorry, file not uploaded, please try again!";
      }
    }
   else{
    $FilesErr = "Sorry, Only .pdf, .jpg and .png Files Accepted!";
  }
  }
  $EM=$_POST['Emailid'];
  $usr1=$_POST['Usernames'];

  if($FilesErr == "" and $NameErr=="" and $SympErr=="" and $AgeErr==""){
    $EMAILS=$_SESSION['Mail'];
    $db = mysqli_connect('localhost','root','','carefull_db') or die('Error connecting to MySQL server.');
    $order1 = "INSERT INTO appointments (Name, Age, City, Clinic, Doctor, Dates, Prefered_Time, Symptoms, Files, Email, Username, Approved) VALUES('$Names','$Ages','$CityName','$ClinicPlace','$DoctorName','$Dates_Req','$Time_Req','$Symps','$FI','$EM','$usr1',0)";
    $result = mysqli_query($db, $order1);
    header("Location: http://localhost/PHP%20College%20Medical%20website/Clg Project/User/Display_Form_Submitted.php");
  }
}
?>
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
        <a class="nav-link" href=""> New Appointment </a>
      </li>

    </ul>
    <div class="form-inline my-2 my-lg-0">
      <a href="Logout.php">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
    </a>
    </div>
  </div>
</nav>
<center>
  <br>
  <h2>Book Your Appointment Now!</h2>
<div class="container">
<form enctype="multipart/form-data" style="padding-top: 3vw;max-width: 600px;" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
  <fieldset style="background: rgba(0,0,0,0.5);padding: 2vw;border-radius: 1vw;" class="form-group">
  <center>
<label><b>Name</b></label><br>
<input type="text" placeholder="Patient Full Name" name="fname" required><span class="error" style="color:red;"><?php echo $NameErr;?></span><br>

<label><b>Age</b></label><br>
<input type="number" placeholder="Patient Age" name="age" required min='1' rows="25"><span class="error" style="color:red;"><?php echo $NameErr;?></span><br><br>

<label><b>Email</b></label><br>
<input type="text" readonly id="Email" name="Emailid" rows="25" style="color: black;" value="<?php echo $Mails ?>"><br>

<label><b>Username</b></label><br>
<input type="text" readonly id="Usernames" name="Usernames"  rows="25" style="color: black;" value="<?php echo $usr ?>"><br>

<label style="font-size:20px" >City</label><br>
<div class="form-group col-md-8">
<select name="city" id="city-list" class="demoInputBox;" style="width:100%;height:35px;border-radius:9px" required="required">
<option value="" disabled="disabled" selected="selected">Select City</option>
<option value="Mumbai">Mumbai</option>
<option value="Delhi">Delhi</option>
<option value="Chennai">Chennai</option>
<option value="Banglore">Banglore</option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="Jaipur">Jaipur</option>
</select></div><br>

<label style="font-size:20px" >Clinic</label><br>
<div class="form-group col-md-8">
<select id="clinic-list" name="Clinic" ; style="width:100%;height:35px;border-radius:9px" required="required">
<option value="" disabled="disabled" selected="selected">Select the Clinic</option>
<option value="A">Clinic A</option>
<option value="B">Clinic B</option>
<option value="C">Clinic C</option>
<option value="D">Clinic D</option>
<option value="E">Clinic E</option>
</select></div><br>

<label style= "font-size:20px" for="Doctors">Doctor</label><br>
<div class="form-group col-md-8">
<select id="Doctors" name="Doctors"; style="width:100%;height:35px;border-radius:9px" required="required">
<option value="" disabled="disabled" selected="selected">Select Doctor</option>
<option value="A">Doctor A</option>
<option value="B">Doctor B</option>
<option value="C">Doctor C</option>
<option value="D">Doctor D</option>
<option value="E">Doctor E</option>
</select></div><br>

<label><b>Date of Visit</b></label><br>
<input type="date" name="dov" ; min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',strtotime('+14 day'));?>" required><br>
<div id="datestatus"></div>

<label style= "font-size:20px" for="PT">Preferred Time</label><br>
<div class="form-group col-md-5">
<select id="PT" name="PT"; style="width:100%;height:35px;border-radius:9px" required="required">
<option value="" disabled="disabled" selected="selected">Preferred Time: </option>
<option value="10:00-11:00">10:00-11:00 (Morning)</option>
<option value="11:00-12:00">11:00-12:00 (Morning)</option>
<option value="17:00-18:00">17:00-18:00 (Evening)</option>
<option value="18:00-19:00">18:00-19:00 (Evening)</option>
<option value="19:00-20:00">19:00-20:00 (Evening)</option>
</select><br></div>
<br>
<div class="md-form">
  <label for="Symptoms">Symptoms and history</label>
  <textarea id="Symptoms" name="Symptoms" class="md-textarea form-control" required="required" rows="4" placeholder="Symptoms recorded. Please specify if patient has life-long diseases (Eg: Cancer/Diabetes/Blood Pressure)"></textarea>
  <br><span class="error" style="color:red;"><?php echo $SympErr;?></span>
</div>

<br><br>
<div class="col-sm-6">
  <div class="form-group">
    <input type="file" class="form-control-file" name="File1" id="File1" style="color: yellow;">
    <small><label for="File1">Any Photo or PDF of any documents regarding your Disease or illness</label></small>
    <span class="error" style="color:red;"><?php echo $FilesErr;?></span>
  </div>
</div>

<br>
<button type="submit" style="position:center" class="btn btn-outline-success btn-md" name="submit" value="Submit">Submit</button>
</div>
</form>
</div>
</center>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>