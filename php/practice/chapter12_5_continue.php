<?php
session_start();

if(isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$forename = $_SESSION['forename'];
	$surname  = $_SESSION['surname'];

	destroy_session_and_data();

	echo "Welome back $forename.<br>
			Your full name is $forename $surname.<br>
			Your username is '$username' 
			and your password is '$password'.";
}
else echo "Please <a href='chapter12_5_setting_session_after_login_successful.php'>click here</a> to login.";

function destroy_session_and_data() {
	$_SESSION = array();
	setcookie(session_name(), '', time() - 2592000, '/');
	session_destroy();
}
?>