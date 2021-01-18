<?php
	session_start();
	require_once('connection.php');
	$message = "";
	$Status = "";
	if(isset($_POST['button']))
	{
		$UName = $_POST['username'];
		$Pass = $_POST['password'];
		$query = "SELECT * FROM register WHERE Username='$UName' AND Password = '$Pass'";
		$result = mysqli_query($con,$query);

		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				if($row["Status"] == "teacher")
				{
					//$_SESSION['LoginUser'] = $row["username"];
					$_SESSION['Status'] = $row["Status"];
					header('Location: homepageTeacher.php'); //admin
				}
				else
				{
					//$_SESSION['LoginUser'] = $row["username"];
					$_SESSION['Status'] = $row["Status"];
					header('Location: homepage2.php'); //user
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
