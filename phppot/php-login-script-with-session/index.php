<?php

/**
 * @author GallerySoft.info
 * @copyright 2015
 */

session_start();

$message = "";

if(count($_POST)>0){
    // initialize mysql connection and check connection
    $conn = mysqli_connect("localhost", "root", "", "code");
    if(mysqli_connect_error()) {
        echo "Failed to connect to mysql: ".mysqli_connect_error();
    }
    $sql = "SELECT * FROM user WHERE user='".$_POST["username"]."' and pass='".$_POST["password"]."'";
    $result = mysqli_query($conn, $sql);
    
    // Numeric array
    //$row = mysqli_fetch_array($result,MYSQLI_NUM);
    //printf ("%s (%s)\n",$row[0],$row[1]);// test
    
    // Associative array
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //printf ("%s (%s)\n",$row["id"],$row["user"]);// test
    
    if(is_array($row)) {
        $_SESSION["id"] = $row[id];
        $_SESSION["user"] =$row[user];
    } else {
        $message = "Invalide Username or Password";
    }
    
    mysqli_free_result($result);
    mysqli_close($conn);
}

if(isset($_SESSION["id"])) {
    header("Location:user_dashboard.php");
}

?>
<html>
<head>
<title>User Login</title>
<!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
<style>
.tableheader {
    background-color: #95BEE6;
    color: white;
    font-weight: bold;
}
.tablerow {
    background-color: #A7D6F1;
    color: white;
}
.message {
    color:#FF0000;
    font-weight: bold;
    text-align: center;
    width: 100%;
}
</style>
</head>
<body>

<form name="frmUser" method="post" action="">
    <div class="message"><?php if($message!="") {echo $message;} ?></div>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center" >
        <tr class="tableheader">
            <td align="center" colspan="2">Enter Login Details</td>
        </tr>
        <tr class="tablerow">
            <td align="right">Username</td>
            <td><input type="text" name="username" /></td>
        </tr>
        <tr class="tablerow">
            <td align="right">Password</td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr class="tableheader">
            <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" /></td>
        </tr>
    </table>
</form>



</body>
</html>