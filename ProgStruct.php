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
	<link rel="stylesheet" href="ProgStruct.css">
	<link rel="stylesheet" href="HeaderFooter.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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


<h1> Programme Structure</h1>
<br>
<table class = "center">
<tr>
	<th>Lower Basic Education Curriculum</th>
	<th>Middle Basic Education Curriculum</th>
</tr>
<tr>
	<th> STANDARD 1 - 3 </th>
	<th> STANDARD 4 - 6 </th>
</tr>
<tr>
	<td><b>Core Compulsory Subjects</b><br>
	<br>1. English Studies<br>
	2. One Major Foreign Language<br>
	3. Mathematics<br>
	4. Basic Science and Technology<br>
	5. Social Studies<br>
	6. Civic Education<br>
	7. Cultural and Creative Arts (CCA)<br>
	8. Islamic Studies/Moral Studies<br>
	9. Physical and Health Education (PHE) <br>
	10. Geography
	</td>
	<td><b>Core Compulsory Subjects</b><br>
	<br>1. English Studies<br>
	2. One Major Foreign Language<br>
	3. Mathematics<br>
	4. Basic Science and Technology<br>
	5. Social Studies<br>
	6. Civic Education<br>
	7. Cultural and Creative Arts (CCA)<br>
	8. Islamic Studies/Moral Studies<br>
	9. Physical and Health Education (PHE) <br>
	10. Computer Studies / ICT
	11. Geography<br>
	12. History of the World<br>
	</td>
</tr>
<tr>
	<td><b>Elective Subjects</b><br>
	<br>1. Home Economy<br>
	2. Visual Arts (Music, Dance, Drama)<br>
	3. Environmental Study
	</td>
	<td><b>Elective Subjects</b><br>
	<br>1. Home Economy<br>
	2. Visual Arts (Music, Dance, Drama)<br>
	3. Second Foreign Language<br>
	4. Environmental Study<br>
	5. Literature <br>
	</td>
</tr>
<tr>
<td>
<b>Note: </b><br>
Choose not more than 2 electives.
</td>
<td>
<b>Note: </b><br>
Choose not more than 2 electives.</td>
</tr>
</table>

<a class="topButton" href="#top"><img class="topButton" src="images/top.png"  alt="Back to Top"></a>
<br>
<br>
<br>

<footer>
	<p class="footer">Nature Primary School Kuala Lumpur, 16, Jalan Kiara 3, Off Jalan Bukit Kiara,
	<br>50480 Kuala Lumpur, Malaysia.
	<br>Email: <a href="mailto:natureprimaryschool@gmail.com">natureprimaryschool@gmail.com</a>
	</p>
</footer>

</body>
</html>
