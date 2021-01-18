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
		<title>Nature Primary School</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="stylesheet" href="facilities.css">
		<link rel="stylesheet" href="HeaderFooter.css">

		<style>
			/* Responsive layout - makes a two column-layout instead of three columns */
			@media screen and (max-width: 1000px) {
			  .column {
				flex: 50%;
				max-width: 50%;
			  }
			}

			/* Responsive layout - make the one column stack on top of each other instead of next to each other */
			@media screen and (max-width: 600px) {
			  .column {
				flex: 100%;
				max-width: 100%;
			  }
			}

			@media only screen and (max-width: 992px)
			{
				h1{
					font-size: 2em;
				}
			}

		</style>
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


		<h1>Facilities</h1>


			<div id="intro">

				<p>At Nature Primary School, we have a wide range of facilities available to enhance the learning
				experience for our students at school. Students can use basketball courts, tennis courts,
				a football field with running tracks, air-conditioned classrooms, well-equipped multimedia ICT laboratories
				with internet provision, science laboratories, a library with internet services, and canteen. The education
				scope in Nature Primary School, not only focusing on academics. Therefore, our school is also equipped with
				dance studios and music rooms for students who are interested in taking Art classes.</p>

			</div>

		<div class="container">
			<div class="row">
				<div class="column">
					<img src = "images/classroom.jpg" width="400" height="250" alt = "Classroom">
					<span>Classroom</span>
				</div>

				<div class="column">
					<img src = "images/artGallery.jpg" width="400" height="250" alt = "Art Gallery">
					<span>Art Gallery</span>
				</div>

				<div class="column">
					<img src = "images/library.jpg" width="400" height="250" alt = "Library">
					<span>Library</span>
				</div>
			</div>

			<div class="row">
				<div class="column">
					<img src = "images/computerLab.jpg" width="400" height="250" alt = "Computer Lab">
					<span>Computer Lab</span>
				</div>

				<div class="column">
					<img src = "images/scienceLab.jpg" width="400" height="250" alt = "Science Lab">
					<span>Science Lab</span>
				</div>

				<div class="column">
					<img src = "images/canteen.jpg" width="400" height="250" alt = "Canteen">
					<span>Canteen</span>
				</div>
			</div>

			<div class="row">
				<div class="column">
					<img src = "images/musicRoom.jpg" width="400" height="250" alt = "Music Room 1">
					<span>Music Room</span>
				</div>

				<div class="column">
					<img src = "images/musicRoom2.jpg" width="400" height="250" alt = "Music Room 2">
					<span>Music Room 2</span>
				</div>

				<div class="column">
					<img src = "images/danceStudio.jpg" width="400" height="250" alt = "Dance Studio">
					<span>Dance Studio</span>
				</div>
			</div>

			<div class="row">
				<div class="column">
					<img src = "images/basketballCourt.jpg" width="400" height="250" alt = "Basketball Court">
					<span>Basketball Court</span>
				</div>

				<div class="column">
					<img src = "images/tennisCourt.jpg" width="400" height="250" alt = "Tennis Court">
					<span>Tennis Court</span>
				</div>

				<div class="column">
					<img src = "images/swimmingPool.jpg" width="400" height="250" alt = "Swimming Pool">
					<span>Swimming Pool</span>
				</div>
			</div>

			<div class="row">
				<div class="column">
					<img src = "images/track.jpg" width="400" height="250" alt = "Running Track">
					<span>Running Track</span>
				</div>

				<div class="column">
					<img src = "images/playground.jpg" width="400" height="250" alt = "Playground">
					<span>Playground</span>
				</div>

				<div class="column">
					<img src = "images/wallClimbing.jpg" width="400" height="250" alt = "Wall Climbing">
					<span>Wall Climbing</span>
				</div>
			</div>
			<a class="topButton" href="#top"><img class="topButton" src="images/top.png" alt="Back to Top"></a>
			<br><br>
		</div>

		<footer>
	    <p class="footer">Nature Primary School Kuala Lumpur, 16, Jalan Kiara 3, Off Jalan Bukit Kiara,
	    <br/>50480 Kuala Lumpur, Malaysia.
	    <br/>Email: <a href="mailto:natureprimaryschool@gmail.com">natureprimaryschool@gmail.com</a>
	    </p>
	  </footer>


	</body>
</html>
