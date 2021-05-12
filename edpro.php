<!DOCTYPE html>
<?php
try{
	session_start();
	$con = new PDO("mysql:host=localhost;dbname=SMS","root","");
	
if(isset($_POST['Submit']))
{

	$htc=$_POST['htc'];
	$rnk=$_POST['rnk'];
	$mks=$_POST['mks'];
	$jmain=$_POST['jmain'];
	$brd=$_POST['brd'];
	$state=$_POST['state'];
	$yop=$_POST['yop'];
	$pcnt=$_POST['pcnt'];
	$gpa=$_POST['gpa'];
	$brd1=$_POST['brd1'];
	$state1=$_POST['state1'];
	$yop1=$_POST['yop1'];
	$pcnt1=$_POST['pcnt1'];
	$gpa1=$_POST['gpa1'];

	$insert=$con->prepare("INSERT INTO edpro (reg,htc,rnk,mks,jmain,brd,state,yop,pcnt,gpa,brd1,state1,yop1,pcnt1,gpa1)
	values(:reg,:htc,:rnk,:mks,:jmain,:brd,:state,:yop,:pcnt,:gpa,:brd1,:state1,:yop1,:pcnt1,:gpa1)");
	
	$insert->bindParam(':reg',$_SESSION['reg']);
	$insert->bindParam(':htc',$htc);
	$insert->bindParam(':rnk',$rnk);
	$insert->bindParam(':mks',$mks);
	$insert->bindParam(':jmain',$jmain);
	$insert->bindParam(':brd',$brd);
	$insert->bindParam(':state',$state);
	$insert->bindParam(':yop',$yop);
	$insert->bindParam(':pcnt',$pcnt);
	$insert->bindParam(':gpa',$gpa);
	$insert->bindParam(':brd1',$brd1);
	$insert->bindParam(':state1',$state1);
	$insert->bindParam(':yop1',$yop1);
	$insert->bindParam(':pcnt1',$pcnt1);
	$insert->bindParam(':gpa1',$gpa1);
	
	
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
<div class="col-md-7">
<h2 class="newtext">Education Profile</h2>

<form method="POST" enctype="multipart/form-data">

<label><b>EAMCET Hall ticket no:</label></b>
<input type="text" name="htc"> <br>

<label><b>Rank: </label></b>
<input type="text" name="rnk"> <br>

<label><b>Marks:</label></b>
<input type="text" name="mks"><br>

<label><b>JEE MAIN:</label></b> 
<input type="text" name="jmain"> <br>

<label><b>Details of 12th and 10th Qualification(start with highest qualification)</label></b> 
<table border="1">
<tr>
<th>BOARD/UNIVERSITY</th>
<th>STATE</th>
<th>YEAR OF PASSING</th>
<th>%OF MARKS</th>
<th>GPA/CGPA</th></tr>
<tr>

<td> <input type="text" name="brd">
</td>

<td> <input type="text" name="state">
</td>

<td> <input type="text" name="yop">
</td>

<td> <input type="text" name="pcnt">
</td>

<td> <input type="text" name="gpa">
</td>

</tr>

<tr>
<td> <input type="text" name="brd1">
</td>

<td> <input type="text" name="state1">
</td>

<td> <input type="text" name="yop1">
</td>

<td> <input type="text" name="pcnt1">
</td>

<td> <input type="text" name="gpa1">
</td>
</tr>
</table></br>

<form method="post">
<button type="submit" name="Submit">Submit</button>
</form>


</form></div></div></div>

</body></html>
























