<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>

<p>
	Questions<br>
1. What is the difference between a numeric and an associative array?<br>
2. What is the main benefit of the arraykeyword?<br>
3. What is the difference between foreachand each?<br>
4. How can you create a multidimensional array?<br>
5. How can you determine the number of elements in an array?<br>
6. What is the purpose of the explodefunction?<br>
7. How can you set PHP’s internal pointer into an array back to the first element of
the array?<br>
See Chapter 6 Answersin Appendix Afor the answers to these questions.</p>



<b>Example 6-1. Adding items to an array</b><br><br>

<code>$paper[] = "Copier";<br>
$paper[] = "Inkjet";<br>
$paper[] = "Laser";<br>
$paper[] = "Photo";<br>
print_r($paper);</code><br><br>
Result: <br>
<?php
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";
print_r($paper);
?><br><br>

<b>Example 6-2. Adding items to an array using explicit locations</b><br><br>

<code>$paper[0] = "Copier";<br>
$paper[1] = "Inkjet";<br>
$paper[2] = "Laser";<br>
$paper[3] = "Photo";<br>
print_r($paper);</code><br><br>

<b>Example 6-3. Adding items to an array and retrieving them</b><br><br>
<code>$paper[] = "Copier";<br>
$paper[] = "Inkjet";<br>
$paper[] = "Laser";<br>
$paper[] = "Photo";<br><br>
for ($j = 0 ; $j < 4 ; ++$j)<br>
echo "$j: $paper[$j]&#60br&#62";</code><br><br>
Result: <br>
<?php
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";
for ($j = 0 ; $j < 4 ; ++$j)
echo "$j: $paper[$j]<br>";
?><br><br>

<b>Associative Arrays</b><br>
Example 6-4. Adding items to an associative array and retrieving them<br><br>
<code>$paper['copier'] = "Copier &amp; Multipurpose";<br>
$paper['inkjet'] = "Inkjet Printer";<br>
$paper['laser'] = "Laser Printer";<br>
$paper['photo'] = "Photographic Paper";<br><br>
echo $paper['laser'];</code><br><br>


<b>The foreach...as Loop</b><br>
Example 6-6. Walking through a numeric array using foreach...as<br>
<code>$paper = array("Copier", "Inkjet", "Laser", "Photo");<br>
$j = 0;<br>
<b style="color:red">foreach($paper as $item)</b> {<br>
echo "$j: $item&lt;br&gt;";<br>
++$j;<br>
}</code><br><br>
Result: <br>
<?php
$paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;
foreach($paper as $item) {
	echo "$j: $item<br>";
	++$j;
}
?><br><br>


Example 6-7. Walking through an associative array using foreach...as<br>
<code>$paper = array('copier' => "Copier &amp; Multipurpose",<br>
'inkjet' => "Inkjet Printer",<br>
'laser' => "Laser Printer",<br>
'photo' => "Photographic Paper");<br>
<b style="color:red">foreach($paper as $item => $description)</b><br>
echo "$item: $description&lt;br&gt;";</code><br><br>
<?php
$paper = array('copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper");
foreach($paper as $item => $description)
echo "$item: $description<br>";
?><br><br>

Example 6-8. Walking through an associative array using each and list<br>
<code>
$paper = array('copier' => "Copier &amp; Multipurpose",<br>
'inkjet' => "Inkjet Printer",<br>
'laser' => "Laser Printer",<br>
'photo' => "Photographic Paper");<br>
<b style="color:red">while (list($item, $description) = each($paper))</b><br>
echo "$item: $description&lt;br&gt;";<br>
</code><br>
<?php
$paper = array('copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper");
while (list($item, $description) = each($paper))
echo "$item: $description<br>";
?><br><br>

<p>You can see how list works a little more clearly in Example 6-9, where an array is create out of <br>
the two string Alice and Bob and then passed to the list function, which assigns those strings as values to the variables $a and $b</p>
Example 6-9. Using the list function<br>
<code>list($a, $b) = array('Alice', 'Bob');<br>
echo "a=$a b=$b";</code><br><br>
<?php
list($a, $b) = array('Alice', 'Bob');
echo "a=$a b=$b";
?><br><br>

<b>Multidimensional Arrays</b><br><br>
Example 6-10. Creating a multidimensional associative array<br>
<code>$products = array(<br><br>
'paper' => array(<br>
'copier' => "Copier &amp; Multipurpose",<br>
'inkjet' => "Inkjet Printer",<br>
'laser' => "Laser Printer",<br>
'photo' => "Photographic Paper"),<br><br>
'pens' => array(<br>
'ball' => "Ball Point",<br>
'hilite' => "Highlighters",<br>
'marker' => "Markers"),<br><br>
'misc' => array(<br>
'tape' => "Sticky Tape",<br>
'glue' => "Adhesives",<br>
'clips' => "Paperclips"<br>
)<br>
);<br>
echo "&lt;pre&rt;";<br>
<b style="color: red">foreach($products as $section => $items)<br>
foreach($items as $key => $value)</b><br>
echo "$section:\t$key\t($value)&lt;br&rt;";<br>
echo "&lt;/pre&rt;";</code><br><br>
<?php
$products = array(
'paper' => array(
'copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper"),
'pens' => array(
'ball' => "Ball Point",
'hilite' => "Highlighters",
'marker' => "Markers"),
'misc' => array(
'tape' => "Sticky Tape",
'glue' => "Adhesives",
'clips' => "Paperclips"
)
);
echo "<pre>";
foreach($products as $section => $items)
foreach($items as $key => $value)
echo "$section:\t$key\t($value)<br>";
echo "</pre>";
?><br><br>

Example 6-11. Creating a multidimensional numeric array<br>
<code>
$chessboard = array(<br>
array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),<br>
array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),<br>
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),<br>
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),<br>
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),<br>
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),<br>
array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),<br>
array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')<br>
);<br>
echo "&lt;pre&gt;";<br>
<b style="color: red">foreach($chessboard as $row) { <br>
foreach ($row as $piece)</b><br>
echo "$piece ";<br>
echo "<br>";<br>
}<br>
echo "&lt;/pre&gt;";<br>
</code><br>

<?php
$chessboard = array(
array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
);
echo "<pre>";
foreach($chessboard as $row)
{
foreach ($row as $piece)
echo "$piece ";
echo "<br>";
}
echo "</pre>";
?><br><br>

<b>Using Array Functions</b><br><br>
<b style="color: red">is_array</b><br>
<code>echo (is_array($fred)) ? "Is an array" : "Is not an array";</code><br><br>

<b style="color: red">count</b><br>
<code>echo count($fred);<br>
echo count($fred, 1);</code><br>
The second parameter is optional and sets the mode to use. It should be either a 0  to
limit counting to only the top level, or  1to force recursive counting of all subarray
elements too.<br><br>

<b style="color: red">sort</b><br>
Sorting is so common that PHP provides a built-in function. In its simplest form, you
would use it like this:<br>
<code>sort($fred);</code><br><br>
Unlike some other functions, sortwill act directly on the supplied array rather than
returning a new array of sorted elements. Instead, it returns  TRUE  on success and
FALSE on error and also supports a few flags, but the main two that you might wish to
use force sorting to be made either numerically or as strings, like this:<br>
<code>sort($fred, SORT_NUMERIC);<br>
sort($fred, SORT_STRING);</code><br><br>
You can also sort an array in reverse order using the rsortfunction, like this:<br>
<code>rsort($fred, SORT_NUMERIC);<br>
rsort($fred, SORT_STRING);</code><br><br>

<b>shuffle</b><br>
<code>shuffle($cards);</code><br><br>

<b style="color: red">explode</b><br>
This is a very useful function with which you can take a string containing several items separated by <br>
a single character (or string of characters) and then place each of these item into an array. Once handy <br>
exmaple is to split up a sentence into an array containing all its words, as in Example 6-12 : <br><br>

<b>Example 6-12. Exploding a string into an array using spaces</b><br><br>
<code> $temp = explode(' ', "This is a sentence with seven words");<br>
print_r($temp);</code><br><br>

<?php
$temp = explode(' ', "This is a sentence with seven words");
print_r($temp);
?><br><br>

<b>Example 6-13. Exploding a string delimited with *** into an array</b><br><br>
<code>
$temp = explode('***', "A***sentence***with***asterisks");<br>
print_r($temp);	
</code><br><br>

<?php
$temp = explode('***', "A***sentence***with***asterisks");
print_r($temp);
?><br><br>

<b>compact</b><br><br>
A<p>t times you may want to use  compact, the inverse of  extract, to create an array
from variables and their values.  Example 6-14shows how you might use this func‐
tion.<p>
Example 6-14. Using the compact function<br><br>
<code>
$fname = "Doctor";<br>
$sname = "Who";<br>
$planet = "Gallifrey";<br>
$system = "Gridlock";<br>
$constellation = "Kasterborous";<br>
$contact = compact('fname', 'sname', 'planet', 'system', 'constellation');<br>
print_r($contact);<br>
</code><br><br>

<?php
$fname = "Doctor";
$sname = "Who";
$planet = "Gallifrey";
$system = "Gridlock";
$constellation = "Kasterborous";
$contact = compact('fname', 'sname', 'planet', 'system', 'constellation');
print_r($contact);
?><br><br>


<b>reset</b><br>
<p>When the  foreach...as  constructor the  each  functionwalks through an array, it
keeps an internal PHP pointer that makes a note of which element of the array it
should return next. If your code ever needs to return to the start of an array, you can
issue reset, which also returns the value of that element. Examples of how to use this
function are as follows:</p>
<code>reset($fred); // Throw away return value
$item = reset($fred); // Keep first element of the array in $item</code>


<br><br><b>end</b><br>
As with reset, you can move PHP’s internal array pointer to the final element in an
array using the endfunction, which also returns the value of the element, and can be
used as in these examples:<br><br>
<code>end($fred);
$item = end($fred);</code><br><br>
This chapter concludes your basic introduction to PHP, and you should now be able
to write quite complex programs using the skills you have learned. In the next chap‐
ter, we’ll look at using PHP for common, practical tasks.<br><br>


































</body>
</html>