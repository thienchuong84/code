<?php  //chapter10_login.php

require_once 'chapter10_1_login.php';
$conn	=	new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die ($conn->connect_error);
/*
$query	=	"CREATE TABLE cats (
			id SMALLINT NULL AUTO_INCREMENT,
			family VARCHAR(32) NOT NULL,
			name VARCHAR(32) NOT NULL,
			age TINYINT NOT NULL,
			PRIMARY KEY (id)
			)";
*/
$query 	= 	"CREATE TABLE users (
			forename VARCHAR(32) NOT NULL,
			surname VARCHAR(32) NOT NULL,
			username VARCHAR(32) NOT NULL UNIQUE,
			password VARCHAR(32) NOT NULL
			)";

$result	=	$conn->query($query);
if(!$result) die ("Database access failed: " . $conn->error);

?>