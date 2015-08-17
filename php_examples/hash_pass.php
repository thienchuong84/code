<?php

$salt1 = "qm&h*";
$salt2 = "pg!@";

$pw_tmp = "123456";
$token = hash('ripemd128', "$salt1$pw_tmp$salt2");

$pw_tmp2 = "admin2";
$token2 = hash('ripemd128', "$salt1$pw_tmp2$salt2");

echo "$pw_tmp have token: $token<br><br>";
echo "$pw_tmp2 have token: $token2<br><br>";
?>