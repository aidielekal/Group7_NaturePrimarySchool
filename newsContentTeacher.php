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
<html lang="en">
 <head>
	<meta charset="utf-8">
	<title>Nature Primary School</title>
	<link rel="stylesheet" href="newsContentTeacher.css">
	<link rel="stylesheet" href="HeaderFooter.css">
 </head>

<body>
<?php require_once 'process2.php';?>

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

	<div id="title">
		<h1>NEWS</h1>
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
		$result = $mysqli->query("SELECT * FROM news") or die($mysqli->error);
		//pre_r($result);
	?>
	<div class="row justify-content-center">
		<table class="table">
			<thead>
				<tr>
					<th><h2>Title</h2></th>
					<th><h2>Description</h2></th>
					<th><h2>Date</h2></th>
					<th colspan="2"><h2>Action</h2></th>
				</tr>
			</thead>
	<?php while($row=$result->fetch_assoc()): ?>
				<tr>
					<td><?php echo$row['news_title'];  ?></td>
					<td><?php echo$row['news_description']; ?></td>
					<td><?php echo$row['news_date']; ?></td>
					<td>
						<a href="newsContentTeacher.php?edit=<?php echo $row['news_id']; ?>" class="btn-info">Edit</a>
						<a href="newsContentTeacher.php?delete=<?php echo $row['news_id']; ?>" class="btn-danger">Delete</a>
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

  <div>
		<h2 style="text-align: center;background-color: #cfe2cf;color: #09092a;padding: 5px 0px 5px 0px;margin-top: 10px;">Manage News Here</h2>
	</div>

	<form action="process2.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="row justify-content-center">
		<div class="form-group">
			<label>Title</label><br>
			<input type="text" name="title" class="form-control" value="<?php echo $title; ?>" placeholder="Enter event title">
		</div>
		<div class="form-group">
			<label>Description</label><br>
			<input type="text" name="description" class="form-control" value="<?php echo $description; ?>" placeholder="Enter event description">
		</div>
		<div class="form-group">
			<label>Date</label><br>
			<input type="date" name="date" class="form-control" value="<?php echo $date; ?>" placeholder="Enter event date">
		</div>
		<div class="form-group">
		<?php if($update == true): ?>
			<button type="submit" class="btn-info2" name="update">Update</button>
		<?php else: ?>
			<button type="submit" class="btn-primary" name="save">Save</button>
		<?php endif; ?>
		</div>
	</form>
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
