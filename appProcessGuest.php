<html lang="en">

<head>
	<link rel="stylesheet" href="appProcess.css">
	<link rel="stylesheet" href="HeaderFooter.css">
   <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nature Primary School</title>

</head>
<body>
	<header>
		<div class="banner">
			<img class="banner" src="images/Banner2b.png" alt="banner">
		</div>

		<div class="wrapper">
			<div class="menu">
			<ul class="nav">
			 <li><a class="home" href="index.php">HOME</a></li>
			 <li><a class="home" href="aboutUsGuest.php">ABOUT US</a>
			 <li><a class="home" href="#">NEWS AND EVENTS</a>
				 <ul class="drop">
						 <li><a href="newsContentGuest.php">News</a></li>
						 <li><a href="eventsContentGuest.php">Events</a></li>
					</ul>
			 <li><a class="home" href="FacilitiesGuest.php">FACILITIES</a></li>
			 <li><a class="home" href="#">ADMISSION PROCESS</a>
					<ul class="drop">
					 <li><a href="feesInfoGuest.php" >Fees Information</a></li>
					 <li><a href="appProcessGuest.php" >Application Process</a></li>
					 <li><a href="appFormGuest.php" >Application Form</a></li>
					 <li><a href="ProgStructGuest.php" >Programme Structure</a></li>
					</ul>
				</li>
			 <li><a class="home" href="contactUsGuest.php">CONTACT US</a></li>
			 <li><a class="home" href="login.php">LOGIN</a></li>
		 </ul>
			</div>
		 </div>

	</header>


<h1> Application Process</h1> <br>
<br>
<div class="content" style="max-width:500px">
  <img class="mySlides" src="images/lab.jpg" alt="Lab" style="width:100%; height:50%">
  <img class="mySlides" src="images/play.jpg" alt="Play" style="width:100%; height:50%">
  <img class="mySlides" src="images/read.jpg" alt="Read" style="width:100%; height:50%">
  <img class="mySlides" src="images/park.jpg" alt="Park" style="width:100%; height:50%">
</div>
<br>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 2500); // Change image every 2 seconds
}
</script>
<p style = "line-height:1.5">Thank you for your interest in Garden International School. We accept student admissions throughout the year, subject to the School’s schedule.
We welcome children of all nationalities whose families are committed to an international educational curriculum in English.
NPS is committed to the principle of equal opportunity in education and looks to admit candidates who we believe will contribute to and benefit from the curriculum offered and that his/her admission will support the education of existing students.<br>
Below are the requirements to apply: </p>
<br>
<label><b> i. Registration</b></label>
<br>
<p style = "line-height:1.5">Kindly enclose the following documents:<br>
- <strong>ONE</strong> passport-sized photograph<br>
- <strong>ONE</strong> copy of your child's birth certificate and myKad / passport (non-Malaysian)<br>
- Copies of your child's most recent school report<br></p>
<br><br>
<label><b> ii. Payment</b></label>
<p>All applications will only be processed after payment of required of required fees has been made.<br>
All fees should be made payable to Nature Schools(2019) Sdn.Bhd.</p>
<br><br>
<label><b> iii. Entrance Examination & Interview</b></label><br>
<p>Entrance Examination is available on a weekly basis, every Tuesday and Thursday at 9.00 a.m.</p>
<h4><b> National Stream (Malaysian National Curriculum)</b></h4>
<p style = "line-height:1.5">Pre-Reception and Reception - English, Maths, Bahasa Malaysia<br>
Standard 1-6 - English, Maths, Bahasa Malaysia</p>
<br>
<label><b> iv. Offer Letter / Rejection Letter</b></label>
<p> Results will be closed within <strong>THREE</strong> working days to a week. We will notify parents in writing whether your child's application is successful or otherwise.</p>
<br>
<h4><b>Unsuccesful application:</b></h4>
<p style = "line-height:1.5">a) Rejection Letter<br>
b) Refund of Registration and Advance Fee which you have paid upon application.<br>
Please allow TWO weeks for the accounts department to prepare for the refund.</p><br>
<h4><b>Successful application: </b></h4>
<p style = "line-height:1.5">a) Offer Letter (Firm / Conditional offer)<br>
b) To make the balance payment before the due date as stated in the offer letter.<br>
c) You will have to create a username and password. All Nature parents and teachers have a VLE account.<br>
<br>
Once logged on, you will have access to the following:<br>
i. School announcements<br>
ii. Co-curriculur updates<br>
iii. Report card<br>
iv. Homework information<br>
v. Academic content delivery<br>
<br>
</p>

<a class="topButton" href="#top"><img class="topButton" src="images/top.png"  alt="Back to Top"></a>

<h3>
<a href="appFormGuest.php" >APPLY NOW</a>
</h3>

<footer>
	<p class="footer">Nature Primary School Kuala Lumpur, 16, Jalan Kiara 3, Off Jalan Bukit Kiara,
	<br>50480 Kuala Lumpur, Malaysia.
	<br>Email: <a href="mailto:natureprimaryschool@gmail.com">natureprimaryschool@gmail.com</a>
	</p>
</footer>

</body>
</html>
