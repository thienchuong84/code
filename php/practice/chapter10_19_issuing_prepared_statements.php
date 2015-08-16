<?php
require_once 'chapter10_1_login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$stmt	= $conn->prepare('INSERT INTO classics VALUES(?,?,?,?,?)');
$stmt->bind_param('sssss', $author, $title, $category, $year, $isbn);

$author		= 'Thanh Vu';
$title		= 'test 3';
$categogy	= 'test';
$year		= '2015';
$isbn		= '9780553212587';

$stmt->execute();
printf("%d Row inserted.\n", $stmt->affected_rows);
$stmt->close();
$conn->close();
?>