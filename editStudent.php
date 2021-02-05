<!-- =====ADMIN==== -->
<?php

require_once "connection.php";

session_start();

if(isset($_SESSION['Status']))
{
	if($_SESSION['Status'] != 'admin') 
	{
		header('Location: manageStudents.php'); //user
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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="HeaderFooter.css">
<link rel="stylesheet" href="editStudent.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<!-- =====MAIN CONTENT===== -->
<h1>Update Student</h1>

<div class="sForm">
	<?php 
	include('connection.php');
	$id = $_GET['edit'];
	$update = true;
	$sel_query="SELECT * FROM user where userID = $id";
	$result = mysqli_query($con,$sel_query);
	//if (count($result) == 1 ) {
			$n = mysqli_fetch_array($result);
			$name = $n['Name'];
			$username = $n['Username'];
	?>
	<form method="POST" action="updateStudent.php" >
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="input-group">
				<label>Name</label>
				<input type="text" name="name" value="<?php echo $name; ?>">
			</div>
			<div class="input-group">
				<label>Email Address</label>
				<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
				<?php if ($update == true): ?>
					<button class="btn" type="submit" name="update" style="background: #556B2F;" >UPDATE</button>
				<?php else: ?>
					<button class="btn" type="submit" name="save" >Save</button>
				<?php endif ?>
			</div>
		</form>
	
	
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
