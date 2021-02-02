<?php

session_start();

if(isset($_SESSION['Status']))
{
	if($_SESSION['Status'] != 'teacher') //in admin file
	{
		header('Location: homepage2.php'); //user
	}
}
else
{
	header('Location: login.php');
}

?>

<html style = "background: url(images/background.jpeg) no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;">

<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head lang="en">
	<link rel="stylesheet" href="appForm.css">
	<link rel="stylesheet" href="HeaderFooter.css">
   <meta charset="utf-8">
   <title>Nature Primary School</title>

</head>
<body>
	<header>
		<div class="banner">
			<img class="banner" src="images/Banner2b.png" alt="Banner image">
		</div>

		<div class="wrapper">
			<div class="menu">
			<ul class="nav">
			 <li><a class="home" href="homepageTeacher.php">HOME</a></li>
			 <li><a class="home" href="#">NEWS AND EVENTS</a>
				 <ul class="drop">
						 <li><a href="newsContentTeacher.php">Manage News</a></li>
						 <li><a href="eventsContentTeacher.php">Manage Events</a></li>
					</ul>
			 <li><a class="home" href="#">STUDENT RESULTS</a>
				 <ul class="drop">
						 <li><a href="editMarks.php">Manage Student Result</a></li>
					</ul>
			 <li><a class="home" href="logout.php" onclick="return confirm('Are you sure to LOG OUT?')">LOGOUT</a></li>
		 </ul>
			</div>
		 </div>
	</header>


	<center>
		<h1> Student Results </h1><br/>

	<?php
	require_once "connection.php";

		$query = "SELECT * FROM studentmarks";
		$result = mysqli_query($con,$query);
?>
<table>
		<tr>
		<th>Student ID</th>
		<th>Student Name</th>
		<th>English Studies</th>
		<th>Mathematics</th>
		<th>Basic Science Technology</th>
		<th>Social Studies</th>
		<th>Civic Education</th>
		<th>Cultural Creative Arts</th>
		<th>Physical Health Education</th>
		<th>Geography</th>
		<th>Islamic Studies</th>
		<th>Visual Arts</th>
		<th>GPA</th>
		</tr>

<?php
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr><form action=update.php method=post>";
			echo "<tr>";
			echo "<td><input type= text name=studID value='" . $row['studentID']."'></td>";
			echo "<td><input type= text name=studName value=" . $row['Student_Name']."></td>";
			echo "<td><input type= text name=english value=" . $row['English_Studies']."></td>";
			echo "<td><input type= text name=maths value=" . $row['Mathematics']."></td>";
			echo "<td><input type= text name=science value=" . $row['Basic_Science_Technology']."></td>";
			echo "<td><input type= text name=social value=" . $row['Social_Studies']."></td>";
			echo "<td><input type= text name=civic value=" . $row['Civic_Education']."></td>";
			echo "<td><input type= text name=creativeArts value=" . $row['Cultural_Creative_Arts']."></td>";
			echo "<td><input type= text name=physicalEd value=" . $row['Physical_Health_Education']."></td>";
			echo "<td><input type= text name=geo value=" . $row['Geography']."></td>";
			echo "<td><input type= text name=islamic value=" . $row['Islamic_Studies']."></td>";
			echo "<td><input type= text name=visualArts value=" . $row['Visual_Arts']."></td>";
			echo "<td><input type= text name=gpa value=" . $row['GPA']."></td>";
			echo "<td><input type= submit name=update value=update" ."></td>";
			echo "<td><a href=delete.php?studID=".$row['studentID'].">Delete</a></td>";
			echo "<td><input type=hidden name=studID value='".$row['studentID']."'>";
			echo "</form></tr>";
		}
?>
</table>
<br/>
<h2 style="text-align: center;background-color: #cfe2cf;color: #09092a;padding: 5px 0px 5px 0px;margin-top: 10px;" ><u> Insert Results</u></h2></br>
	<form action="insert.php"method="post" >
	<br/>
	<div style="text-align:center;">Student ID: </br><input type="text" name="studID"></div></br>
	<div style="text-align:center;">Student Name: </br><input type="text" name="studName"></div></br>
	<div style="text-align:center;">English Studies: </br><input type="text" name="english"></div></br>
	<div style="text-align:center;">Mathematics: </br><input type="text" name="maths"></div></br>
	<div style="text-align:center;">Basic Science Technology: </br><input type="text" name="science"></div></br>
	<div style="text-align:center;">Social Studies: </br><input type="text" name="social"></div></br>
	<div style="text-align:center;">Civic Education: </br><input type="text" name="civic"></div></br>
	<div style="text-align:center;">Cultural Creative Arts: </br><input type="text" name="creativeArts"></div></br>
	<div style="text-align:center;">Physical Health Education: </br><input type="text" name="physicalEd"></div></br>
	<div style="text-align:center;">Geography: </br><input type="text" name="geo"></div></br>
	<div style="text-align:center;">Islamic Studies: </br><input type="text" name="islamic"></div></br>
	<div style="text-align:center;">Visual Arts: </br><input type="text" name="visualArts"></div></br>
	<div style="text-align:center;">GPA: </br><input type="text" name="gpa"></div></br>
	<input type="submit"value="insert" style = "width:20%;height:5%;background-color: white;border:1px;border-radius:5px;padding: 8px 15px 8px 15px;margin: 10px 0px 15px 0px;box-shadow: 1px 1px 2px 1px green;"/></br>
	</form>

	<a class="topButton" href="#top"><img class="topButton" src="images/top.png" alt="Back to Top"></a>
	</body>
</html>
