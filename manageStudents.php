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
<link rel="stylesheet" href="css/responsive.css" media="screen and (max-width:1024px)">

<!-- =====position fixed===== -->
<body>
 <header>
   <div class="banner">
     <img class="banner" src="images/Banner2b.png" alt="Nature School Banner">
   </div>
 </header>



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

<!-- =====CONTENT===== -->
<div class="sTable">
	<h2> Manage Students </h2>
	<table width="70%" border="1" style="border-collapse:collapse;">
		<thead>
		<tr>
		<th><strong>No</strong></th>
		<th><strong>Student Name</strong></th>
		<th><strong>Student ID</strong></th>
		<th><strong>Edit</strong></th>
		<th><strong>Delete</strong></th>
		</tr>
		</thead>
		<tbody>
			<?php
			$count=1;
			$sel_query="Select * from user where userType = 'student';";
			$result = mysqli_query($con,$sel_query);
			while($row = mysqli_fetch_assoc($result)) { ?>
			<tr><td align="center"><?php echo $count; ?></td>
				<td align="center"><?php echo $row["Name"]; ?></td>
				<td align="center"><?php echo $row["userID"]; ?></td>
				<td align="center">
					<a href="edit.php?id=<?php echo $row["Name"]; ?>">Edit</a>
				</td>
				<td align="center">
					<a href="delete.php?id=<?php echo $row["userID"]; ?>">Delete</a>
				</td>
			</tr>
			<?php $count++; } ?>
		</tbody>
	</table>

</div>
<!-- back to top button -->

<a class="topButton" href="#top"><img class="topButton" src="images/top.png"  alt="Back to Top"></a>
<br><br><br>

<!-- ============= FOOTER ================== -->
  <footer>
    <p class="footer">Nature Primary School Kuala Lumpur, 16, Jalan Kiara 3, Off Jalan Bukit Kiara,
    <br>50480 Kuala Lumpur, Malaysia.
    <br>Email: <a href="mailto:natureprimaryschool@gmail.com">natureprimaryschool@gmail.com</a>
    </p>
  </footer>

</body>
</html>
