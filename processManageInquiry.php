<?php

	$mysqli = new mysqli('localhost','root','','Group6') or die(mysqli_error($mysqli));

	$title='';
	$description='';
	$date='';
	$update=false;
	$id=0;



	if(isset($_GET['delete']))
	{
		$sendName=$_GET['delete'];
		$mysqli->query("DELETE FROM contactus WHERE Name='$sendName'") or die ("DB Error: ". $mysqli->error);
		$_SESSION['message'] = "Inquiry has been deleted!";
		$_SESSION['msg_type'] = "danger";

		header("location: manageInquiries.php");
	}

	
?>
