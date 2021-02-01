 
 <?php
			require_once 'connection.php';
			$sel_query = "DELETE FROM user WHERE userID= '$_GET[usID]'";
			$result = mysqli_query($con,$sel_query);
			
			if(mysqli_query($con,$sel_query)){
				echo '<script type="text/javascript">';
				echo ' alert("User has been deleted!\nPlease wait until you are redirected back")';
				echo '</script>';
				header("refresh:1; url=manageTeachers.php");
			}
			else{
				echo"User Not Deleted";}
				
				
?>