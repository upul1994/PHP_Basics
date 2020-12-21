<?php
echo "Hello world";
echo "<br>";
echo "\"chamara\"";
echo "<br>";
echo 10;
echo "<br>";
print("Hello world")
?>


<?php
echo "<br>";
echo "<br>";

$name="chamara";
echo $name;
echo "<br>";
$age=25;
echo $age;

echo "<br>";
echo "<br>";
$_country="Sri lanka";
echo $_country;

echo "<br>";
echo "<br>";

$num1=10;
$num2=20;
$sum=$num1+$num2;
echo $sum;
echo "<br>";
echo "<br>";
?>

<?php
$firstName="Sunil";
$secondName="perera";
echo $firstName.$secondName;
echo "<br>";
echo "Full Name = $firstName $secondName";
echo "<br>";
$age=25;
echo "Full name=$firstName $secondName Age=".$age;
echo "<br>";
echo "<br>";
echo "Full name = $firstName $secondName.<br>Age=".$age;
echo "<br>";
var_dump($age); #we can print data type of the variable age
echo "<br>";
var_dump($firstName); #we can print data type of the variable firstName
echo "<br>";

$number=23.45;
var_dump($number);
echo "<br>";

define("NAME","chamara" );
echo constant("NAME");
echo "<br>";
define("AGE", 26);
echo constant("AGE");
echo "<br>";
echo "<br>";
?>

<!-- Functions of Strings -->

<?php
$word="Hello World";
echo strlen($word);

echo "<br>";
echo str_word_count($word);
echo "<br>";
echo "strrev=";
echo strrev($word);
echo "<br>";
echo "strpos="; // count from zero
echo strpos($word,"World");
echo "<br>";
echo "str replace=";
echo str_replace("World", "chamara", $word);
?>

<?php 

// Arithmatic Operators

$num1=12;
$num2=8;

$sum=$num1+$num2;
$sub=$num1-$num2;
echo $sum;
echo "<br>";
echo "sub= $sub";
echo "<br>";
echo "sub=".$sub;
echo "<br>";
$num2++;
$num1--;
echo $num2;
echo "<br>";
echo $num1;
echo "<br>";
echo "<br>";
?>

<?php

// Comparison Operators

$a=10;
$b=19;

var_dump($a==$b);
echo "<br>";
var_dump($a===$b);
echo "<br>";
echo $a<=>$b;
echo "<br>";
echo "<br>";
?>

<?php

// Logical Operators

$a=10;
$b=19;

var_dump($a and $b);
echo "<br>";
var_dump($a && $b);
echo "<br>";
echo "<br>";

?>

<?php

// Loops

# if else loop

$a=9;

if ($a>10) {
	echo "number is greater than 10";
}else{

    echo "number is less than 10";	
}
echo "<br>";
echo "<br>";

$color="red";

#Switch statement

switch ($color) {
	case 'red':
		echo "my favourite color is red";
		break;
	case 'green':
		echo "my favourite color is green";
		break;
	case 'blue':
		echo "my favourite color is blue";
		break;
	case 'black':
		echo "my favourite color is black";
		break;
	
	default:
		echo "somthing else";
		break;

}
echo "<br>";
echo "<br>";

#for loop

for ($x=0; $x <10 ; $x++) { 
	echo "x=$x<br>";
}
echo "<br>";
echo "<br>";

# while loop

$x=1;
while ( $x<= 10) {
	echo "x=$x <br>";
	$x++;
}
echo "<br>";
echo "<br>";

# do while loop

$x=6;

do {
	echo "x= $x <br>";
	$x++;

} while ($x <= 10);

echo "<br>";
echo "<br>";

# break

for ($x=0; $x <10 ; $x++) { 
	if ($x==6) 
		break;
echo "x=$x";
echo "<br>";

}

echo "<br>";
echo "<br>";

# continue

for ($x=0; $x <10 ; $x++) { 
	if ($x==6) 
		continue;
echo "x = $x";
echo "<br>";
echo "<br>";

}

# Example of continue

for ($x=1; $x <10 ; $x++) { 
	 if ($x%2==0)
	 	 continue;
echo "Odd numbers =$x <br>";
}

echo "<br>";
echo "<br>";

?>

<?php

#  Numerical Arrays

$marks = array(12,34,95,78,98,67);

echo $marks[1];

echo "<br>";
echo "<br>";

# Using for loop

for ($x=0; $x <6 ; $x++) { 
	 echo "$marks[$x],";
	 
}

echo "<br>";
echo "<br>";

# Using print_r function

$marks1[0]=12;
$marks1[1]=45;
$marks1[2]=56;
$marks1[3]=15;

print_r($marks1);

echo "<br>";
echo "<br>";

$marks1[0]=34;
$marks1[3]=56;

print_r($marks1);

echo "<br>";
echo "<br>";

# String Arrays

$colors = array("blue","green","red","blue","black");

print_r($colors);

echo "<br>";
echo "<br>";

$colors[0]="white";
print_r($colors);

echo "<br>";
echo "<br>";

?>

<?php  #Assosiative Arrays   ?>

<html>
<head>
	<title> first method</title>
</head>
<body>
<?php
$salary  = array("kamal"=>1000,"sunil"=>2000,"Amara"=>4500);
echo $salary['kamal'];
echo "<br>";
echo $salary['sunil'];

echo "<br>";
echo "<br>";


?>
</body>
</html>


<html>
<head>
	<title>second method</title>
</head>
<body>
<?php
$salary1['kamal']=1000;
$salary1['sunil']=500;
$salary1['amal']=1500;

echo $salary1['kamal'];
echo "<br>";
echo $salary1['sunil'];

echo "<br>";
echo "<br>";
print_r($salary1);

echo "<br>";
echo "<br>";
?>
</body>
</html>


<html>
<head>
	<title>Multidimensioanal Arrays</title>
</head>
<body>
<?php

$class= array("Maths"=> array(10,88,99),"English"=>array(23,56,89),"Science"=>array(23,67,98));
echo "<br>";


print_r($class);
echo "<br>";
echo "<br>";
echo $class['Maths'][1];
echo "<br>";
echo $class['Maths'][0];
echo "<br>";
echo "<br>";
$class['English'][1]=99;
echo "<br>";
echo $class['English'][1];



echo "<br>";
echo "<br>";
?>
</body>
</html>



<html>
<head>
	<title>Using pre tags</title>
</head>
<body>
<?php

$new=array("colors"=>array("white","green","blue"),"English"=>array(25,67,89));
echo "<br>";
print_r($new);

echo "<br>";
echo "<br>";

?>

<pre>
<?php
print_r($new) # display clear output when using <pre> tags.


?>
</pre>

<br><br>

</body>
</html>




<html>
<head>
	<title>For each loops </title>
</head>
<body>
<?php

$marks=array(12,45,67,89,43);

# using for each loop

foreach ($marks as $x) {
	echo $x."<br><br>";
}

echo "<br>";
echo "<br>";

?>



</body>
</html>



<html>
<head>
	<title>For each loops </title>
</head>
<body>
<?php

$class=array("English"=>33,"Tamil"=>45,"Maths"=>99,"Science"=>98);

# for each loop for assosiative arrays

foreach ($class as $key => $value) {
	echo "key=".$key." , "."value=".$value."<br>";

}

echo "<br>";
echo "<br>";

?>

</body>
</html>


<html>
<head>
	<title> Functions without Parameters</title>
</head>
<body>
<?php

# functions without parameters

function print1(){

	echo "This is function";
}
print1(); # call the function

echo "<br>";
echo "<br>";

?>
</body>
</html>


<html>
<head>
	<title> Functions with Parameters</title>
</head>
<body>
<?php

# functions with parameters

function sum($x,$y){
    $sum=$x+$y;
	echo "Sum= $sum";
}
sum(1,3); # call the function
echo "<br>";
sum(30,30);

echo "<br>";
echo "<br>";

?>
</body>
</html>


<html>
<head>
	<title> Global Variables</title>
</head>
<body>
<?php

# Global Variables

$number =100;
function sum1($x,$y){
    $sum=$x+$y+$GLOBALS['number'];  # $GLOBALS function 
	return $sum;
}

function sub($x,$y){
 $sub=$x-$y;
 return $sub;

}

$value1=sum1(3,4);
echo $value1."<br>";
echo sum1(3,7);
echo "<br>";
echo "Global Variable=".$number;

echo "<br><br>";
echo sub(10,6);

echo "<br>";
echo "<br>";

?>
</body>
</html>


<html>
<head>
	<title>Local Variables</title>
</head>
<body>
<?php

# Local Variables

function sum2($x1,$y1){
    $sum1=$x1+$y1;
    $number1 =20;
	return $sum1;
}
echo sum2(1,3); # call the function
echo "<br>";
echo sum2(30,30);
echo "<br>";
echo "Local Variable=".$number1;

echo "<br>";
echo "<br>";

?>
</body>
</html>


<html>
<head>
	<title>Static Variables</title>
</head>
<body>
<?php

# Static Variables

function show(){
  
  STATIC $count =0;  # STATIC or static 
  $count++;
  print($count."<br>");

}

show();
echo "<br>";
show();
echo "<br>";
show();

echo "<br>";
echo "<br>";

?>


<?php

# read data in another php file

include "new1.php";
require "new1.php";



?>




</body>
</html>
