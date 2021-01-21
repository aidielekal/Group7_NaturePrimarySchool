<?php

	require_once('connection.php');

	if(isset($_POST['btn-save']))
	{

		$name = mysqli_real_escape_string($con,$_POST['name']);
		$date = mysqli_real_escape_string($con,$_POST['date']);
		$username = mysqli_real_escape_string($con,$_POST['username']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$address = mysqli_real_escape_string($con,$_POST['address']);
		$city = mysqli_real_escape_string($con,$_POST['city']);
		$zipcode = mysqli_real_escape_string($con,$_POST['zipcode']);
		$state = mysqli_real_escape_string($con,$_POST['state']);
		$contactNum = mysqli_real_escape_string($con,$_POST['telephone']);
		$status = mysqli_real_escape_string($con,$_POST['status']);

		if(empty($name) || empty($date) || empty($username) || empty($password)
		|| empty($address) || empty($city) || empty($zipcode) || empty($state) ||
		empty($contactNum) || empty($status))
		{
			echo 'Please fill in the blanks';
		}
		else
		{
			$hashedpw = password_hash($password, PASSWORD_DEFAULT);
			$sql = "insert into user(Name, DOB, Username, Password, Address, City, Zipcode,
			State, ContactNumber, userType) values('$name', '$date', '$username', '$hashedpw',
			'$address', '$city', '$zipcode', '$state', '$contactNum', '$status')";
			$result = mysqli_query($con,$sql);

			if($result)
			{
				header('Location: login.php');
			}
			else
			{
				echo 'Please Check Your Query';
			}
		}

	}

?>
