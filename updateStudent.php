<?php

include('connection.php');

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['username'];
	$update=false;
	$query = "UPDATE user SET Name = '$name', Username='$address' where userID = $id"; 
	$result = mysqli_query($con,$query);
	header ('location: manageStudents.php');
}
else{
	alert('cannot');
	header ('location: editStudent.php');
}	
?>