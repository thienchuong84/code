<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>
<b>Questions</b><br />
1. What tag is used to cause PHP to start interpreting program code? And what is
the short form of the tag?<br />
2. What are the two types of comment tags?<br />
3. Which character must be placed at the end of every PHP statement?<br />
4. Which symbol is used to preface all PHP variables?<br />
5. What can a variable store?<br />
6. What is the difference between $variable = 1and $variable == 1?<br />
7. Why do you suppose that an underscore is allowed in variable names
($current_user), whereas hyphens are not ($current-user)?<br />
8. Are variable names case-sensitive?<br />
9. Can you use spaces in variable names?<br />
10. How do you convert one variable type to another (say, a string to a number)?<br />
11. What is the difference between ++$jand $j++?<br />
12. Are the operators &&and andinterchangeable?<br />
13. How can you create a multiline echoor assignment?<br />
14. Can you redefine a constant?<br />
15. How do you escape a quotation mark?<br />
16. What is the difference between the echoand printcommands?<br />
17. What is the purpose of functions?<br />
18. How can you make a variable accessible to all parts of a PHP program?<br />
19. If you generate data within a function, what are a couple of ways to convey the
data to the rest of the program?<br />
20. What is the result of combining a string with a number?<br />
See Chapter 3 Answersin Appendix Afor the answers to these questions<br />






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