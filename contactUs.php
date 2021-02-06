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
	include 'connection.php';

	if (isset($_POST['button'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		if(empty($name) || empty($email) || empty($message)){
			echo '<script type="text/javascript">';
			echo ' alert("Please Enter all field before submitting!!")';
			echo '</script>';

		}
		else{
			$sql="INSERT INTO contactUs(Name, Email, Message) VALUES ('$_POST[name]','$_POST[email]','$_POST[message]')";
			mysqli_query($con,$sql);
			echo '<script type="text/javascript">';
			echo ' alert("Thank You. We will get back to you ASAP")';
			echo '</script>';
		}

	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Nature Primary School</title>
	<link rel="stylesheet" href="contact_us.css" />
	<link rel="stylesheet" href="HeaderFooter.css">


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

	<div class="container">
		<div class="info">
			<h1> School Details</h1>
			<p>Address:</p>
			<p>Nature Primary School Kuala Lumpur, 16, Jalan Kiara 3, Off Jalan Bukit Kiara,</p>
			<p>50480 Kuala Lumpur,</p>
			<p>Malaysia.</p><br>
			<p>Phone: 03-8318 8211</p><br>
			<p>Fax Number: +60 03-8318 8211</p><br>
			<p>Email: <a href="mailto:natureprimaryschool@gmail.com">natureprimaryschool@gmail.com</a></p>
		</div>
		<div class="form">
			<h1>Contact Us</h1>
			<form action="contactUs.php" method="post" id="contactUs-form" onsubmit="required()">
				<label>Name:  </label>
				<input type="text" name="name" placeholder="Enter your name"/><br>
				<label>Email:  </label>
				<input type="text" name="email" placeholder="Enter your Email Address"/><br>
				<label>Message:  </label>
				<textarea placeholder="Your Message" name="message" form="contactUs-form"></textarea><br>
				<input type="submit" name='button' value='Submit Message' onclick="return confirm('Are you sure to submit?')">
			</form>
		</div>
	</div>


	<a class="topButton" href="#top"><img class="topButton" src="images/top.png"  alt="Back to Top"></a>
	<br><br><br>


	<footer>
		<p class="footer">Nature Primary School Kuala Lumpur, 16, Jalan Kiara 3, Off Jalan Bukit Kiara,
		<br>50480 Kuala Lumpur, Malaysia.
		<br>Email: <a href="mailto:natureprimaryschool@gmail.com">natureprimaryschool@gmail.com</a>
		</p>
	</footer>


</body>

</html>
