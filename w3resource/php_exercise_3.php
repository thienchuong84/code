<div class="panel panel-primary">
  <div class="panel-heading">PHP Class Exercises : Display a string</div>
  <div class="panel-body">
<?php  
class MyClass {  
  public function __construct()   
  {  
   echo 'MyClass class has initialized !';  
  }  
 }  
$userclass = new MyClass;  
?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">PHP Class Exercises: An introductory message as an argument value of the method within the class</div>
  <div class="panel-body">
	<?php  
	class user_message {  
	 public $message = 'Hello All, I am ';  
	 public function introduce($name)  
	 {  
	  return $this->message.$name;  
	 }  
	 }  
	$mymessage = New user_message();  
	echo $mymessage->introduce('Scott');  
	?>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">PHP Class Exercises : Calculator class which will accept two values as arguments</div>
  <div class="panel-body">
	<p>Write a PHP calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.
	<br />For example :
	<br />$mycalc = new MyCalculator( 12, 6); 
	<br />echo $mycalc- > add(); // Displays 18 
	<br />echo $mycalc- > multiply(); // Displays 72</p>

	<?php  
	class MyCalculator {  
	private $_fval, $_sval;  
	public function __construct( $fval, $sval ) {  
	$this->_fval = $fval;  
	$this->_sval = $sval;  
	}  
	public function add() {  
	return $this->_fval + $this->_sval;  
	}  
	public function subtract() {  
	return $this->_fval - $this->_sval;  
	}  
	public function multiply() {  
	return $this->_fval * $this->_sval;  
	}  
	public function divide() {  
	return $this->_fval / $this->_sval;  
	}  
	}  
	$mycalc = new MyCalculator(12, 6);   
	echo $mycalc-> add(); // Displays 18   
	echo $mycalc-> multiply(); // Displays 72  
	echo $mycalc-> subtract(); // Displays 6  
	echo $mycalc-> divide(); // Displays 2  
	?> 	
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">PHP Class Exercises : Convert string to Date and DateTime</div>
  <div class="panel-body">
  	<p>Write a PHP script to convert string to Date and DateTime.
	<br />Sample Date : '12-08-2004'
	<br />Expected Output : 2004-12-08
	<br />Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.</p>
	<?php  
	$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Ymd');  
	echo $dt.'<br/>';  
	$dt = DateTime::createFromFormat('m/d/Y', '12/08/2004')->format('Ymd');  
	echo $dt;  	
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Template</div>
  <div class="panel-body">

  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Template</div>
  <div class="panel-body">

  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Template</div>
  <div class="panel-body">

  </div>
</div>