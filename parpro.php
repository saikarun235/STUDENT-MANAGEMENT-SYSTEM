<!DOCTYPE html>
<?php
try{
	session_start();
	$con = new PDO("mysql:host=localhost;dbname=SMS","root","");
	
if(isset($_POST['Submit']))
{

	$fname=$_POST['fname'];
	$bgrp=$_POST['mname'];
	$fnum=$_POST['fnum'];
	$fmail=$_POST['fmail'];
	$mnum=$_POST['mnum'];
	$mmail=$_POST['mmail'];
	$pocp=$_POST['pocp'];
	$ain=$_POST['ain'];
	$owd=$_POST['owd'];
	$ophn=$_POST['ophn'];
	

	$insert=$con->prepare("INSERT INTO parpro (reg,fname,mname,fnum,fmail,mnum,mmail,pocp,ain,owd,ophn)
	values(:reg,:fname,:mname,:fnum,:fmail,:mnum,:mmail,:pocp,:ain,:owd,:ophn)");
	
	$insert->bindParam(':reg',$_SESSION['reg']);
	$insert->bindParam(':fname',$fname);
	$insert->bindParam(':mname',$mname);
	$insert->bindParam(':fnum',$fnum);
	$insert->bindParam(':fmail',$fmail);
	$insert->bindParam(':mnum',$mnum);
	$insert->bindParam(':mmail',$mmail);
	$insert->bindParam(':pocp',$pocp);
	$insert->bindParam(':ain',$ain);
	$insert->bindParam(':owd',$owd);
	$insert->bindParam(':ophn',$ophn);
	
	$insert->execute();
	
}
}
catch(PDOException $e)
{
echo "error".$e->getMessage();
}
?>




	


<html lang="en">

	 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Main Page</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:700|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:600i,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Arbutus Slab' rel='stylesheet'>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="main.css">
</head>
<body>

<div class="row row-even .background-color">
<div class="col-md-6">
<ul class="nav nav-pills navbar-left">
<li role="presentation" class="active"><a href="main1.php">Home</a>
<li role="presentation" class="active"><a href="about1.php">About</a>
<li role="presentation" class="active"><a href="alumni1.php">Alumni</a>
<li role="presentation" class="active"><a href="events1.php">Events</a>
<li role="presentation" class="active"><a href="onlineexams1.php">Online Exams</a></li>
<li role="presentation" class="active"><a href="contactus1.php">Contact Us</a></li></li></li></li></li></li></ul></div>
<div class="col-md-6">
<ul class="nav nav-pills navbar-right">
     <li role="presentation" class="active"><a href="logout.php">LOGOUT</a>
     </li>
</ul></div></div>
<div class="row">
<div class="col-md-6">
<img class="resize" src=cmr.png></div>
<div class="col-md-6">
<img src="logos.jpg"></div></div>
<div id="leftmenu">
          <div id="leftmenu_top"></div>
          <div id="leftmenu_main">    
                        <h3></h3>
                        <ul class="nav nav-pills nav-stacked">
                   <li class="okayyy"><a href="profile.php">Profile</a></li>
                 <li class="okayyy"><a href="achievements.php">Achievements</a></li>
                   <li class="okayyy"><a href="e-learning.php">E-Learning</a></li>
                           <li class="okayyy"><a href="marks.php">Marks</a></li>
                                       <li class="okayyy"><a href="feedback.php">Feedback</a></li>
					                           </ul>
    </div>               
                <div id="leftmenu_bottom"></div>
  </div> 



  
  <div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-6">
<h2 class="newtext">Parent Profile</h2>

<form method="POST" enctype="multipart/form-data">

<label><b>Father's name:</b></label>&nbsp;
<input type="text" name="fname"><br>

<label><b>Mother's name:</b></label>
 <input type="text" name="mname"><br>
 
<label><b>Father/Guardian mobile number:</b></label>
 <input type="number" name="fnum">  
 
<label><b>Email.ID:</b></label>
<input type="text" name="fmail"><br>

<label><b>Mother mobile number:</b></label>
 <input type="number" name="mnum"> 
 
<label><b>Email.ID:</b></label>
<input type="text" name="mmail"><br>

<label><b>Parents Occupation:</b></label>
<input type="text" name="pocp">

<label><b>Annual Income:</b></label>
 <input type="text" name="ain"><br>
 
<label><b>Organization with address:</b></label>
<input type="text" name="owd">

<label><b>Office phone: </b></label>
<input type="text" name="ophn"><br>


<form method="post">
<button type="submit" name="Submit">Submit</button>
</form>
</form></div></div></div>


</body></html>













