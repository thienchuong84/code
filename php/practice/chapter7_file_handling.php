<html lang="en">
<head>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			font-family: sans-serif;
			font-size: 16px;
		}
		h1 {
			color: red;
		}
	</style>
</head>
<body>


<h1>File Handling</h1>
<p>
Powerful as it is, MySQL is not the only (or neccessarily the best) way to store all data on a web server.<br>
Sometimes it can be quicker and more convenient to directly access files on the hard disk. Cases in which <br>
you might need to do this are modifying images such as upload user avatars, or log files that you wish to provess<br><br>
First, though, a note about file naming: if you are writing code that may be ised on various PHP installations<br>
there is no way of knowing whether these systems are case-sensitive. For example, Window and Mac OS X filenames <br>
are not case-sensitive, but Linux and Unix ones are. therefore, you should always assume that the system is <br>
case-sensitive and stick to a convention such as all lowercase filenames.
</p>

<h2>checking Whether a File Exists</h2>
To determine whether a file already exists, you can use the file_exists function, which returns either TRUE or <br>
FALSE, and is used to like this:<br><br>
<code>if(file_exists("testfile.txt")) echo "File exists";</code><br><br>

<h2>Creating a file</h2>
<p>At this point, testfile.txt doesn't exists, so let's create it and write a few lines to it.<br>
Type Example 7-4 and save it as testfile.php<br><br>
Example 7-4. Creating a simple text file<br><br>
<code>$fh = fopen("testfile.txt", 'w') or die("Failed to create file");<br>
$text = &lt;&lt;&lt;_END<br>
Line 1<br>
Line 2<br>
Line 3<br>
_END;<br>
fwrite($fh, $text) or die("Could not write to file");<br>
fclose($fh);<br>
echo "File 'testfile.txt' written successfully";</code><br></p>

<p>When you run this in a browser, all being well, you will receive the message File 'testfile.txt' <br>
written successfully. If you receive an error message, your hard disk may be full or. more likely, <br>
you may not have permission to create a or write to the file, in which case you should modify the <br>
attributes of the destination folder according to your operating system. Otherwise, the file testfile.txt <br>
should now be residing in a the same folder in which you saved the testfile.php program. Try opening <br>
the file in a text or program editor - the contents will look like this: <br><br>
Line 1<br>
Line 2<br>
Line 3<br><br>
This simple example shows the sequence that all file handling takes : <br><br>
1. Always start by opening the file. You do this through a call to open.<br>
2. Then you can call other functions; here we write to the file (fwrite), but you can <br>
also read from an exsiting file (fread or fgets) and do other things.<br>
3. Finish by closing the file (fclose). Although the program does this for you when it ends, <br>
you should clean up by closing the file when you're finished.</p>

<2>Reading an Entire file</h2>
<p>A handy function for reading in an entire file without having to use file handles is
file_get_contents. It’s very easy to use, as you can see in Example 7-13.
<br><br>Example 7-13. Using file_get_contents<br><br>
<code>
echo "%lt;pre&gt;"; // Enables display of line feeds<br>
echo file_get_contents("testfile.txt");<br>
echo "&lt;/pre&gt;"; // Terminates pre tag<br>
</code></p>

<br>Example 7-14. Grabbing the O’Reilly home page<br><br>
<code>echo file_get_contents("http://oreilly.com");</code><br>

<h2>Uploading Files</h2>
<p>Uploading files to a web server is a subject that seems daunting to many people, but it <br>
actually couldn't be much easier. All you need to do to upload a file from form is <br>
choose a special type of encoding call "multipart/form-data", and your browser will <br>
handle the rest. To see how this works, type the program in Example 7-15 and save it <br>
as upload.php. When you run it, you'll see a form in your browser that lets you upload a file of your choice.<br><br>

Example 7-15: <br><br>

<code>
&lt;?php
echo &lt;&lt;&lt;_END
&lt;html&gt;&lt;head&gt;&lt;title&gt;PHP Form Upload&lt;/title&gt;&lt;/head&gt;&lt;body&gt;<br>
&lt;form method='post' action='upload.php' enctype='multipart/form-data'&gt;<br>
Select File: &lt;input type='file' name='filename' size='10'&gt;<br>
&lt;input type='submit' value='Upload'&gt;<br>
&lt;/form&gt;<br>
_END;<br><br>

if ($_FILES) {<br>
$name = $_FILES['filename']['name'];<br>
move_uploaded_file($_FILES['filename']['tmp_name'], $name);<br>
echo "Uploaded image '$name'&lt;br&gt;&lt;img src='$name'&gt;";<br>
}<br>
echo "&lt;/body&gt;&lt;/html&gt;";<br>
?&gt;<br>
</code>


<img src="chapter7_file_handling_01.png" /><br>
































</body>
</html>