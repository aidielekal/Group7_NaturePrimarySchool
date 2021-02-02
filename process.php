<?php

	require_once ('connection.php');
	
	$title='';
	$description='';
	$location='';
	$date='';
	$update=false;
	$id=0;

	if(isset($_POST['save']))
	{
		$title=$_POST['title'];
		$description=$_POST['description'];
		$location=$_POST['location'];
		$date=$_POST['date'];

		$con->query("INSERT INTO event (event_title,event_description,event_location,event_date) VALUES('$title','$description','$location','$date')") or die($con->error());

		$_SESSION['message'] = "New record has been saved!";
		$_SESSION['msg_type'] = "success";

		header("location: eventsContentTeacher.php");
	}

	if(isset($_GET['delete']))
	{
		$id=$_GET['delete'];
		$con->query("DELETE FROM event WHERE event_id=$id") or die($con->error());

		$_SESSION['message'] = "Record has been deleted!";
		$_SESSION['msg_type'] = "danger";

		header("location: eventsContentTeacher.php");
	}

	if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$update=true;
		$result=$con->query("SELECT * FROM event WHERE event_id=$id") or die($con->error());

		if($result->num_rows)
		{
			$row=$result->fetch_array();
			$title=$row['event_title'];
			$description=$row['event_description'];
			$location=$row['event_location'];
			$date=$row['event_date'];

		}
	}

	if(isset($_POST['update']))
	{
		$id=$_POST['id'];
		$title=$_POST['title'];
		$description=$_POST['description'];
		$location=$_POST['location'];
		$date=$_POST['date'];

		$con->query("UPDATE event SET event_title='$title', event_description='$description', event_location='$location', event_date='$date' WHERE event_id=$id") or die($con->error());

		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";

		header("location: eventsContentTeacher.php");
	}
?>
