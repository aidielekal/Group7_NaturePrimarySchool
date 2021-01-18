<?php

function setConnectionInfo($values=array()){
	$connString = $values[0];
	$user = $values[1];
	$password = $values[2];
	$pdo = new PDO($connString,$user,$password);
	$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $pdo;
}

function displayEvent(){
	$pdo = setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql = 'SELECT * FROM event ORDER BY event_id';
	$statement = $pdo->query($sql);
	return $statement;
}

function deleteEvent($id) {
	$pdo = setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql = 'DELETE * FROM event WHERE event.event_id = $id';
	$statement = $pdo->prepare($sql);
	$statement->execute([$id]);
	return $statement;
}
?>