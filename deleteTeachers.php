 <?php
			require_once 'connection.php';
			$query = "DELETE FROM user WHERE userID='$_GET[usID]'";
			
			//Execute Query
			$result = mysqli_query($con,$query);
			if($result){
				echo '<script type="text/javascript">';
				echo ' alert("User has been deleted!\nPlease wait until you are redirected back")';
				echo '</script>';
				header("refresh:1; url=manageTeachers.php");
			}
			else{
				echo"User Not Deleted";}
?>