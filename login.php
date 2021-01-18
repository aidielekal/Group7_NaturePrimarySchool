<?php

include "code.php";
?>

<html lang="en">
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<title>Nature Primary School</title>
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="HeaderFooter.css">
 </head>

 <body>
 <img class="banner" src="images/Banner2b.png" alt="Nature School Banner">
<form action= "code.php" method="post">
<div class="login-box">
 <h2>Login</h2>

 <div class="textbox">
	<i class="fa fa-user"></i>
	<input type="text" placeholder="Email" name="username" value="" id="user" required>
 </div>

 <div class="textbox">
	<i class="fa fa-key"></i>
	<input type="password" placeholder="Password" name="password" value="" id="pass" required>
	<span class="eye" onclick="myFunction()">
		<i id="hide1" class="fa fa-eye"></i>
		<i id="hide2" class="fa fa-eye-slash"></i>
	</span>
 </div>
 <p class="text-center" style="color:red;">
	<?php echo $message; ?>
 </p>

<input class="btn" type="submit" name="button" value="Login" >
<p class ="message">Not Registered? <a href="registerpage.php"> Register here</a></p>
<p class ="message">Login as <a href="homepageGuest.php"> Guest</a></p>

</div>
</form>
	<script>
		function myFunction(){
			var x = document.getElementById("pass");
			var y = document.getElementById("hide1");
			var z = document.getElementById("hide2");

			if(x.type === 'password'){
				x.type = "text";
				y.style.display = "block";
				z.style.display = "none";
			}
			else{
				x.type = "password";
				y.style.display = "none";
				z.style.display = "block";
			}
		}

	</script>




 </body>

</html>
