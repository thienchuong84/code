<?php
require_once 'chapter10_1_login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die ($conn->connect_error);

/*
$query = "CREATE TABLE users (
forename VARCHAR(32) NOT NULL,
surname VARCHAR(32) NOT NULL,
username VARCHAR(32) NOT NULL UNIQUE,
password VARCHAR(32) NOT NULL
)";
$result = $connection->query($query);
if (!$result) die($connection->error);
*/

$salt1 = "qm&h*";
$salt2 = "pg!@";

$forename = 'Bill';
$surname  = 'Smith';
$username = 'bsmith';
$password = 'mysecret';
$token 	  = hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $forename, $surname, $username, $token);

$forename 	= 'Pauline';
$surname 	= 'Jones';
$username 	= 'pjones';
$password	= 'acrobat';
$token		= hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $forename, $surname, $username, $token);

function add_user($conn, $fn, $sn, $un, $pw) {
	$query = "INSERT INTO users VALUES('$fn', '$sn', '$un', '$pw')";
	$result = $conn->query($query);
	if(!$result) die ($conn->error);
}

?>