<?php
	require_once 'connection.php';
	$sel_query = "DELETE FROM studentmarks WHERE studentID='$_GET[studID]'";
	$result = mysqli_query($con,$sel_query);

	if(mysqli_query($con,$sel_query)){
		echo '<script type="text/javascript">';
		echo ' alert("Student Results has been deleted!\nPlease wait until you are redirected to result page")';
		echo '</script>';
		header("refresh:1; url=editMarks.php");
	}
	else{
		echo"Data Not Deleted";}

?>
