<?php

	$newlefttext=$_POST['lefttext'];
	$newrighttext=$_POST['righttext'];
	

	require_once('config/database.php');

	$mysqli = new mysqli($database_hostname, $database_username, $database_password, $database_name) or exit("Error connecting to database"); 

	$stmt = $mysqli->prepare("INSERT INTO `lessons` (`lefttext`,`righttext`) VALUES (?, ?)");  
	
	$newlefttext=htmlentities($newlefttext);
	
	$stmt->bind_param("ss", $newlefttext, $newrighttext);
	
	$stmt->execute(); 

	$stmt->close();

	$mysqli->close();

?>