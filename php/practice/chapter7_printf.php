<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>




<?php
printf("My name is %s. I'm %d years old, which is %X in hexadecimal",
'Simon', 33, 33);
?><br><br>

<?php
printf("<span style='color:#%X%X%X'>Hello</span>", 65, 127, 245);
?><br><br>

<b>Precision Setting</b><br>

Example 7-1. Precision setting<br>
<?php
echo "<pre>"; // Enables viewing of the spaces
// Pad to 15 spaces
printf("The result is $%15f\n", 123.42 / 12);
// Pad to 15 spaces, fill with zeros
printf("The result is $%015f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision
printf("The result is $%15.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with zeros
printf("The result is $%015.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
printf("The result is $%'#15.2f\n", 123.42 / 12);
?>


<b>String Padding</b><br>
Example 7-2. String padding<br>
<?php
echo "<pre>"; // Enables viewing of the spaces
$h = 'Rasmus';
printf("[%s]\n", $h); // Standard string output
printf("[%12s]\n", $h); // Right justify with spaces to width 12
printf("[%-12s]\n", $h); // Left justify with spaces
printf("[%012s]\n", $h); // Zero padding
printf("[%'#12s]\n\n", $h); // Use the custom padding character '#'
$d = 'Rasmus Lerdorf'; // The original creator of PHP
printf("[%12.8s]\n", $d); // Right justify, cutoff of 8 characters
printf("[%-12.12s]\n", $d); // Left justify, cutoff of 12 characters
printf("[%-'@12.10s]\n", $d); // Left justify, pad '@', cutoff 10 chars
?><br>

<?php
$out = sprintf("The result is: $%.2f", 123.42 / 12);
echo $out;
?>

























</body>
</html>