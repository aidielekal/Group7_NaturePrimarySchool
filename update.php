<?php

		require_once 'connection.php';

		$sel_query = "UPDATE studentmarks SET studentID='$_POST[studID]',
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
										GPA = '$_POST[gpa]' WHERE studentID='$_POST[studID]'";
		 //Execute Query
		 $result = mysqli_query($con,$sel_query);
		 if($result)
			 header("refresh:1; url=editMarks.php");
		 else
			 echo "Not Updated";
?>
