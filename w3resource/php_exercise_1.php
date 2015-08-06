<div class="panel panel-primary">
  <div class="panel-heading">Template</div>
  <div class="panel-body">

  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 7 : Get the current file name</div>
  <div class="panel-body">
	<?php
	$current_file_name = basename($_SERVER['PHP_SELF']);
	echo $current_file_name;	
	?>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Return some component of an url</div>
  <div class="panel-body">
	<?php
	$url =  'http://www.w3resource.com/php-exercises/php-basic-exercises.php';
	$url = parse_url($url);
	echo 'Scheme : '.$url['scheme'].'<br />';
	echo 'Host : '.$url['host'].'<br />';
	echo 'Path : '.$url['path'].'<br />';
	?>
  </div>
</div>


<div class="panel panel-primary">
  <div class="panel-heading">Exercise 9: Change the color of first character</div>
  <div class="panel-body">
	<?php  
	$text = 'PHP Tutorial';  
	$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);  
	echo $text;  
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 10: Check whether the page is called from 'https' or 'http'</div>
  <div class="panel-body">
	<?php  
	if (!empty($_SERVER['HTTPS']))   
	{  
	  echo 'https is enabled';  
	}  
	else  
	{  
	echo 'http is enabled';  
	}  
	?>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 12: Email validation</div>
  <div class="panel-body">
  	<?php
  		$email = "mail@example.com";
  		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			echo '"'.$email.'" = Valid';
  		} else {
  			echo '"'.$email.'" = Invalid';
  		}
  	?>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 15: Get last modified ingormation of a file</div>
  <div class="panel-body">
	<?php  
	$file_last_modified = filemtime("php_exercise_1.php");   
	echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified);  
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 17: Print current PHP version</div>
  <div class="panel-body">
	<?php  
	echo 'Current PHP version : ' . phpversion();  
	  // prints e.g. '2.0' or nothing if the extension isn't enabled  
	  echo phpversion('tidy');  
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 16: Count number of lines in a file</div>
  <div class="panel-body">
	<?php  
	$file = "php_exercise_1.php";   
	$no_of_lines = count(file($file));   
	echo "There are $no_of_lines lines in $file";   
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 18: Delay the program execution for the specified number of seconds</div>
  <div class="panel-body">
	<?php  
	// current time  
	  echo date('h:i:s') . "<br>";  
	  // sleep for 5 seconds  
	  sleep(0);  
	  // wake up  
	  echo date('h:i:s')  
	?> 
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 19: Using a character type variable print numbers</div>
  <div class="panel-body">
	<?php  
	$d = 'A00';  
	  for ($n=0; $n<3; $n++)  
	{  
	echo ++$d .'<br>';  
	}  
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 20: Get the last occurred error</div>
  <div class="panel-body">
	<?php  
	echo $x;  
	  print_r(error_get_last());  
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 22: Get the full URL</div>
  <div class="panel-body">
	<?php
	$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	  echo $full_url;
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 24: Get the name of the owner of the current PHP script</div>
  <div class="panel-body">
	<?php  
	echo 'Current script owner: ' . get_current_user();  
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 25: Get the document root directory as defined in the server's configuration file</div>
  <div class="panel-body">
	<?php  
	// getenv() gets the value of an environment variable  
	$rd = getenv('DOCUMENT_ROOT');  
	echo $rd;  
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 26: Get the information about the OS PHP is running on</div>
  <div class="panel-body">
	<?php  
	 echo php_uname().'<br>';  
	echo PHP_OS.'<br>';  
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {  
	echo 'This is a server using Windows!';  
	} else {  
	echo 'This is a server not using Windows!';  
	}  
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 28: Get the directory path used for temporary file</div>
  <div class="panel-body">
	<?php  
	// Create a temporary file in the temporary   
	// files directory using sys_get_temp_dir()  
	$temp_file = tempnam(sys_get_temp_dir(), 'Tux');  
	echo $temp_file;  
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 29: Get the names of the functions of a module</div>
  <div class="panel-body">
	<?php  
	print_r(get_extension_funcs("JSON"));  
	echo '<br>';  
	print_r(get_extension_funcs("XML"));  
	?> 
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 30: Get the time of the last modification of the current page</div>
  <div class="panel-body">
	<?php  
	echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());  
	?> 
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Template</div>
  <div class="panel-body">

  </div>
</div>