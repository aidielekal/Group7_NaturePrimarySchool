<?php
	require_once('connection.php');
	
	/*$connection = mysqli_connect("localhost", "root", "", 'Group6');
	if(!$connection){
		echo("Cannot connect to server");
	}*/
/*
	if(!mysqli_select_db($connection, 'Group6')){
		echo"Database not selected";
	}*/

	$studentID = mysqli_real_escape_string($con,$_POST['studID']);
	$Student_Name =mysqli_real_escape_string($con,$_POST['studName']);
	$English_Studies =mysqli_real_escape_string($con,$_POST['english']);
	$Mathematics = mysqli_real_escape_string($con,$_POST['maths']);
	$Basic_Science_Technology = mysqli_real_escape_string($con,$_POST['science']);
	$Social_Studies = mysqli_real_escape_string($con,$_POST['social']);
	$Civic_Education = mysqli_real_escape_string($con,$_POST['civic']);
	$Cultural_Creative_Arts = mysqli_real_escape_string($con,$_POST['creativeArts']);
	$Physical_Health_Education = mysqli_real_escape_string($con,$_POST['physicalEd']);
	$Geography = mysqli_real_escape_string($con,$_POST['geo']);
	$Islamic_Studies = mysqli_real_escape_string($con,$_POST['islamic']);
	$Visual_Arts = mysqli_real_escape_string($con,$_POST['visualArts']);
	$GPA = mysqli_real_escape_string($con,$_POST['gpa']);

	$sql = "INSERT INTO studentmarks(studentID,Student_Name, English_Studies, Mathematics,
										Basic_Science_Technology, Social_Studies, Civic_Education,
										Cultural_Creative_Arts, Physical_Health_Education, Geography,
										Islamic_Studies, Visual_Arts, GPA) VALUES ('$studentID','$Student_Name', '$English_Studies', '$Mathematics',
										'$Basic_Science_Technology', '$Social_Studies', '$Civic_Education',
										'$Cultural_Creative_Arts', '$Physical_Health_Education', '$Geography',
										'$Islamic_Studies', '$Visual_Arts', '$GPA')";
	
	$result = mysqli_query($con,$sql);
	if(! mysqli_query($con, $sql)){
		echo '<script type="text/javascript">';
		echo ' alert("Not Inserted!\nPlease wait until you are redirected to result page")';
		echo '</script>';
	}
	else{
		echo '<script type="text/javascript">';
		echo ' alert("Student Results has been inserted!\nPlease wait until you are redirected to result page")';
		echo '</script>';
	}

	header("refresh:2; url=editMarks.php");
?>
