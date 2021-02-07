<?php
	include('connection.php');
	
	if(isset($_GET['del'])){
	$id = $_GET['del'];
	$query = "DELETE FROM user WHERE userID = $id"; 
	$result = mysqli_query($con,$query);
	header("location: manageTeachers.php"); 
	}
?>
