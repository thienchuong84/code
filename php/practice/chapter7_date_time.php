<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>


<p>To keep track of the date and time, PHP uses standard Unix timestamps,  which are
simply the number of seconds since the start of January 1, 1970. To determine the
current timestamp, you can use the timefunction:</p>

<?php
echo time();
?>

<p>Because the value is stored as seconds, to obtain the timestamp for this time next
week, you would use the following, which adds 7 days times 24 hours times 60
minutes times 60 seconds to the returned value:<br>
echo time() + 7 * 24 * 60 * 60;</p>

<?php
echo time() + 7 * 24 * 60 * 60;
?>

<p>If you wish to create a timestamp for a given date, you can use the  mktime  function.
Its output is the timestamp  946684800for the first second of the first minute of the
first hour of the first day of the year 2000:<br>
echo mktime(0, 0, 0, 1, 1, 2000);</p>

<?php
echo mktime(0, 0, 0, 1, 1, 2000);
?>

<p>The parameters to pass are, in order from left to right:<br>
• The number of the hour (0–23)<br>
• The number of the minute (0–59)<br>
• The number of seconds (0–59)<br>
• The number of the month (1–12)<br>
• The number of the day (1–31)<br>
• The year (1970–2038, or 1901–2038 with PHP 5.1.0+ on 32-bit signed systems)</p>

<p>You may ask why you are limited to the years 1970 through 2038.
Well, it’s because the original developers of Unix chose the start of
the year 1970 as the base date that no programmer should need to
go before!<br><br>
Luckily, because (as of version 5.1.0) PHP supports systems using a
signed 32-bit integer for the timestamp, dates from 1901 to 2038
are allowed on them. However, that introduces a problem even
worse than the original because the Unix designers also decided
that nobody would be using Unix after about 70 years or so, and
therefore believed they could get away with storing the timestamp
as a 32-bit value—which will run out on January 19, 2038!<br><br>
This will create what has come to be known as the Y2K38 bug
(much like the millennium bug, which was caused by storing years
as two-digit values, and which also had to be fixed). PHP intro‐
ducedthe  DateTimeclass in version 5.2 to overcome this issue, but
it will work only on 64-bit architecture.</p><br>

<p>To display the date, use the  datefunction, which  supports a plethora of formatting
options, enabling you to display the date any way you wish. The format is as follows:<br>
date($format, $timestamp);</p>
<p>The parameter $formatshould be a string containing formatting specifiers as detailed
in  Table 7-4, and  $timestampshould be a Unix timestamp.  For the complete list of
specifiers, please see  http://php.net/manual/en/function.date.php. The following com‐
mand will output the current date and time in the format  "Thursday July 6th,
2017 - 1:38pm"</p>

<?php
echo date("l F jS, Y - g:ia", time());
?>

Table 7-4. Themajor date function format specifiers<br>
Day speciers<br>
d Day of month, two digits, with leading zeros 01to 31<br>
D Day of the week, three letters Monto Sun<br>
j Day of the month, no leading zeros 1to 31<br>
l Day of week, full names Sundayto Saturday<br>
N Day of week, numeric, Monday to Sunday 1to 7<br>
S Suffixfor day of month (useful with specifier j) st, nd, rd, or th<br>
w Day of week, numeric, Sunday to Saturday 0to 6<br>
z Day of year 0to 365<br><br>
Week specier<br>
W Week number of year 01to 52<br>
Month speciers<br>
F Month name Januaryto December<br>
m Month number with leading zeros 01to 12<br>
M Month name, three letters Janto Dec<br>
n Month number, no leading zeros 1to 12<br>
t Number of days in given month 28to 31<br><br>
Year speciers<br>
L Leap year 1= Yes, 0= No<br>
y Year, 2 digits 00to 99<br>
Y Year, 4 digits 0000to 9999<br><br>
Time speciers<br>
a Before or after midday, lowercase amor pm<br>
A Before or after midday, uppercase AMor PM<br>
g Hour of day, 12-hour format, no leading zeros 1to 12<br>
G Hour of day, 24-hour format, no leading zeros 00to 23<br>
h Hour of day, 12-hour format, with leading zeros 01to 12<br>
H Hour of day, 24-hour format, with leading zeros 00to 23<br>
i Minutes, with leading zeros 00to 59<br>
s Seconds, with leading zeros 00to 59<br><br>

<img src="chapter7_date_time_01.png" /><br>
<img src="chapter7_date_time_02.png" /><br>

<p><b>Date Constants</b><br>
There are a number of useful constants that you can use with the date  command to
return the date in specific formats.For example, date(DATE_RSS)returns the current
date and time in the valid format for an RSS feed. Some of the more commonly used
constants are as follows:<br><br>
DATE_ATOM<br>
This is the format for Atom feeds. The PHP format is "Y-m-d\TH:i:sP"and example
output is "2018-08-16T12:00:00+00:00".<br><br>
DATE_COOKIE<br>
This is the format for cookies set from a web server or JavaScript. The PHP format is
"l, d-M-y H:i:s T"and example output is  "Thursday, 16-Aug-18 12:00:00
UTC".<br><br>
DATE_RSS<br>
This is the format for RSS feeds. The PHP format is "D, d M Y H:i:s O"and exam‐
ple output is "Thu, 16 Aug 2018 12:00:00 UTC".<br><br>
DATE_W3C<br>
This is the format for the World Wide Web Consortium. The PHP format is "Y-m-d
\TH:i:sP"and example output is "2018-08-16T12:00:00+00:00".
The complete list can be found at http://php.net/manual/en/class.datetime.php.</p><br><br>


<p><b>Using checkdate</b><br><br>
You’ve seen how to display a valid date in a variety of formats. But how can you check
whether a user has submitted a valid date to your program? The answer is to pass the
month, day, and year to the checkdatefunction, which returns a value of  TRUEif the
date is valid, or FALSEif it is not.<br><br>
For example, if February 30 of any year is input, it will always be an invalid date.
Example 7-3 shows code that you could use for this. As it stands, it will find the given
date invalid.<br><br>
Example 7-3. Checking for the validity of a date</p>

<?php
$month = 9; // September (only has 30 days)
$day = 31; // 31st
$year = 2018; // 2018
if (checkdate($month, $day, $year)) echo "Date is valid";
else echo "Date is invalid";
?>












</body>
</html>