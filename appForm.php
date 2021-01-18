<?php

session_start();

if(isset($_SESSION['Status']))
{
	if($_SESSION['Status'] != 'student') //in admin file
	{
		header('Location: homepageTeacher.php'); //user
	}
}
else
{
	header('Location: login.php');
}

?>

<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="appForm.css">
	<link rel="stylesheet" href="HeaderFooter.css">
   <meta charset="utf-8">
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
			 <li><a class="home" href="homepage2.php">HOME</a></li>
			 <li><a class="home" href="aboutUs.php">ABOUT US</a>
			 <li><a class="home" href="#">NEWS AND EVENTS</a>
				 <ul class="drop">
						 <li><a href="newsContentNormal.php">News</a></li>
						 <li><a href="eventsContentNormal.php">Events</a></li>
					</ul>
			 <li><a class="home" href="Facilities.php">FACILITIES</a></li>
			 <li><a class="home" href="#">ADMISSION PROCESS</a>
					<ul class="drop">
					 <li><a href="feesInfo.php" >Fees Information</a></li>
					 <li><a href="appProcess.php" >Application Process</a></li>
					 <li><a href="appForm.php" >Application Form</a></li>
					 <li><a href="ProgStruct.php" >Programme Structure</a></li>
					</ul>
				</li>
			 <li><a class="home" href="contactUs.php">CONTACT US</a></li>
			 <li><a href="results.php">STUDENT RESULTS</a></li>
			 <li><a class="home" href="logout.php" onclick="return confirm('Are you sure to LOG OUT?')">LOGOUT</a></li>
		 </ul>
			</div>
		 </div>

	</header>


<h1>Application / Registration Form </h1>
<p style = "line-height:1.5">At NPS, we bring out the best in everyone, both inside and outside of the classroom through our unique learning culture where we pursue our passions and strive for excellence; all in the spirit of respect, integrity and well-being.
Join us today to start your learning journey with NPS.</p>
<p style = "line-height:1.5">Please <b>click</b> on the image below to view the Application/ Registration Form<br>
Email it to us at <u>natureprimaryschool@gmail</u> </p>
<a href="Nature Registration Form.pdf" target="_blank">
  <img src="images/regForm.png" alt="Registration Form" width="170" height="240" class="center">
</a>

<a class="topButton" href="#top"><img class="topButton" src="images/top.png" alt="Back to Top"></a>
<br><br><br>


<footer>
	<p class="footer">Nature Primary School Kuala Lumpur, 16, Jalan Kiara 3, Off Jalan Bukit Kiara,
	<br>50480 Kuala Lumpur, Malaysia.
	<br>Email: <a href="mailto:natureprimaryschool@gmail.com">natureprimaryschool@gmail.com</a>
	</p>
</footer>


</body>
</html>
