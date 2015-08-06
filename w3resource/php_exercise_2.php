<div class="panel panel-primary">
  <div class="panel-heading">Exercise 3: Display array keys and values</div>
  <div class="panel-body">
	<?php  
	$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",  
	"Belgium"=> "Brussels") ;  
	asort($ceu) ;  
	foreach($ceu as $country => $capital)  
	{  
	echo "The capital of $country is $capital <br>" ;  
	}  
	?> 
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 4: Delete an element from an array</div>
  <div class="panel-body">
  	<?php
  		$x = array(1, 2, 3, 4, 5);
  		var_dump($x);
  		unset($x[3]);
  		$x = array_values($x);
  		echo '<br />';
  		var_dump($x);
  	?>
  </div>
</div>


<div class="panel panel-primary">
  <div class="panel-heading">Exrcise 5: Get the first element from an array</div>
  <div class="panel-body">
	<?php
		$color = array(4=>'white', 6=>'green', 11=>'red');
		echo reset($color);//echo reset($color);
	?>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 6: Decode a JSON string</div>
  <div class="panel-body">
	<?php  
	function w3rfunction($value,$key)  
	{  
	echo "$key : $value<br>";  
	}  
	$a = '{"Title": "The Cuckoos Calling",  
	"Author": "Robert Galbraith",  
	"Detail":  
	{   
	"Publisher": "Little Brown"  
	 }  
	  }';  
	$j1 = json_decode($a,true);  
	array_walk_recursive($j1,"w3rfunction");  
	?>  
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 7: Insert a new item in an array on any position</div>
  <div class="panel-body">
	<?php  
		$original = array('1','2','3','4','5') ;
		echo 'Original array : <br />';
		foreach($original as $x){
			echo "$x ";
		}
		$inserted = '$';
		array_splice($original, 3, 0, $inserted); // nếu sữa 0 thành 1 thì nó đè vào vị trí đó
		echo "<br />After inserting '$' the array is :<br />";
		foreach($original as $x){
			echo "$x ";
		}
	?>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 8: Sort an associative array</div>
  <div class="panel-body">
	<?php  
	echo "Associative array : Ascending order sort by value  <br />";  
	$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39"); asort($array2);  
	foreach($array2 as $y=>$y_value)  
	{  
	echo "Age of ".$y." is : ".$y_value."  
	";  
	}  
	echo "<br />  Associative array : Ascending order sort by Key  <br />";  
	$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); ksort($array3);  
	foreach($array3 as $y=>$y_value)  
	{  
	echo  
	"Age of ".$y." is : ".$y_value."  
	";  
	}  
	echo "<br />  Associative array : Descending order sorting by Value  <br />";  
	$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");  
	arsort($age);  
	foreach($age as $y=>$y_value)  
	{  
	echo "Age of ".$y." is : ".$y_value."  
	";  
	}  
	echo "<br />  Associative array : Descending order sorting by Key  <br />";  
	$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); krsort($array4);  
	foreach($array4 as $y=>$y_value)  
	{  
	echo "Age of ".$y." is : ".$y_value."  
	";  
	}   
	?>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Exercise 9: Calculate and display average temperrature</div>
  <div class="panel-body">
<?php  
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";  
$temp_array = explode(',', $month_temp); 
$tot_temp = 0;  
$temp_array_length = count($temp_array);  
foreach($temp_array as $temp)  
{  
 $tot_temp += $temp;  
}  
 $avg_high_temp = $tot_temp/$temp_array_length;  
 echo "Average Temperature is : ".$avg_high_temp."  
";   
sort($temp_array);  
echo "<br> List of seven lowest temperatures : ";  
for ($i=0; $i< 5; $i++)  
{   
echo $temp_array[$i].", ";  
}  
echo "<br>List of seven highest temperatures : ";  
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)  
{  
echo $temp_array[$i].", ";  
}  
?>
  </div>
</div>

