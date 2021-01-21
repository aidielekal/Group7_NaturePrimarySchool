<?php
	//session_start();
	require_once('connection.php');
	$message = "";
	$Status = "";

	if(isset($_POST['button']))
	{
		$UName = $_POST['username'];
		$Pass = $_POST['password'];
		
		$query = "SELECT * FROM user WHERE Username='$UName' AND Password = '$Pass'";
		$result = mysqli_query($con,$query);
		$temp = mysqli_fetch_assoc($result);
		$hashed_password = $temp["Password"];
		
		if(password_verify($Pass, $hashed_password)){
            // Password is correct, so start a new session
            session_start();
                            
            while($row = mysqli_fetch_assoc($result))
			{
				if($row["userType"] == "teacher")
				{
					//$_SESSION['LoginUser'] = $row["username"];
					$_SESSION['Status'] = $row["userType"];
					header('Location: homepageTeacher.php'); //admin
				}
				else if($row["userType"] == "student")
				{
					//$_SESSION['LoginUser'] = $row["username"];
					$_SESSION['Status'] = $row["userType"];
					header('Location: homepage2.php'); //user
				}
				else
				{
					header('Location: index.php'); //admin?
				}
			}
		}
		else 
		{
			echo "Wrong pw";
		}
		/*
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				if($row["userType"] == "teacher")
				{
					//$_SESSION['LoginUser'] = $row["username"];
					$_SESSION['Status'] = $row["userType"];
					header('Location: homepageTeacher.php'); //admin
				}
				else if($row["userType"] == "student")
				{
					//$_SESSION['LoginUser'] = $row["username"];
					$_SESSION['Status'] = $row["userType"];
					header('Location: homepage2.php'); //user
				}
				else
				{
					header('Location: index.php'); //admin?
				}
			}
		}
		else
		{
			echo "<script>alert('Invalid Username or Password!')</script>";
			echo "<script>location.href='login.php'</script>";
			//header('Location: login.php');

		}
		*/
	}


?>
