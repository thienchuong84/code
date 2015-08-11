<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>

Expression : TRUE or FALSE. Example : <br />
<?php
echo "a: [" . (20 > 9) . "]<br>";
echo "b: [" . (5 == 6) . "]<br>";
echo "c: [" . (1 == 0) . "]<br>";
echo "d: [" . (1 == 1) . "]<br>";
?><br />
Noted : in PHP contant FALSE is defined as NULL, or nothing. To cerify this for yourself, you could enter the code in : <br />
<?php // test2.php
echo "a: [" . TRUE . "]<br>";
echo "b: [" . FALSE . "]<br>";
?><br />

Xét dấu == và === như ví dụ sau : <br />
<?php
$a = "1000";
$b = "+1000";
if ($a == $b) echo "1";
if ($a === $b) echo "2";
?><br />
Như vậy với === , PHP sẽ prevents việc automativally converting types of variables trước khi compare <br />
<?php
$a = "1000";
$b = "+1000";
if ($a != $b) echo "1";
if ($a !== $b) echo "2";
?><br /><br />

Comparison operators:<br />
<?php
$a = 2; $b = 3;
if ($a > $b) echo "$a is greater than $b<br>";
if ($a < $b) echo "$a is less than $b<br>";
if ($a >= $b) echo "$a is greater than or equal to $b<br>";
if ($a <= $b) echo "$a is less than or equal to $b<br>";
?><br /><br />

Logical operators: <br />
Logical operators produce true-or-false results, and thereforce are also known as Boolean opearators. There are four of them
<?php
$a = 1; $b = 0;
echo ($a AND $b) . "<br>";
echo ($a or $b) . "<br>";
echo ($a XOR $b) . "<br>";
echo !$a . "<br>";
?><br /><br />

Tại sao dùng switch: <br />
<?php
$page ="About";

if ($page == "Home") echo "You selected Home";
elseif ($page == "About") echo "You selected About";
elseif ($page == "News") echo "You selected News";
elseif ($page == "Login") echo "You selected Login";
elseif ($page == "Links") echo "You selected Links";


switch ($page)
{
case "Home":
echo "You selected Home";
break;
case "About":
echo "You selected About";
break;
case "News":
echo "You selected News";
break;
case "Login":
echo "You selected Login";
break;
case "Links":
echo "You selected Links";
break;
default:
echo "Unrecognized selection";
break;
}
?><br /><br />

The ? Operator: <br />
<?php
$fuel = 2;
echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
$enough = $fuel <= 1 ? FALSE : TRUE;
echo $enough;
?><br />
If you find the  ?operator confusing, you are free to stick to  ifstatements, but you
should be familiar with it, because you’ll see it in other people’s code. It can be hard to
read, because it often mixes multiple occurrences of the same variable. For instance,
code such as the following is quite popular:<br />
$saved = $saved >= $new ? $saved : $new;<br />
If you take it apart carefully, you can figure out what this code does:<br />
$saved = // Set the value of $saved to...<br />
$saved >= $new // Check $saved against $new<br />
? // Yes, comparison is true ...<br />
$saved // ... so assign the current value of $saved<br />
: // No, comparison is false ...<br />
$new; // ... so assign the value of $new<br /><br />

<?php
$fp = fopen("text.txt", 'wb');
for ($j = 0 ; $j < 100 ; ++$j)
{
$written = fwrite($fp, "data");
if ($written == FALSE) break;
}
fclose($fp);
?>

<?php
$j = 10;
while ($j > -10)
{
$j--;
if ($j == 0) continue;
echo (10 / $j) . "<br>";
}
?><br />

Implicit and Explicit Casting : <br />
<?php
$a = 56;
$b = 12;
$c = $a / $b;
echo $c."<br />";
$c = (int) ($a / $b);
echo $c."<br />";
?>









</body>
</html>