<?php
	$connection = mysqli_connect('localhost', 'root', '', 'Group6');
	mysqli_select_db($connection, 'Group6');

		$query = "UPDATE studentmarks SET Student_ID='$_POST[studID]',
										Student_Name ='$_POST[studName]',
										English_Studies ='$_POST[english]',
										Mathematics = '$_POST[maths]',
										Basic_Science_Technology = '$_POST[science]',
										Social_Studies = '$_POST[social]',
										Civic_Education = '$_POST[civic]',
										Cultural_Creative_Arts = '$_POST[creativeArts]',
										Physical_Health_Education = '$_POST[physicalEd]',
										Geography = '$_POST[geo]',
										Islamic_Studies = '$_POST[islamic]',
										Visual_Arts = '$_POST[visualArts]',
										GPA = '$_POST[gpa]' WHERE Student_ID='$_POST[studID]'";
		 //Execute Query
		 if(mysqli_query($connection,$query))
			 header("refresh:1; url=editMarks.php");
		 else
			 echo "Not Updated";
?>
