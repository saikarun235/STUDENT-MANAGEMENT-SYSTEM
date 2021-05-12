
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Main Page</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:700|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:600i,700" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="main.css">
</head>
<body>

<div class="row row-even .background-color">
<div class="col-md-6">
<ul class="nav nav-pills navbar-left">
<li role="presentation" class="active"><a href="main.php">Home</a>
<li role="presentation" class="active"><a href="About.php">About</a>
<li role="presentation" class="active"><a href="Alumni">Alumni</a>
<li role="presentation" class="active"><a href="Events">Events</a>
<li role="presentation" class="active"><a href="Online Exams">Online Exams</a></li>
<li role="presentation" class="active"><a href="Contact Us">Contact Us</a></li></li></li></li></li></li></ul></div>
<div class="col-md-6">
<ul class="nav nav-pills navbar-right">
<li role="presentation" class="active"><a href="login.php">Login</a>
<li role="presentation" class="active"><a href="register.php">Registration</a></li></li></ul></div></div>
<div class="row">
<div class="col-md-6">
<img class="resize" src=cmr.png></div>
<div class="col-md-6">
<img src="logos.jpg"></div></div>

<h2 class="newtext">Registeration Form</h2>

<form method="post">
 

  
   <div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
    <label><b>Registration Number</b></label>
    <input type="text" placeholder="Enter Registration Number" name="U_ID" required>

    <label><b>Gender</b></label>
    <input type="radio" name="U_GENDER"  value="0" checked>Male
    <input type="radio" name="U_GENDER"  value="1">Female</br>

    <label><b>First Name</b></label>
    <input type="text" placeholder="First Name" placeholder="Enter First Name" name="U_FNAME" required>

    <label><b>Last Name</b></label>
    <input type="text" name="U_LNAME" placeholder="Enter Last Name" required>

    <label><b>Email Id</b></label>
    <input type="email" placeholder="Enter Email Id" name="U_EMAIL" required>

    <label><b>Mobile Number</b></label>
    <input type="number" placeholder="Enter Student Mobile Number" name="U_PHONE" required>

    <label><b>Additional Number</b></label>
    <input type="number" placeholder="Enter Additional Number" name="U_EXT_PHONE" required>

    <label><b>Date of Birth</b></label>
    <input type="date" placeholder="Enter Date of Birth" name="U_BIRTHDATE" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="Register">Register</button>
    </div>
</div>
</div>
</form>
<?php
try{
	session_start();
$con = new PDO("mysql:host=localhost;dbname=SMS","root","");

if(isset($_POST['Register']))
{
	$U_ID=$_POST['U_ID'];
	$U_GENDER=$_POST['U_GENDER'];
	$U_FNAME=$_POST['U_FNAME'];
	$U_LNAME=$_POST['U_LNAME'];
	$U_EMAIL=$_POST['U_EMAIL'];
	$U_PHONE=$_POST['U_PHONE'];
	$U_EXT_PHONE=$_POST['U_EXT_PHONE'];
	$U_BIRTHDATE=$_POST['U_BIRTHDATE'];
	$psw=$_POST['psw'];
	$insert=$con->prepare("INSERT INTO user (U_ID,U_GENDER,U_FNAME,U_LNAME,U_EMAIL,U_PHONE,U_EXT_PHONE,U_BIRTHDATE,psw)
	values(:U_ID,:U_GENDER,:U_FNAME,:U_LNAME,:U_EMAIL,:U_PHONE,:U_EXT_PHONE,:U_BIRTHDATE,:psw)");
	$insert->bindParam(':U_ID',$U_ID);
	$insert->bindParam(':U_GENDER',$U_GENDER);
	$insert->bindParam(':U_FNAME',$U_FNAME);
	$insert->bindParam(':U_LNAME',$U_LNAME);
	$insert->bindParam(':U_EMAIL',$U_EMAIL);
	$insert->bindParam(':U_PHONE',$U_PHONE);
	$insert->bindParam(':U_EXT_PHONE',$U_EXT_PHONE);
	$insert->bindParam(':U_BIRTHDATE',$U_BIRTHDATE);
	$insert->bindParam(':psw',$psw);
	$insert->execute();
}}
catch(PDOException $e)
{
echo "error".$e->getMessage();
}
?>
</body>
</html>

    
    


 
  
  

