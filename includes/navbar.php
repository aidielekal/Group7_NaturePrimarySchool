<?php

	session_start();
	require_once('connection.php');
	$message = "";
	$Status = "";
	if(isset($_POST['button']))
	{
		$UName = $_POST['username'];
		$Pass = $_POST['password'];
		$query = "SELECT * FROM user WHERE Username='$UName' AND Password = '$Pass'";
		$result = mysqli_query($con,$query);

		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				if($row["userType"] == "teacher")
				{
					//$_SESSION['LoginUser'] = $row["username"];
					$_SESSION['userType'] = $row["userType"];
					$sessionstatus = true;
					header('Location: index.php'); //admin
				}
				else
				{
					//$_SESSION['LoginUser'] = $row["username"];
					$_SESSION['userType'] = $row["userType"];
					$sessionstatus = true;
					header('Location: index.php'); //user
				}
			}
		}
		else
		{
			echo "<script>alert('Invalid Username or Password!')</script>";
			echo "<script>location.href='login.php'</script>";
			//header('Location: login.php');

		}

	}

?>

<div class="wrapper">
	<div class="menu">
	<ul class="nav">
	<?php
		if($sessionstatus == true){
			//logged in navbar as reacher
			$logoutmsg = 'Are you sure to LOG OUT?';
			if($row["userType"] == "teacher")
			{
				echo '
						<li><a class="home" href="index.php">HOME</a></li>
						<li><a class="home" href="#">NEWS AND EVENTS</a>
					<ul class="drop">
						<li><a href="newsContentTeacher.php">Manage News</a></li>
						<li><a href="eventsContentTeacher.php">Manage Events</a></li>
					</ul>
					<li><a class="home" href="#">STUDENT RESULTS</a>
					<ul class="drop">
					 <li><a href="editMarks.php">Manage Student Result</a></li>
				</ul>
				<li><a class="home" href="logout.php" onclick="return confirm(\''.$logoutmsg.'\')">LOGOUT</a></li>
				</ul>';	
			}
			else if($row["userType"] == "student")
			{
				echo '
					<li><a class="home" href="index.php">HOME</a></li>
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
					 <li><a class="home" href="logout.php" onclick="return confirm(\''.$logoutmsg.'\')">LOGOUT</a></li>';
			}
			else
			{
				
			}

		}
		else{	//this one for guest
			echo '
				<li><a class="home" href="index.php">HOME</a></li>
				<li><a class="home" href="aboutUsGuest.php">ABOUT US</a>
				<li><a class="home" href="#">NEWS AND EVENTS</a>
			 <ul class="drop">
				<li><a href="newsContentGuest.php">News</a></li>
				<li><a href="eventsContentGuest.php">Events</a></li>
			  </ul>
			 <li><a class="home" href="FacilitiesGuest.php">FACILITIES</a></li>
			 <li><a class="home" href="#">ADMISSION PROCESS</a>
					<ul class="drop">
					 <li><a href="feesInfoGuest.php" >Fees Information</a></li>
					 <li><a href="appProcessGuest.php" >Application Process</a></li>
					 <li><a href="appFormGuest.php" >Application Form</a></li>
					 <li><a href="ProgStructGuest.php" >Programme Structure</a></li>
					</ul>
				</li>
			 <li><a class="home" href="contactUsGuest.php">CONTACT US</a></li>
		   <li><a class="home" href="login.php">LOGIN</a></li> ';
		}
	?>
	 
 </ul>
	</div>
 </div>