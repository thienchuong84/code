<?php  //chapter10_2_connecting_with_mysqli.php
require_once 'chapter10_1_login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * from classics";
$result = $conn->query($query);
if(!$result) die($conn->error);

$rows = $result->num_rows; //echo $rows;

/* fetching result one cell at a time
for($j=0; $j<$rows; ++$j) {
	$result->data_seek($j);
	echo 'Author: '		.$result->fetch_assoc()['author']	.'<br>';
	$result->data_seek($j);
	echo "Title: "		.$result->fetch_assoc()['title']	.'<br>';
	$result->data_seek($j);
	echo 'Category: '	.$result->fetch_assoc()['category']	.'<br>';
	$result->data_seek($j);
	echo "Year: "		.$result->fetch_assoc()['year']		.'<br>';
	$result->data_seek($j);
	echo 'ISBN: '		.$result->fetch_assoc()['isbn']		.'<br><br>';
}
*/

for($j=0; $j<$rows; ++$j) {
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_ASSOC);

	echo 'Author: '		.$row['author']		.'<br>';
	echo 'Title: '		.$row['title']		.'<br>';
	echo 'Category: '	.$row['category']	.'<br>';
	echo 'Year: '		.$row['year']		.'<br>';
	echo 'ISBN: '		.$row['isbn']		.'<br><br>';
}

$result->close();
$conn->close();
?>