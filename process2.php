<?php

	$mysqli = new mysqli('localhost','root','','Group6') or die(mysqli_error($mysqli));

	$title='';
	$description='';
	$date='';
	$update=false;
	$id=0;

	if(isset($_POST['save']))
	{
		$title=$_POST['title'];
		$description=$_POST['description'];
		$date=$_POST['date'];

		$mysqli->query("INSERT INTO news (news_title,news_description,news_date) VALUES('$title','$description','$date')") or die($mysqli->error());

		$_SESSION['message'] = "New record has been saved!";
		$_SESSION['msg_type'] = "success";

		header("location: newsContentTeacher.php");
	}

	if(isset($_GET['delete']))
	{
		$id=$_GET['delete'];
		$mysqli->query("DELETE FROM news WHERE news_id=$id") or die($mysqli->error());

		$_SESSION['message'] = "Record has been deleted!";
		$_SESSION['msg_type'] = "danger";

		header("location: newsContentTeacher.php");
	}

	if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$update=true;
		$result=$mysqli->query("SELECT * FROM news WHERE news_id=$id") or die($mysqli->error());

		if($result->num_rows)
		{
			$row=$result->fetch_array();
			$title=$row['news_title'];
			$description=$row['news_description'];
			$date=$row['news_date'];
		}
	}

	if(isset($_POST['update']))
	{
		$id=$_POST['id'];
		$title=$_POST['title'];
		$description=$_POST['description'];
		$date=$_POST['date'];

		$mysqli->query("UPDATE news SET news_title='$title', news_description='$description', news_date='$date' WHERE news_id=$id") or die($mysqli->error());

		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";

		header("location: newsContentTeacher.php");
	}
?>
