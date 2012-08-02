<?php

require_once('config/database.php');

$mysqli = new mysqli($database_hostname, $database_username, $database_password, $database_name) or exit("Error connecting to database"); 

$stmt = $mysqli->prepare("SELECT * FROM `lessons` WHERE id = 13"); 

//$stmt->bind_param("i", $speechid); // i is for integer, s is for string, studentID is a number so i
	
$stmt->execute(); 

$stmt->bind_result($id, $lefttext, $righttext);
 
$stmt->fetch();

$stmt->close();
	
$mysqli->close();

$leftHandSideCodes=explode("\n",$lefttext);




?>
