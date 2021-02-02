<?php

	require_once('connection.php');

	

	$query = "DELETE FROM studentmarks WHERE studentID='$_GET[studID]'";


	if(mysqli_query($con,$query)){
		echo '<script type="text/javascript">';
		echo ' alert("Student Results has been deleted!\nPlease wait until you are redirected to result page")';
		echo '</script>';
		
	}
	else{
		echo '<script type="text/javascript">';
		echo ' alert("Data Not Deleted!\nPlease wait until you are redirected to result page")';
		echo '</script>';
		}
header("refresh:1; url=editMarks.php");
?>
