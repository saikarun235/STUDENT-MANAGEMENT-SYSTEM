<!DOCTYPE html>
<?php
try{
	session_start();
	$con = new PDO("mysql:host=localhost;dbname=SMS","root","");
	
if(isset($_POST['Submit']))
{

	$mton=$_POST['mton'];
	$bgrp=$_POST['bgrp'];
	$caste=$_POST['caste'];
	$spc=$_POST['spc'];
	$rel=$_POST['rel'];
	$ferem=$_POST['ferem'];
	$idmks=$_POST['idmks'];
	$idmks1=$_POST['idmks1'];
	$sacn=$_POST['sacn'];
	$pcn=$_POST['pcn'];
	$nob=$_POST['nob'];

	$insert=$con->prepare("INSERT INTO perpro (reg,mton,bgrp,caste,spc,rel,ferem,idmks,idmks1,sacn,pcn,nob)
	values(:reg,:mton,:bgrp,:caste,:spc,:rel,:ferem,:idmks,:idmks1,:sacn,:pcn,:nob)");
	
	$insert->bindParam(':reg',$_SESSION['reg']);
	$insert->bindParam(':mton',$mton);
	$insert->bindParam(':bgrp',$bgrp);
	$insert->bindParam(':caste',$caste);
	$insert->bindParam(':spc',$spc);
	$insert->bindParam(':rel',$rel);
	$insert->bindParam(':ferem',$ferem);
	$insert->bindParam(':idmks',$idmks);
	$insert->bindParam(':idmks1',$idmks1);
	$insert->bindParam(':sacn',$sacn);
	$insert->bindParam(':pcn',$pcn);
	$insert->bindParam(':nob',$nob);
	
	
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
<li role="presentation" class="active"><a href="contactus1.php">Contact Us</a></li></li></li></li></li></li></ul></div><div class="col-md-6">
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
<h2 class="newtext">Personal Profile</h2>

<form method="POST" enctype="multipart/form-data">

<label><b>Mother Tongue:</b></label>
 <input type="text" name="mton">

<label><b>Blood Group:</b></label>  
<input type="text" name="bgrp"><br>


<label><b>Caste:</b></label>
<input type="radio" name="caste" value="0" checked>OC
<input type="radio" name="caste" value="1">BC-A
<input type="radio" name="caste" value="2">BC-B
<input type="radio" name="caste" value="3">BC-C
<input type="radio" name="caste" value="4">BC-D
<input type="radio" name="caste" value="5">BC-E
<input type="radio" name="caste" value="6">EBC
<input type="radio" name="caste" value="7">SC
<input type="radio" name="caste" value="8">ST<br>

<label><b>Spl.Category:</b></label>
<input type="radio" name="spc" value="0" checked>PH
<input type="radio" name="spc" value="1">CAP
<input type="radio" name="spc" value="2">NCC
<input type="radio" name="spc" value="3">SPORTS
<input type="radio" name="spc" value="4">OTHERS
<input type="radio" name="spc" value="5">NIL<br>

<label><b>Religion:</b></label>
<input type="text" name="rel"><br>


<label><b>Eligibility for fee reimbursement:</b></label>
<input type="radio" name="ferem" value="0" checked>full
<input type="radio" name="ferem" value="1">partial
<input type="radio" name="ferem" value="2">NA<br>


<label><b>Identification marks:</b></label>
1.<input type="text" name="idmks"><br>
 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
2.<input type="text" name="idmks1"><br>
 
 
<label><b>Student Aadhar Card number:</b></label>
 <input type="text" name="sacn">
 
<label><b>Pan Card Number:</b></label> 
<input type="text" name="pcn"><br>

<label><b>Name of bank:</b></label> 
<input type="text" name="nob">
<br>

<label><b>Branch:</b></label> 
<input type="text"name="bnch">

<label><b>IFSC Code:</b></label>
<input type="text" name="ifsc"><br>

<form method="post">
<button type="submit" name="Submit">Submit</button>
</form>


</form></div></div></div>


</body></html>
