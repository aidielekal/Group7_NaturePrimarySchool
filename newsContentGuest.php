<?php

include 'includes/news-config.php';
include 'includes/newsDatabase.php';

$news=displayNews();

?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Nature Primary School</title>
	<link rel="stylesheet" href="newsContentNormal.css" />
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
	
	<div id="title">
		<h1>NEWS</h1>
	</div>
	<div class="container">
		<div class="section">
		<table>
            <tr>
				<th><h2>Title</h2></th>
				<th><h2>Description</h2></th>
				<th><h2>Date</h2></th>
            </tr>
			<?php
				foreach($news as $n){
					echo '<tr>';
						echo '<td>'.$n[1]. '</td>';
						echo '<td>'.$n[2]. '</td>';
						echo '<td>'.$n[3]. '</td>';
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
