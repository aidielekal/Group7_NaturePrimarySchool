<!-- =====Admin==== -->
<?php

session_start();
/*
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
<link rel="stylesheet" href="HeaderFooter.css">
<link rel="stylesheet" href="manageInquiries.css">
<link rel="stylesheet" href="css/responsive.css" media="screen and (max-width:1024px)">
<meta charset="UTF-8">
    </head>
<!--<script src="text.js"></script>-->

<!-- =====position fixed===== -->
<body>
<?php require_once 'processManageInquiry.php';?>
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

<div id="title">
		<h1>INQUIRIES</h1>
	</div>

	<?php if(isset($_SESSION['message'])): ?>

	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>

	<?php endif ?>

	<?php
		$mysqli = new mysqli('localhost','root','','Group6') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM contactus") or die($mysqli->error);
		//pre_r($result);
	?>
	<div class="row justify-content-center">
		<table class="table">
			<thead>
				<tr>
					<th><h2>Name</h2></th>
					<th><h2>Email</h2></th>
					<th><h2>Inquiry</h2></th>
					<th colspan="2"><h2>Action</h2></th>
				</tr>
			</thead>
	<?php while($row=$result->fetch_assoc()): ?>
				<tr>
					<td><?php echo$row['Name']; ?></td>
					<td><?php echo$row['Email']; ?></td>
					<td><?php echo$row['Message']; ?></td>
					<td>
						<a href="manageInquiries.php?delete=<?php echo$row['Name']; ?>" class="btn-danger">Delete</a>
						<p>Email: <a href="mailto:<?php  $row['Email']; ?>"><?php echo$row['Email']; ?></a></p>
		
					</td>
				</tr>
	<?php endwhile; ?>
		</table>
	<?php
		function pre_r($array)
		{
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}
	?>

  

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
