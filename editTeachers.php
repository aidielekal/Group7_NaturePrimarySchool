<?php
		require_once 'connection.php';

		$sel_query = "UPDATE user SET userID='$_POST[usID]',Name ='$_POST[usName]',Username = '$_POST[usUsrName]' WHERE userID='$_POST[usID]'";
		 //Execute Query
		 $result = mysqli_query($con,$sel_query);
		 if($result){
			echo '<script type="text/javascript">';
			echo ' alert("User details has been updated!\nPlease wait until you are redirected back")';
			echo '</script>';
			header("refresh:1; url=manageTeachers.php");
		 }
		 else{
			echo "User Not Updated";}
?>
