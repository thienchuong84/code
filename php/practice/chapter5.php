<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>

<b>Questions</b><br>
1. What is the main benefit of using a function? This is a second sentence in the list.<br>
2. How many values can a function return?<br>
3. What is the difference between accessing a variable by name and by reference?
This is a second sentence in the list.<br>
4. What is the meaning of scopein PHP?<br>
5. How can you incorporate one PHP file within another? This is a second sentence
in the list.<br>
6. How is an object different from a function?<br>
7. How do you create a new object in PHP?<br>
8. What syntax would you use to create a subclass from an existing one?<br>
9. How can you call an initializing piece of code when an object is created?<br>
10. Why is it a good idea to explicitly declare properties within a class? This is a sec‐
ond sentence in the list.<br><br><br><br><br><br>

<?php
print("print is a pseudo-function fname");
print "print doesn't require parentheses";
?><br>

<?php
echo strrev(" .dlrow olleH")."<br>"; // Reverse string
echo str_repeat("Hip ", 2)."<br>"; // Repeat string
echo strtoupper("hooray!")."<br>"; // String to uppercase
?>

<?php print(5-8); ?><br>

<?php print(abs(5-8)); ?><br>

<b>Returning a Value</b>
<?php $lowered = strtolower("aNY # of Letters and Punctuation you WANT"); echo $lowered; ?><br>

<?php $ucfixed = ucfirst("any # of letters and punctuation you want"); echo $ucfixed; ?><br>

<?php $ucfixed2 = ucfirst(strtolower("aNY # of Letters and Punctuation you WANT")); echo $ucfixed2; ?><br>

<?php
echo fix_names("WILLIAM", "henry", "gatES");
function fix_names($n1, $n2, $n3) {
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	return $n1 . " " . $n2 . " " . $n3;
} ?><br><br>

<b>Returning an Array</b><br>
<?php
$names = fix_names2("WILLIAM", "henry", "gatES");
echo $names[0] . " " . $names[1] . " " . $names[2];
function fix_names2($n1, $n2, $n3) {
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	return array($n1, $n2, $n3);
} ?><br>

<b>Do Not Pass Arguments by Reference. Example 5-4. Returning values from a function by reference</b></br>
<?php
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";
echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_names3($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3;
function fix_names3(&$n1, &$n2, &$n3) {
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
} ?><br><br>

<b>PHP Version Compatibility</b><br>
<?php
if (function_exists("array_combine"))
{
echo "Function exists";
}
else
{
echo "Function does not exist - better write our own";
}
?><br><br>

<b>Terminology</b>
<p>When creating a program to use objects, you need to design a composite of data and
code called a class.  Each new object based on this class is called an instance(or occur‐
rence) of that class.</p>
<p>The data associated with an object is called its  properties; the functions it uses are
called  methods.In defining a class, you supply the names of its properties and the
code for its methods. See  Figure 5-3for a jukebox metaphor for an object. Think of
the CDs that it holds in the carousel as its properties; the method of playing them is
to press buttons on the front panel. There is also the slot for inserting coins (the
method used to activate the object), and the laser disc reader (the method used to
retrieve the music, or properties, from the CDs).</p>
<p>When you’re creating objects, it is best to use encapsulation, or writing a class in such
a way that only its methods can be used to manipulate its properties. In other words,
you deny outside code direct access to its data. The methods you supply are known as
the object’s interface.</p>
<p>This approach makes debugging easy: you have to fix faulty code only within a class.
Additionally, when you want to upgrade a program, if you have used proper encapsu‐
lation and maintained the same interface, you can simply develop new replacement
classes, debug them fully, and then swap them in for the old ones. If they don’t work,
you can swap the old ones back in to immediately fix the problem before further
debugging the new classes.</p>
<p>Once you have created a class, you may find that you need another class that is simi‐
lar to it but not quite the same. The quick and easy thing to do is to define a new class
using inheritance. When you do this, your new class has all the properties of the one
it has inherited from. The original class is now called the  superclass, and  the new one
is the subclass(or derivedclass).</p>
<?php
/* // với ví dụ mẫ dưới đây , ta khai báo 1 lớp class với properties của nó là: $name và $password, method là save_user(),
		Khi print_r($object) ra , nó sẽ như thế này: User Object ( [name] => [password] => ) 

$object = new User;
print_r($object);

class User {
	public $name, $password;
	function save_user() {
		echo "Save User code goes here";
}
}*/
?><br><br>

<b>Accessing Objects</b><br>
<?php
$object = new User;				// khai báo biến $object sử dụng class User
print_r($object); echo "<br>";		// lúc này 2 properties trong class chưa có giá trị
$object->name = "Joe";
$object->password = "mypass";		// khai báo giá trị cho property password trong class User.  Usage: $object->property

print_r($object); echo "<br>";		// xuất lại để kiểm tra gtrị được gán ở trên

$object->save_user();		// cách sử dụng method save_user() , thức tế đây là 1 function, nhưng trong Object thì gọi là method
class User {
	public $name, $password;
	function save_user() {
		echo "Save User code goes here";
	}
}

// chú ý khi $object->property OR $object->method() thì ko có dấu $ phía trước property hay method()
?><br><br>

<b>Cloning Objects</b><br>
khi khai báo thế này nó sẽ refer đến giá trị sau gây ra tình trạng như dưới đây: <br>
<?php
$object1 = new User2();
$object1->name = "Alice";
$object2 = $object1;
$object2->name = "Amy";
echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name;
class User2{
	public $name;
}
?><br><br>
Thêm clone trước $object1 khi khai báo $object2 <br>
<?php
$object1 = new User3();
$object1->name = "Alice";
$object2 = clone $object1;
$object2->name = "Amy";
echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name;
class User3 {
	public $name;
}
?><br><br>

<b>Writing Methods</b><br>
<?php
class User4{
	public $name, $password;
	function get_password()	{
		return $this->password;
	}
}

$object = new User4;
$object->password = "secret";
echo $object->get_password();
?><br><br>

<b>Static Methods in PHP 5</b>
<p>If you are using PHP 5, you can also define a method as  static, which  means that it is
called on a class, not on an object. A static method has no access to any object prop‐
erties and is created and accessed as in</p>
<?php
User5::pwd_string();
class User5 {
	static function pwd_string() {
		echo "Please enter your password";
	}
}
?><br><br>

<b>Declaring Properties</b><br>
<?php
$object1 = new User6();
$object1->name = "Alice";
echo $object1->name;
class User6 {}
?><br><br>

<b>Example 5-20. Valid and invalid property declarations</b><br>
<?php
class Test {
public $name = "Paul Smith"; // Valid
public $age = 42; // Valid
//public $time = time() ; // Invalid - calls a function
//public $score = $level * 2; // Invalid - uses an expression
}
?><br><br>

<b>Declaring Constants</b><br>
Remember that once you define a constant, you can’t change it.<br>
<?php
Translate::lookup();
class Translate {
	const ENGLISH = 0;
	const SPANISH = 1;
	const FRENCH = 2;
	const GERMAN = 3;
	// ...
	static function lookup(){
		echo self::SPANISH;
	}
}
?><br><br>

<b>Property and Method Scope in PHP 5</b>
<p>PHP 5 provides three keywords for controlling the scope of properties and methods:<br>
	public<br>
These properties are the default when you are declaring a variable using the  var  or
publickeywords, or when a variable is implicitly declared the first time it is used.
The keywords varand public are interchangeable because, although deprecated, var
is retained for compatibility with previous versions of PHP. Methods are assumed to
be publicby default.<br>
protected<br>
These properties and methods (members) can be referenced only by the object’s class
methods and those of any subclasses.<br>
private<br>
These members can be referenced only by methods within the same class—not by
subclasses.<br>
Here’s how to decide which you need to use:<br>
• Use publicwhen outside code shouldaccess this member and extending classes
shouldalso inherit it.<br>
• Use  protectedwhen outside code  should notaccess this member but extending
classes shouldinherit it.<br>
• Use  privatewhen outside code  should notaccess this member and extending
classes also should notinherit it.</p>
<?php
class Example
{
var $name = "Michael"; // Same as public but deprecated
public $age = 23; // Public property
protected $usercount; // Protected property
	private function admin() {// Private method
	// Admin code goes here
	}
}
?><br><br>

<b>Static Properties and Methods</b><br>
<?php
$temp = new Test2();
echo "Test A: " . Test2::$static_property . "<br>";
echo "Test B: " . $temp->get_sp() . "<br>";
echo "Test C: " . $temp->static_property . "<br>"; // khi dùng câu lệnh này sẽ có lỗi như sau: Notice: Undefined property: Test2::$static_property in C:\xampp\htdocs\code\php\practice\chapter5.php on line 261
// bình thường nếu khai báo public thì ta sử dụng như trên ok, nhưng khi khai báo static thì lỗi, chú ý vần đề này
/* from ebook: this example shows that the property $static_property could be directly referenced from the class itself via the double colon operator in Test A.
Also, Test B could obtain its value by calling the get_sp method of the object $temp, createed from class Test. But Test C failed, because the static property 
$static_property was not accessible to the oject $temp.
  Noted: how the method get_sp() accesses $static_property using keyword self. This is how a static property or constant can be directly accessed within a class
*/
class Test2
{
static $static_property = "I'm static";
function get_sp()
{
return self::$static_property;
}
}
?><br><br>



<b>Inheritance</b><br>
use "extends" to mở rộng existing class<br>
<?php
$object = new Subscriber;
$object->name = "Fred";
$object->password = "pword";
$object->phone = "012 345 6789";
$object->email = "fred@bloggs.com";
$object->display();
class User7 {
	public $name, $password;
	function save_user() {
		echo "Save User code goes here";
	}
}
class Subscriber extends User7 {
	public $phone, $email;
	function display() {
		echo "Name: " . $this->name . "<br>";
		echo "Pass: " . $this->password . "<br>";
		echo "Phone: " . $this->phone . "<br>";
		echo "Email: " . $this->email;
}
}
?><br><br>




<b>The parent operator</b><br>
If you write a method in a subclass with the same name as one in its parent class, its statements will override those of the parent class.
Sometimes this is not the behavior you want, and to access the parent's method. To do this, you can use the parent operator, as in: Overriding a method and using the parent operator<br><br>

<?php
// Như ta thấy, class Son được extend to class Dad, và declare method test() same as test() of Dad class. howerver declare class and used method test() , it used test() of Son class.
// and we only used test() method of Dad class by "parent". "parent" được khai báo trong Son Class để báo nó là sử dụng test() này trong parent chứ ko phải chính nó
$object = new Son;
$object->test();
$object->test2();
class Dad {
	function test() {
		echo "[Class Dad] I am your Father<br>";
	}
}
class Son extends Dad {
	function test() {
		echo "[Class Son] I am Luke<br>";
	}
	function test2() {
		parent::test();
	}
}
?><br><br>



<b>Subclass constructors</b><br>
Example 5-26. Calling the parent class constructor<br>

<?php
$object = new Tiger_method_MoRong();
echo "Tigers have...<br>";
echo "Fur: " . $object->fur . "<br>";
echo "Stripes: " . $object->stripes;
class Wildcat_method_DauTien {
	public $fur; // Wildcats have fur
	function __construct() {
		$this->fur = "fur";
	}
}
class Tiger_method_MoRong extends Wildcat_method_DauTien {
	public $stripes; // Tigers have stripes
	function __construct() {
		parent::__construct(); // Call parent constructor first
		$this->stripes = "stripes";
	}
}
/* result is : 
		Tigers have...
		Fur: TRUE
		Stripes: TRUE
Khi ta khai báo $object sử dụng từ mở rộng, phần này hướng dẩn ta gọi __construct của method_DauTien
*/
?><br><br>

<b>Final methods</b><br>
When you wish to prevent a subclass from overriding a superclass method, you can
use the finalkeyword. Example 5-27shows how.<br>
Example 5-27. Creating a finalmethod<br>
class User {<br>
	final function copyright() {<br>
echo "This class was written by Joe Smith";<br>
}<br>
}<br><br><br>




</body>
</html>