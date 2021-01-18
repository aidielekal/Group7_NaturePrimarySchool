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

<?php

include 'includes/event-config.php';
include 'includes/eventDatabase.php';

$events=displayEvent();

?>

<html lang="en">
 <head>
	<meta charset="utf-8">
	<title>Nature Primary School</title>
	<link rel="stylesheet" href="eventsContentNormal.css">
	<link rel="stylesheet" href="HeaderFooter.css">
 </head>

<body>
<header>
	<div class="banner">
		<img class="banner" src="images/Banner2b.png" alt="Banner image">
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


	<div id="title">
		<h1>EVENTS</h1>
	</div>
	<div class="container">
		<div class="section">
		<table>
            <tr>
				<th><h2>Title</h2></th>
				<th><h2>Description</h2></th>
				<th><h2>Location</h2></th>
				<th><h2>Date</h2></th>
            </tr>
			<?php
				foreach($events as $eve){
					echo '<tr>';
						echo '<td>'.$eve[1]. '</td>';
						echo '<td>'.$eve[2]. '</td>';
						echo '<td>'.$eve[3]. '</td>';
						echo '<td>'.$eve[4]. '</td>';
					echo '</tr>';
				}
			 ?>
           </table>
		</div>
	</div>
	<a class="topButton" href="#top"><img class="topButton" src="images/top.png"  alt="Back to Top"></a>
	<br><br>
<footer>
	<p class="footer">Nature Primary School Kuala Lumpur, 16, Jalan Kiara 3, Off Jalan Bukit Kiara,
	<br>50480 Kuala Lumpur, Malaysia.
	<br>Email: <a href="mailto:natureprimaryschool@gmail.com">natureprimaryschool@gmail.com</a>
	</p>
</footer>
 </body>
</html>
