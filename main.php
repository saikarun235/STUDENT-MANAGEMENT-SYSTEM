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
<!--button onclick="About()" style="position:fixed;"></button-->

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
<!--div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/a.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/b.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/c.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div-->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds

function About() {
    window.scrollBy(0, 100);
}
}
</script>
<div class="container">
<img src="stuimg.jpg" alt="Students" width="100%">
<br>
<br>
<div class="alert alert-info" role="alert">
<h3 class="newtext"><u>Our Vision</u></h3>
<p class="okay">To be a premier academic institution striving continuously for excellence in technical education, research and technological service to the nation.</p>
<h3 class="newtext"><u>Our Mission</u></h3>
<p class="okay">-Create and sustain a community of learning in which students acquire knowledge and learn to apply it professionally with a concern for the society.
-Pursue and disseminate research findings and offer knowledge-based technological services to satisfy the needs of society and the industry.
-Promote professional ethics, leadership qualities and social responsibilities.</p>
<h3 class="newtext"><u>Quality Policy</u></h3>
<p class="okay">The management is committed in assuring quality service to all its stake holders viz parents, students, alumni, employees, employers and the community. Our commitment and dedication are built into our policy of continual quality improvement by establishing and implementing mechanisms and modalities ensuring accountability at all levels, transparency in procedures and access to information and actions.</p>
</div></div>
<div class="row">
<div class="col-md-3">
<h3 class="newtext alert alert-warning">CMRCET VIDEO TOUR</h3>
<div class="video">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZFxlw_jm_2Y?list=PLzdMaT0XKPlCocwMqpemjR2qolxJV6RUc"></iframe>
</div>
</div>

<div class="col-md-3"></div>
<div class="panel panel-warning col-md-6">
      <div class="okayyy panel-heading">Notifications</div>
      <div class="panel-body">
    <li class="okayy"> <a href=#>College Journal CMRJET Vol.1;Issue-2 </a></li>
     <li class="okayy"> <a href=#>CMRCET International Conference-SmartCEET-2017</a></li>
      <li class="okayy"><a href=#>TSRTC BUS PASS CIRCULAR </a></li>
      </div>
    </div>
    



















<div id="down">
		<div id="footerbg">
     			<div id="footerblank">
        			<div id="footer">
            				<div class="footer-col about" style="width:280px;float:left"> 
						<div class="footer-col-inner"> 
							<h3>Principal E-Mail</h3> 
									<i class="fa fa-phone" style="color:#FF9933"></i>+91-9248-7272-10</p> <p class="email" style="font-family:'Play',sans-serif;font-size:13px;color:#fff">
									<i class="fa fa-envelope" style="color:#FF9933"></i> <a href="#" style="font-family:'Play',sans-serif;font-size:13px;color:#fff">principal@cmrcet.org</a></p> 
								</ul> 
						</div> 
					</div> 
					<div class="footer-col contact" style="width:250px;float:left"> 
						<div class="footer-col-inner"> 
							<h3>Contact us</h3>
								 <div class="row"> 
									<p class="adr clearfix" style="font-family:'Play',sans-serif;font-size:13px;color:#fff"> 
										<i class="fa fa-map-marker pull-left"></i> 
										<span class="adr-group pull-left"> 
											<span class="street-address"><strong>CMRCET</strong></span><br> 
											<span class="region">Kandlakoya(v), Medchal Road.</span><br> 
											<span class="postal-code"> Hyderabad - 501401</span><br> 
											<span class="country-name"> Telangana, India</span> </span> 
									</p> 
									<p class="tel" style="font-family:'Play',sans-serif;font-size:13px;color:#fff">
										
									<p class="email" style="font-family:'Play',sans-serif;font-size:13px;color:#fff"><i class="fa fa-bus" style="color:#FF9933"></i> <a href="transport_facility.php" style="font-family:'Play',sans-serif;font-size:13px;color:#fff">Transport Facility</a></p> 
								</div> 
						</div> 
					</div> 
					<div class="footer-col newsletter" style="width:460px;float:left;margin-top:10px"> 
						<div class="footer-col-inner"> 
								<blockquote class="highlight-border"> 
									<p style="font-family:'Play',sans-serif;font-size:12px;color:#fff">I am pleased to present the Annual Report for the academic year 2016-2017. This has been an exciting year with many great accomplishments and achievements at CMR College of Engineering & Technology</p> <small style="color:#ccc;font-size:12px">Major. Dr. V. A. Narayana, B.Tech,M.Tech, Ph.D 
									<cite title="Source Title">Principal</cite></small> 
								</blockquote> 
								<p style="font-family:'Play',sans-serif;font-size:12px;color:#fff">Subscribe to get our CARPE ARTICULUM COLLEGE MAGAZINE delivered to your inbox</p> 
								<form class="subscribe-form"> 
									<div class="form-group"> 
										<input type="email" class="form-control" placeholder="Enter your email" style="width:250px;float:left;margin-right:10px"> 
											<button class="btn btn-theme btn-subscribe" type="submit" value="Subscribe"> Subscribe
											</button> 
									</div> 
								</form> 	
						</div> 
					</div>     
			       </div><!-- end of footer-->
       		 </div><!-- end of footerblank-->
        </div><!-- end of footerbg-->
	<div id="footerbottombg">
     		<div id="footerbottomblank">
        		<div id="footerbottom">
            			<div style="width:600px;float:left;padding-top:15px"> <small class="copyright" style="font-family:'Play',sans-serif;color:#FFFFFF">All Rights Reserved by 2017 CMR College OF Engineering & Technology | Powered By <a href="#" style="text-decoration:none"><span style="color:#f90;font-weight:bold">Department of CSE</span></a></small> </div> 
				<div style="width:160px;float:right;text-align:right"> 
					<ul style="display:inline;list-style:none;padding:4px;text-align:right"> <li style=""><a href="https://twitter.com" style="display:block;float:left;text-align:right"><i class="fa fa-twitter" style="padding-left:15px"></i></a></li> 
						<li><a href="https://facebook.com" style="display:block;float:left"><i class="fa fa-facebook" style="padding-left:10px"></i></a></li> <li><a href="https://youtube.com" style="display:block;float:left"><i class="fa fa-youtube" style="padding-left:10px"></i></a></li> <li><a href="https://in.linkedin.com/" target="_blank" style="display:block;float:left"><i class="fa fa-linkedin" style="padding-left:10px"></i></a></li> <li><a href="https://twitter.com" style="display:block;float:left;text-align:right"><i class="fa fa-twitter" style="padding-left:10px"></i></a></li> 
					</ul> 
				</div>
                	 </div>
        
     		</div>
	</div>
</div><!-- end of down-->


          
</body>
</html>




