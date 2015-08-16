<?php
require_once 'chapter10_1_login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die ($conn->connect_error);

if (isset($_SERVER['PHP_AUTH_USER']) &&
	isset($_SERVER['PHP_AUTH_PW']))
{
	$un_tmp	= mysql_entities_fix_string($conn, $_SERVER['PHP_AUTH_USER']);
	$pw_tmp = mysql_entities_fix_string($conn, $_SERVER['PHP_AUTH_PW']);

	$query = "SELECT * FROM users WHERE username='$un_tmp'";
	$result = $conn->query($query);
	if(!$result) die ($conn->error);
	elseif ($result->num_rows) {// check xem có row nào ko? nếu có thì mới thực hiện
		$row = $result->fetch_array(MYSQLI_NUM);
			$result->close();
		$salt1 = "qm&h*";
		$salt2 = "pg!@";
		$token = hash('ripemd128', "$salt1$pw_tmp$salt2");

		if ($token == $row[3]) {
			session_start();
			$_SESSION['username'] = $un_tmp;
			$_SESSION['password'] = $pw_tmp;
			$_SESSION['forename'] = $row[0];
			$_SESSION['surname']  = $row[1];

			echo "$row[0] $row[1] : Hi $row[0], you are logged in as '$row[2]'";
			die ("<p><a href='chapter12_5_continue.php'>Click here to continue</a></p>");
		}
		else die ("Invalid username / password combination");
	}
	else die ("Invaid username / password combination");
}
else {
	header('WWW-Authenticate: Basic realm="Restricted Section"');
	header('HTTP/1.0 401 Unauthorized');
	die("Please enter your username and password2");
}

$conn->close();

function mysql_entities_fix_string($conn, $string) {
	return htmlentities(mysql_fix_string($conn, $string));
}
function mysql_fix_string($conn, $string) {
	if(get_magic_quotes_gpc()) $string = stripslashed($string);
	return $conn->real_escape_string($string);
}

?>