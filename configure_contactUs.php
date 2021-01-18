<?php

	$con= mysqli_connect('localhost','root','','Group6') or die('Error1');
	$db ='Group6';

	if (!$con){
		die("Could not connect to server".mysqli_connect_error());
	}
	else
		echo "";

	$selectdb= mysqli_select_db($con,$db) or die('Error2');

 ?>
