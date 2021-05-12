<!DOCTYPE html>
<head>
<?php
session_start();
?>

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
<li role="presentation" class="active"><a href="about.php">About</a>
<li role="presentation" class="active"><a href="alumni.php">Alumni</a>
<li role="presentation" class="active"><a href="events.php">Events</a>
<li role="presentation" class="active"><a href="onlineexams.php">Online Exams</a></li>
<li role="presentation" class="active"><a href="contactus.php">Contact Us</a></li></li></li></li></li></li></ul></div>
<div class="col-md-6">
<ul class="nav nav-pills navbar-right">
<li role="presentation" class="active"><a href="login.php">Login</a>
<li role="presentation" class="active"><a href="register.php">Registration</a></li></li></ul></div></div>
<div class="row">
<div class="col-md-6">
<img class="resize" src=cmr.png></div>
<div class="col-md-6">
<img src="logos.jpg"></div></div>


<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h2 class="newtext">Login Form</h2>

<form method="post">
 

  
    <label><b>Registration Number</b></label>
    <input type="text" placeholder="Enter Registration Number" name="U_ID" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="Login">Login</button>
    <input type="checkbox" checked="checked"> Remember me

    </form></div></div>
  

  <div class="container" style="background-color:#f1f1f1">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="forgotpassword">Forgot password?</a>
  </div>
</form>
</div>
</div>
</div>
<?php
try{
	
$con = new PDO("mysql:host=localhost;dbname=SMS","root","");
if(isset($_POST['Login']))
{
	$U_ID=$_POST['U_ID'];
	$psw=$_POST['psw'];
	$select=$con->prepare("SELECT * FROM user WHERE U_ID='$U_ID' and psw='$psw'");
	$select->setFetchMode(PDO::FETCH_ASSOC);
	$select->execute();
	$data=$select->fetch();
	if($data['U_ID']!=$U_ID and $data['psw']!=$psw)
	{
	echo "Invalid Registration Id or Wrong Password";
	}
	elseif($data['U_ID']==$U_ID and $data['psw']==$psw)
	{
	$_SESSION['U_ID']=$data['U_ID'];
	$_SESSION['U_FNAME']=$data['U_FNAME'];
	header("location:profile.php");
	}
}
}
catch(PDOException $e)
{
echo "error".$e->getMessage();
}
?>





</body>
</html>