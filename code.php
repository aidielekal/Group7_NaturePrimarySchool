<?php 
 
// Include config file
require_once "connection.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
$message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
		
		// Prepare a select statement
        $sql = "SELECT userID, Username, Password, userType FROM user WHERE Username = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $userType);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                                                  
                            if($userType == "teacher")
							{
								//$_SESSION['LoginUser'] = $row["username"];
								$_SESSION['Status'] = $userType;
								header('Location: homepageTeacher.php'); //admin
							}
							else if($userType == "student")
							{
								//$_SESSION['LoginUser'] = $row["username"];
								$_SESSION['Status'] = $userType;
								header('Location: homepage2.php'); //user
							}
							else
							{
								header('Location: index.php'); //admin?
							}
							/*
							if($id == 0 ){																
								// Redirect user to welcome page
								header("location: ../cetak-owner.php");	
							}
                            // Redirect user to welcome page
                            else{
								header("location: ../cetak-profile.php");
							}*/
                        } 
						else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
							echo $password_err;
							echo $password;
							echo $hashed_password;
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($con);
}



/*
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
		
	}

*/
?>
