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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head lang="en">
	<link rel="stylesheet" href="appForm.css">
	<link rel="stylesheet" href="HeaderFooter.css">
   <meta charset="utf-8">
   <title>Nature Primary School</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <style>
		input{
			width:40%;
			height:5%;
			border:1px;
			border-radius:5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px green;
			}
   </style>

</head>
<body>
	<header>
		<div class="banner">
			<img class="banner" src="images/Banner2b.png">
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


	<center>
		<h1> Student Result </h1><br/>
		<form action="" method= "POST">
		<input type="text" name = "studentID" placeholder = "Enter ID To Search"/> <br/>
		<input type="submit" name = "submit" value= "Results" style="background-color:white;"></p>
		</form>

	<?php
	require_once 'connection.php';

	if(isset($_POST['studentID']))
	{
		$studentID = $_POST['studentID'];

		$sel_query = "SELECT * FROM studentmarks where studentID = '$studentID'";
		$result = mysqli_query($con,$sel_query);

		while($row = mysqli_fetch_array($result))
		{
			?>
		<table align = "center" , border = 1px style = "width:620px; line-height:30px; border: 1px solid black; border-collapse: collapse;">
			<tr>
				<th colspan = "2"><h2>Student Record</h2></th>
			</tr>
			<tr style = "background-color: #A9DFBF;">
				<th> Student ID </th>
				<td align = "center"><?php echo $row['studentID'];?></td>
			</tr>
			<tr style = "background-color: #F6DDCC;">
				<th> Student Name </th>
				<td align = "center"><?php echo $row['Student_Name'];?></td>
			</tr>
			<tr style = "background-color: #A9DFBF;">
				<th> English Studies </th>
				<td align = "center"><?php echo $row['English_Studies'];?></td>
			</tr>
			<tr style = "background-color: #F6DDCC;">
				<th> Mathematics </th>
				<td align = "center"><?php echo $row['Mathematics'];?></td>
			</tr>
			<tr style = "background-color: #A9DFBF;">
				<th> Basic Science Technology </th>
				<td align = "center"><?php echo $row['Basic_Science_Technology'];?></td>
			</tr>
			<tr style = "background-color: #F6DDCC;">
				<th> Social Studies </th>
				<td align = "center"><?php echo $row['Social_Studies'];?></td>
			</tr>
			<tr style = "background-color: #A9DFBF;">
				<th> Civic Education </th>
				<td align = "center"><?php echo $row['Civic_Education'];?></td>
			</tr>
			<tr style = "background-color: #F6DDCC;">
				<th> Cultural Creative Arts </th>
				<td align = "center"><?php echo $row['Cultural_Creative_Arts'];?></td>
			</tr>
			<tr style = "background-color: #A9DFBF;">
				<th> Physical Health Education </th>
				<td align = "center"><?php echo $row['Physical_Health_Education'];?></td>
			</tr>
			<tr style = "background-color: #F6DDCC;">
				<th> Geography </th>
				<td align = "center"><?php echo $row['Geography'];?></td>
			</tr>
			<tr style = "background-color: #A9DFBF;">
				<th> Islamic Studies </th>
				<td align = "center"><?php echo $row['Islamic_Studies'];?></td>
			</tr>
			<tr style = "background-color: #F6DDCC;">
				<th> Visual Arts </th>
				<td align = "center"><?php echo $row['Visual_Arts'];?></td>
			</tr>
			<tr style = "background-color: #A9DFBF;">
				<th> GPA </th>
				<th align = "center"><?php echo $row['GPA'];?></th>
			</tr>
			<?php
			exit();
		}
		if (mysqli_fetch_array($result) == null) {
			$error = "Examination Result for corresponding Student ID does not exist";
			echo "<div class='alert alert-danger mx-auto m-3'>".$error."</div>" ;
			exit();
    		}
	}

	?>
		</table>
	</center>
	<br/>
	<br/>
	<a class="topButton" href="#top"><img class="topButton" src="images/top.png" alt="Back to Top"></a>
</body>
</html>
