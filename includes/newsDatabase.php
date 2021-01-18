<?php

function setConnectionInfo($values=array()){
	$connString = $values[0];
	$user = $values[1];
	$password = $values[2];
	$pdo = new PDO($connString,$user,$password);
	$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $pdo;
}

function displayNews(){
	$pdo = setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql = 'SELECT * FROM news ORDER BY news_id';
	$statement = $pdo->query($sql);
	return $statement;
}

function deleteNews() {
	$pdo = setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql = 'SELECT * FROM news ORDER BY news_id';
	$statement = $pdo->query($sql);
	return $statement;
}
?>