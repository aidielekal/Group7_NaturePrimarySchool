<!-- =====ADMIN==== -->


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
	<table width="70%" border="1" style="border-collapse:collapse;">
		<thead>
		<tr>
		<th><strong>No.</strong></th>
		<th><strong>Teacher Name</strong></th>
		<th><strong>Email</strong></th>
		<th><strong>Edit</strong></th>
		<th><strong>Delete</strong></th>
		</tr>
		</thead>
		<tbody>
			<?php
			$count=1;
			$sel_query="Select * from user where userType = 'teacher';";
			$result = mysqli_query($con,$sel_query);
			while($row = mysqli_fetch_assoc($result)) { ?>
			<tr><td align="center"><?php echo $count; ?></td>
				<td align="center"><?php echo $row["Name"]; ?></td>
				<td align="center"><?php echo $row["Username"]; ?></td>
				<td align="center">
					<a href="edit.php?id=<?php echo $row["Name"]; ?>">Edit</a>
				</td>
				<td align="center">
					<a href="delete.php?id=<?php echo $row["Username"]; ?>">Delete</a>
				</td>
			</tr>
			<?php $count++; } ?>
		</tbody>
	</table>

</div>

<!--<form action="process3.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="row justify-content-center">
		<div class="form-group">
			<!--<label>Title</label><br>
			<input type="text" name="title" class="form-control" value="<?php echo $title; ?>" placeholder="Enter event title">
		</div>
		<div class="form-group">
			<!--<label>Description</label><br>
			<input type="text" name="description" class="form-control" value="<?php echo $description; ?>" placeholder="Enter event description">
		</div>
		<div class="form-group">
			<!--<label>Date</label><br>
			<input type="date" name="date" class="form-control" value="<?php echo $date; ?>" placeholder="Enter event date">
		</div>
		<div class="form-group">
		<?php if($update == true): ?>
			<button type="submit" class="btn-info2" name="update">Update</button>
		<?php else: ?>
			<button type="submit" class="btn-primary" name="save">Save</button>
		<?php endif; ?>
		</div>
	</form>-->
<!--<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="userForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Edit User</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="firstname" class="control-label">First Name*</label>
						<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>							
					</div>
					<div class="form-group">
						<label for="lastname" class="control-label">Last Name</label>							
						<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">							
					</div>	   	
					<div class="form-group">
						<label for="lastname" class="control-label">Email*</label>							
						<input type="text" class="form-control"  id="email" name="email" placeholder="Email" required>							
					</div>	 
					<div class="form-group" id="passwordSection">
						<label for="lastname" class="control-label">Password*</label>							
						<input type="password" class="form-control"  id="password" name="password" placeholder="Password" required>							
					</div>
					<div class="form-group">
						<label for="gender" class="control-label">Gender</label>							
						<label class="radio-inline">
							<input type="radio" name="gender" id="male" value="male" required>Male
						</label>;
						<label class="radio-inline">
							<input type="radio" name="gender" id="female" value="female" required>Female
						</label>							
					</div>	
					<div class="form-group">
						<label for="lastname" class="control-label">Mobile</label>							
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">							
					</div>	 
					<div class="form-group">
						<label for="lastname" class="control-label">Designation</label>							
						<input type="text" class="form-control" id="designation" name="designation" placeholder="designation">							
					</div>	
					<div class="form-group">
						<label for="gender" class="control-label">Status</label>							
						<label class="radio-inline">
							<input type="radio" name="status" id="active" value="active" required>Active
						</label>;
						<label class="radio-inline">
							<input type="radio" name="status" id="pending" value="pending" required>Pending
						</label>							
					</div>
					<div class="form-group">
						<label for="user_type" class="control-label">User Type</label>							
						<label class="radio-inline">
							<input type="radio" name="user_type" id="general" value="general" required>General
						</label>;
						<label class="radio-inline">
							<input type="radio" name="user_type" id="administrator" value="administrator" required>Administrator
						</label>							
					</div>	
				</div>
				<div class="modal-footer">
					<input type="hidden" name="userid" id="userid" />
					<input type="hidden" name="action" id="action" value="updateUser" />
					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>
body{
	margin: 0;
	padding: 0;
	font-family: optima sans-serif;
	color:#384047;
	background: url("images/background.jpeg"),no-repeat;
	background-size: cover;
	max-width: 100%;
    overflow-x: hidden;
}-->
</body>
</html>