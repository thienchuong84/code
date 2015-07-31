<?php

//$message = "";

?>


<html>
<head>
    <title>Php login with ajax</title>
    <style>
        .tableheader {
            color: white;
            font-weight: bold;
            background-color: #95BEE6;
        }
        .tablerow {
            background-color: #A7D6F1;
        }
        .message {
            color: #FF0000;
            font-weight:  bold;
            text-align:  center;
            width: 100%;
        }
    </style>
    <script>
        function callLogin(){
            var userName = document.getElementById("userName").value;
            var password = document.getElementById("password").value;
            xmlHttpRequest = new XMLHttpRequest();
            xmlHttpRequest.onreadystatechange = function() {
                if(xmlHttpRequest.readyState==4 && xmlHttpRequest.status==200) {
                    document.getElementById("messageBoxId").innerHTML=xmlHttpRequest.responseText;
                }
            }
            xmlHttpRequest.open("GET","signin.php?userName="+userName+"&password="+password,true);
            xmlHttpRequest.send();
        }
    </script>
</head>
<body>
<form name="frmUser" method="post" action="">
    <div class="message" id="messageBoxId"></div>
    <table align="center" width="500" cellpadding="10" cellspacing="1">
        <tr class="tableheader">
            <td align="center" colspan="2">Enter Login Detail</td>
        </tr>
        <tr class="tablerow">
            <td align="right">Username</td>
            <td><input type="text" name="user" id="userName" /></td>
        </tr>
        <tr class="tablerow">
            <td align="right">Password</td>
            <td><input type="text" name="pass" id="password" /></td>
        </tr>
        <tr class="tableheader">
            <td align="center" colspan="2"><input type="button" name="submit" value="Submit" onclick="callLogin()" /></td>
        </tr>
    </table>
</form>
</body>
</html>