<?php
//$message = "";
if(count($_GET)>0) {
    $conn = mysqli_connect("localhost", "root", "", "code");
    if(mysqli_connect_error()) {
        echo "Failed to connect database : ".mysql_connect_error();
    }
    $sql = "SELECT * FROM users WHERE userName='".$_GET["userName"]."' AND password='".$_GET["password"]."'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count==0) {
        print "Invalid Username or Password!";
    } else {
        print "You are successful authenticate";
    }
    mysqli_free_result($result);
    mysqli_close($conn);
}/*
else {
    $message = "Ko co post";
    echo "echo ko co post";
}*/

?>