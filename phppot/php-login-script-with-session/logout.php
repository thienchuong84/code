<?php

/**
 * @author GallerySoft.info
 * @copyright 2015
 */

session_start();
unset($_SESSION["id"]);
unset($_SESSION["user"]);
header("Location:index.php");


?>