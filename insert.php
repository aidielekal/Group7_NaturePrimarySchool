<?php
	$connection = mysqli_connect("localhost", "root", "", 'Group6');
	if(!$connection){
		echo("Cannot connect to server");
	}

	if(!mysqli_select_db($connection, 'Group6')){
		echo"Database not selected";
	}

	$Student_ID=$_POST['studID'];
	$Student_Name =$_POST['studName'];
	$English_Studies =$_POST['english'];
	$Mathematics = $_POST['maths'];
	$Basic_Science_Technology = $_POST['science'];
	$Social_Studies = $_POST['social'];
	$Civic_Education = $_POST['civic'];
	$Cultural_Creative_Arts = $_POST['creativeArts'];
	$Physical_Health_Education = $_POST['physicalEd'];
	$Geography = $_POST['geo'];
	$Islamic_Studies = $_POST['islamic'];
	$Visual_Arts = $_POST['visualArts'];
	$GPA = $_POST['gpa'];

	$query = "INSERT INTO studentmarks(Student_ID,Student_Name, English_Studies, Mathematics,
										Basic_Science_Technology, Social_Studies, Civic_Education,
										Cultural_Creative_Arts, Physical_Health_Education, Geography,
										Islamic_Studies, Visual_Arts, GPA) VALUES ('$Student_ID','$Student_Name', '$English_Studies', '$Mathematics',
										'$Basic_Science_Technology', '$Social_Studies', '$Civic_Education',
										'$Cultural_Creative_Arts', '$Physical_Health_Education', '$Geography',
										'$Islamic_Studies', '$Visual_Arts', '$GPA')";

	if(! mysqli_query($connection, $query)){
		echo "Not inserted";
	}
	else{
		echo '<script type="text/javascript">';
		echo ' alert("Student Results has been inserted!\nPlease wait until you are redirected to result page")';
		echo '</script>';
	}

	header("refresh:2; url=editMarks.php");
?>
