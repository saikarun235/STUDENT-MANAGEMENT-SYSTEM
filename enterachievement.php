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

  <form>
<table id="POITable" align="center" border="1" width="60%" height="50%" >
&nbsp;&nbsp;&nbsp;&nbsp;<h2><font face="Algerian" size="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Achievements</u></font></h2>
<div style="text-align: center; padding-right: 20px" >
<tr>
<td><b>Serial Number<b></td>
<td><b>Event Name</b></td>
<td><b>Achievement</b></td>
<td><b>Award</b></td>
<td><b>Evidence</b></td>
</tr>
<tr>
<td>1</td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><form action="upload.php" method="post" enctype="multipart/form-data">
    <b>Select image to upload:</b>
    <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit"></td>

</form>
</table>
<script>
function insRow()
{
    var x=document.getElementById('POITable');
       // deep clone the targeted row
    var new_row = x.rows[1].cloneNode(true);
       // get the total number of rows
    var len = x.rows.length;
       // set the innerHTML of the first row 
    new_row.cells[0].innerHTML = len;

       // grab the input from the first cell and update its ID and value
    var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
    inp1.id += len;
    inp1.value = '';

       // grab the input from the first cell and update its ID and value
    var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
    inp2.id += len;
    inp2.value = '';

       // append the new row to the table
    x.appendChild( new_row );
}
</script>
<table align="center" border="0" height="5" width="5">
<tr><td><input type="button" id="addmorePOIbutton" value="Insert New Achievement" onclick="insRow()"/></td></tr>
<form action="xyz.html">
<tr><td><input type="submit" name="Submit" value="Submit"></td></tr></form>

</body></html>
       

