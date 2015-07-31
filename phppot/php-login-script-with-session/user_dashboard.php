<?php

/**
 * @author GallerySoft.info
 * @copyright 2015
 */

session_start();

//echo $_SESSION["user"];

?>
<html>
<head>
    <title>User Dashboard</title>
    <style>
        .tableheader {
            color:  white;
            font-weight:  bold;
            background-color: #95BEE6;
        }
        .tablerow {
            color: white;
            background-color:#A7D6F1;
        }
    </style>
</head>
<body>

<table border="0" cellpadding="10" celspacing="1" width="500" align="center">
    <tr class="tableheader">
        <td align="center">User Dashboard</td>
    </tr>
    <tr class="tablerow">
        <td>
            <?php 
                if(isset($_SESSION["user"])) { ?>
                    Welcome <?php echo $_SESSION["user"];?>. Click here to <a href="logout.php" title="Logout">Logout</a>
                <?php }
            ?>
        </td>
    </tr>
</table>

</body>
</html>