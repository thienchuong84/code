<?php  //chapter10_2_connecting_with_mysqli.php
require_once 'chapter10_1_login.php';

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * from classics";
$result = $conn->query($query);
if(!$result) die($conn->error);

?>