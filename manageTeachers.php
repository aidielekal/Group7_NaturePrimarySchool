<!-- =====ADMIN==== -->
<?php

require_once "connection.php";

/*
session_start();
if(isset($_SESSION['Status']))
{
	if($_SESSION['Status'] != 'admin') //in admin file
	{
		header('Location: homepageAdmin.php'); //user
	}
}
else
{
	header('Location: login.php');
}
*/
?>

<html lang="en">
<head>
<title>Nature Primary School</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="HeaderFooter.css">
<link rel="stylesheet" href="manageTeachers.css">
<link rel="stylesheet" href="css/responsive.css" media="screen and (max-width:1024px)">
<!--<script src="text.js"></script>-->

<!-- =====position fixed===== -->
<body>
<?php require_once 'connection.php';?>
 <header>
   <div class="banner">
     <img class="banner" src="images/Banner2b.png" alt="Nature School Banner">
   </div>
 </header>
 <style>
		input[type=text]{
			width:100%;
			height:5%;
			border:1px;
			border-radius:5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px black;
			}
			
		input[type=text1]{
			width:100%;
			text-align:center;
			height:5%;
			border:none;
			border-radius:5px;
			padding: 8px 0px 8px 0px;
			margin: 10px 0px 15px 0px;
			background: url("images/background.jpeg"),no-repeat;
			}
			
			input[type=submit]{
			text-align:center;
			height:5%;
			border:1px;
			border-radius:5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 10px 0px;
			box-shadow: 1px 1px 2px 1px green;
			}

   </style>

<!-- =====navigation===== -->

<div class="wrapper">
	<div class="menu">
	<ul class="nav">
	 <li><a class="home" href="homepageAdmin.php">HOME</a></li>
	 <li><a class="home" href="#">STUDENTS AND TEACHERS</a>
		 <ul class="drop">
				 <li><a href="manageStudents.php">Manage Students</a></li>
				 <li><a href="manageTeachers.php">Manage Teachers</a></li>
			</ul>
	 <li><a class="home" href="#">INQUIRIES</a>
		 <ul class="drop">
				 <li><a href="manageInquiries.php">Manage Inquiries </a></li>

			</ul>
	 <li><a class="home" href="logout.php" onclick="return confirm('Are you sure to LOG OUT?')">LOGOUT</a></li>
 </ul>
	</div>
 </div>
 
 <!-- ======CONTENT========== -->
	<div class="tTable">
	<div id="title">
		<h1>Manage Teachers</h1>
	</div>
	<table width="90%" border="1" style="border-collapse:collapse;">
		<thead>
		<tr>
		<th style ="width:10%"><strong>User ID</strong></th>
		<th style ="width:40%"><strong>Teacher Name</strong></th>
		<th style ="width:40%"><strong>Email</strong></th>
		</tr>
		</thead>
		<tbody>
			<?php
			require_once 'connection.php';
		
			$sel_query="SELECT * FROM user WHERE userType = 'teacher';";
			$result = mysqli_query($con,$sel_query);
			
			while($row = mysqli_fetch_array($result)) { ?>
			<tr><?php echo "<form action=editTeachers.php method=post>";?>
				<td align="center"><?php echo "<input type= text1 name=usID value='".$row['userID']."'>";?></td>
				<td align="center"><?php echo "<input type= text name=usName value=".$row['Name'].">";?></td>
				<td align="center"><?php echo "<input type= text name=usUsrName value=".$row['Username'].">";?></td>
				<td align="center"><?php echo "<input type= submit name=update value=update" .">";?></td>
				<td align="center"><?php echo "<a href=deleteTeachers.php?usID=".$row['userID'].">Delete</a>";?></td>
				<?php echo "</form>";?>
			</tr>
			<?php }?>
		</tbody>
	</table>

</div>


</body>
</html>
