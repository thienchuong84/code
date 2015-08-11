<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>

<?php
$author = "Steve Ballmer";
echo "Developers, Developers, developers, developers, developers,
developers, developers, developers, developers!
- $author.<br />";
//echo $author;

$author = "Bill Gates";
$text = "Measuring programming progress by lines of code is like
Measuring aircraft building progress by weight.
- $author.";
echo $text;
?>

<?php
$author = "Brian W. Kernighan";
echo <<<_END
<br /><br />Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are,
by definition, not smart enough to debug it.
- $author.
_END;
?>

<?php
$author = "Scott Adams";
$out = <<<_END
<br /><br />Normal people believe that if it ain't broke, don't fix it.
Engineers believe that if it ain't broke, it doesn't have enough
features yet.
- $author.
_END;
echo $out;
?><br>

<?php
$number = 12345 * 67890;
echo substr($number, 3, 1);
?><br />

<?php
$pi = "3.1415927";
$radius = 5;
echo $pi * ($radius * $radius);
?><br />

<?php
echo "This is line " . __LINE__ . " of file " . __FILE__;
?><br />

<?php
$b ? print "TRUE" : print "FALSE";
?><br /><br />

Function :
<?php
function longdate($timestamp)
{
return date("l F jS Y", $timestamp);
}
echo longdate(time());
?><br />
If you need to print out the date 17 days ago, you now just have to issue the following call:<br/>
which passes to  longdatethe current Unix timestamp less the number of seconds
since 17 days ago (17 days × 24 hours × 60 minutes × 60 seconds).<br />
<?php
echo longdate(time() - 17 * 24 * 60 * 60);
?><br /><br />

Cách dùng biến trong function :
<?php
/*	Khi dùng như cách dưới đây, có thông báo lỗi $temp trong function ko tồn tại
$temp = "The date is ";
echo longdate(time());
function longdate($timestamp)
{
return $temp . date("l F jS Y", $timestamp);
}

   Vì vậy cần phải edit lại như 2 cách dưới đây
$temp = "The date is ";
echo $temp . longdate(time());
function longdate($timestamp)
{
return date("l F jS Y", $timestamp);
}
*/ 
$temp = "The date is ";
echo longdate2($temp, time());

function longdate2($text, $timestamp)
{
return $text . date("l F jS Y", $timestamp);
}
?><br /><br />

Superglobal name : <br/>
<?php
//print_r($GLOBALS);echo "<br /><br /><br />";
var_dump($GLOBALS);
?>

<br /><br>htmlentities to sanitize superglobal :<br/>
<?php
$came_from = $_SERVER['HTTP_REFERER']; echo $came_from;
$came_from = htmlentities($_SERVER['HTTP_REFERER']);
echo "<br /> biến came_from đã entities : ".$came_from;
?>








</body>
</html>