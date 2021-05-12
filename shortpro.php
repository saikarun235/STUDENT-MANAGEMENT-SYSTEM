<!DOCTYPE html>
<?php
try{
	session_start();
  $con = new PDO("mysql:host=localhost;dbname=SMS","root","");
if(isset($_POST['Submit']))
{
    $reg=$_POST['reg'];
  $aname=$_POST['aname'];
  $dob=$_POST['dob'];
  $snum=$_POST['snum'];
  $smail=$_POST['smail'];
  $gender=$_POST['gender'];
  $addr=$_POST['addr'];
  $addr1=$_POST['addr1'];
  $btech=$_POST['btech'];
    $doa=$_POST['doa'];
	
	$filetemp=$_FILES['pic']['tmp_name'];
	$filename=$_FILES['pic']['name'];
	$filetype=$_FILES['pic']['type'];
	$filepath='..\\pics\\'.$filename;
	
	move_uploaded_file($filetemp,$filepath);
	
		
			
		
	
 
  $insert=$con->prepare("INSERT INTO main (reg,aname,dob,pic,snum,smail,gender,addr,addr1,btech,doa) 
  values(:reg,:aname,:dob,:pic,:snum,:smail,:gender,:addr,:addr1,:btech,:doa)");
  $insert->bindParam(':reg',$reg);
  $insert->bindParam(':aname',$aname);
  $insert->bindParam(':dob',$dob);
  $insert->bindParam(':pic',$filepath);
  $insert->bindParam(':snum',$snum);
  $insert->bindParam(':smail',$smail);
  $insert->bindParam(':gender',$gender);
  $insert->bindParam(':addr',$addr);
  $insert->bindParam(':addr1',$addr1);
  $insert->bindParam(':btech',$btech);
  $insert->bindParam(':doa',$doa);
  
$insert->execute();
$select=$con->prepare("SELECT * FROM main WHERE reg='$reg'");
$select->setFetchMode(PDO::FETCH_ASSOC);
	$select->execute();
	$data=$select->fetch();
	$_SESSION['reg']=$data['reg'];
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
<h2 class="newtext">Short Profile</h2>


<form method="POST" enctype="multipart/form-data">
  <label><b>Registration Number</b></label>
   <input type="text" placeholder="Enter Registration Number" name="reg" required></br>
   
   <label><b>Profile Picture</b></label>
   <input type="file" name="pic" /><br>

   <label><b>Student Name</b></label>
   <input type="text" placeholder="Enter Student Name" name="aname" required></br>

    <label><b>Date of Birth</b></label>
   <input type="date" placeholder="Enter Date of Birth" name="dob" required></br>

    <label><b>Student Mobile Number</b></label>
   <input type="text" placeholder="Enter Mobile Number" name="snum" required></br>

    <label><b>Email ID</b></label>
   <input type="email" placeholder="Enter Email ID" name="smail" required></br>

   <label><b>Gender</b></label>
   <input type="radio" name="gender" value="0" checked>Male
  <input type="radio" name="gender" value="1">Female<br>

    <label><b>Present Address</b></label>
   <input type="text" placeholder="Enter Present Address" name="addr" required></br>

   <label><b>Permanent Address</b></label>
   <input type="text" placeholder="Enter Permanent Address" name="addr1" required></br>


 <label><b>Branch</b></label>
<input type="radio" name="btech" value="0" checked>Civil
<input type="radio" name="btech" value="1">CSE
<input type="radio" name="btech" value="2">Mechanical
<input type="radio" name="btech" value="3">EEE
<input type="radio" name="btech" value="4">ECE</br>



 <label><b>Date of Admission</b></label>
   <input type="date" placeholder="Enter Date of Admission" name="doa" required></br>

    <label><b>Admission Through:</b></label>
<input type="radio" name="abc" value="1" checked>EAMCET
<input type="radio" name="abc" value="2">ECET
<input type="radio" name="abc" value="3">PGECET
<input type="radio" name="abc" value="4">ICET
<input type="radio" name="abc" value="5">GATE<br>

<label><b>Type of Admission:</b></label>
<input type="radio" name="adm" checked>Regular
<input type="radio" name="adm">Lateral Entry
<input type="radio" name="adm">Transfer
<input type="radio" name="adm">Re-admitted<br>

<form method="post">
<button type="submit" name="Submit">Submit</button>
</form>


</form></div></div></div>


</body></html>



