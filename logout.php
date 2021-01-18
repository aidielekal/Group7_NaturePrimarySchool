<?php
	session_start();
	if(isset($_SESSION['username'])){
		session_destroy();
		echo '<script type="text/javascript">';
		echo"<script>location.href='login.php'</script>";
	}
	else{
		session_destroy();
		echo"<script>location.href='login.php'</script>";
	}

?>
