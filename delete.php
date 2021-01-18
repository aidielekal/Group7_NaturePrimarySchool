<?php
	$connection = mysqli_connect('localhost','root', '','Group6');

	mysqli_select_db($connection, 'Group6');

	$query = "DELETE FROM studentmarks WHERE Student_ID='$_GET[studID]'";


	if(mysqli_query($connection,$query)){
		echo '<script type="text/javascript">';
		echo ' alert("Student Results has been deleted!\nPlease wait until you are redirected to result page")';
		echo '</script>';
		header("refresh:1; url=editMarks.php");
	}
	else{
		echo"Data Not Deleted";}

?>
