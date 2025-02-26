<html lang="en"> <!--  you can write html in php,but-->
	<head>			<!-- you can't write php in html-->
		<meta charset="UTF-8">
		<title>PHP Review</title>
	</head>
<body>
	<!-- WELLCOME TO THE PERSONAL HYBERTEXT PREPROCSSOR (PHP) -->

	<?php //we have three ways of writing comments in php:
		echo "Hello ALI" . "Like him";//echo used to output something on the screen
		# you can use . to merge two things together
		
	?>
	<br>
	<?php 
		echo 8*5*2; 
		$var = "mohammed";
		$integerVar=999;
		$floateVar=33.79;/*variables in php are written using $ before the name of the variable and ; in the end of the statment.
		they can be strings,boolyan or integer
		you can't use space with variables nor put numbers after $*/
		echo $var;
		
		//you can put var in string with double cotation "" but you can't put it in strings using single cotation ''
		//example:
		$nameVar = "ALI";
		echo "my name is $nameVar";
		//you can use {} to seperate variables frome strings
		$nameVar = "ALI";
		echo "my name is{$nameVar}";



	?>
		
<!-- //////////////////// String Functions //////////////////// -->
<?php 
	$str = "MY NAME is Ali";
	$str1 = strtolower($str);/*function that make string lower case*/	
	echo $str1 ."<br>";	
	$str2 = strtoupper($str);/*function that make string upper case*/
	echo $str2;

	$str3 = ucfirst($str1);/*function that make the first letter upper case*/
	echo $str3;
	// lcfirst() is used to make first letter lower case

	echo "<br>";
	$str5 = ucwords($str1);//convert the first letter in each word into capital letter
	echo $str5;

	echo "<br>";
	$str6 = strrev($str1);//reverse the string
	echo $str6;

	echo "<br>";
	echo strlen($str);//strlen() returns the length of the string

	echo "<br>";
	$str7 = strstr($str, "Al");//find string inside string,similar to search and continue after finding the string
	echo $str7;
	
	echo "<br>";
	$str8=str_replace("Ali", "Ahmed", $str);//search and replace a word inside a string
	echo $str8;

	echo "<br>";
	$str0="  fuck   duck    ";
	$str9=trim($str0);//removes white space from the beginning and the ending of string
	echo $str9;



?>


<!-- ////////////////// NUMBERS MATH FUNCTIONS ////////////////// -->
<?php 
	$num1 = 2.67;
	$num2 = 5;
	$num3 = -56.6;
	$num4 = -6;

	echo abs($num4);
	echo "<br>";
	echo abs($num3);
	echo "<br>";
	echo ceil($num1);
	echo "<br>";
	echo floor($num1);
	echo "<br>";
	echo sqrt($num2);
	echo "<br>";
	echo decbin($num2);//convert a number into binary system
	echo "<br>";
	echo dechex($num3);//convert a number into hexadecimal system
	//convert a number from system to another:
	echo base_convert(number, frombase, tobase);
	//Example:
	echo "<br>";
	echo base_convert(10, 10, 2);
	//math operation:
	echo "<br>";
	echo ((10-1-4)*$num2)/2;
	echo "<br>";
	echo fmod(10, 100);//like the mod function in malab

	echo "<br>";
	echo pow(2, 4)//power function

	echo "<br>";
	echo rand();//give a random number
	echo "<br>";
	echo rand(2,10);//give a random number between 2 and 10

	$num5 = 2;
	$num6 = 4;
	echo $num5 -= $num6;
	echo "<br>";
	echo $num5 += $num6;
	echo "<br>";
	echo $num5 *= $num6;
	echo "<br>";
	echo $num5 /= $num6;
	echo "<br>";

	$n1 = 2;
	$n2 = 4;
	echo $n1++; //increase number by 1
	echo "<br>";
	echo $n2--; //decrease number by 1
	echo "<br>";
	echo $n1+=1; //another way to increase number by 1 echo does'nt show the increased number in this case
	echo "<br>";
	echo $n2-=2; //another way to decrease number by 2
	echo "<br>";

	$n3 = 1;
	$n4 = 5;
	echo "<br>";
	echo ++$n3;//echo shows the increased number in this case
	echo "<br>";
	echo --$n4;
	echo "<br>";
	$n5 = 34.694729;
	echo round($n5,3);//used to define how many degits to display after the comma,takes to inputs the first is the var and the second is the degits number

	$number1 = 2;
	$number3 = 345.5665;
	$number4 = 3.677;
	$number5 = 56;
	echo is_int($number1);
	echo "<br>";
	echo is_double($number3);
	echo "<br>";
	echo is_float($number4);
	echo "<br>";
	echo is_numeric($number5);
	
	echo "<br>";
 ?>



<!-- /////////////////////  PHP ARRAYS   /////////////////////  -->
<?php 
	/// indexed array:
$names = array("Mohamed","Ali","Mike");
$numbers = array(14,22,array("A","b","c"));
$ages = array(14,22,25);
echo $names[0];
echo "<br>";
echo $numbers[2][2];//echo element in array inside array

//adding things to existing arrays:
$ages[3] = 666;
echo "<br>";
echo $ages[3];
echo "<br>";

echo $names[] = "Lusfer";//adding a name into the end of the array
echo "<br>";
echo "<pre>";//used to display array in a better way
echo print_r($numbers);//show's all array
echo "<pre>";//used to display array in a better way

///////new way to define an indexed array:(as of php version >5.4)
$names2 = [1,2,3,5,6,7,87,"ALi"];
echo "<pre>";
echo print_r($names2);
echo "<pre>";

////Assosiative array:////
$salalry = array('Mohamed' => 100 ,'Ali' => 200 );
echo "<pre>";
echo print_r($salalry);
echo "<pre>";
echo "<br>";
echo $salalry["Mohamed"];

//Multi dimenshenal Array:
$names5=array(
	array(1,"Ali",200),
	array(2,"mohamed",500),
	array(3,"Mike",2300),
);
echo "<pre>";
echo print_r($names5);
echo "<pre>";
echo "<br>";echo "<br>";
//for loop to chow multi diminsheal array
for ($row=0; $row <3 ; $row++) { 
	for ($col=0; $col <3 ; $col++) { 
		echo $names5[$row][$col]." ";
	}
	echo "<br>";
}

 ?>


 <!-- ////////////////////  Array Functions  //////////////////// -->
<?php 

<?php 
$names=array("Muhammed","Essa","Hameed");
echo $names[0];

//array_change_key_case()//this function changes all array keys

$names=array("m"=>"Muhammed","e"=>"Essa","h"=>"Hameed");

print_r(array_change_key_case($names,CASE_LOWER)); ///CASE_UPPER makes the keys capital letter,CASE_LOWER makes the keys small letter

//array_chunk(input, size) split the array into multiple array chunks defined by size:
echo "<pre>";
print_r(array_chunk($names, 2));
echo "</pre>";

//count(var) this function count the number of things inside an array or variable
echo count($names);
//sort should be used outside print_r or in for each
echo "<pre>";
print_r(sort($names));
echo "</pre>";

//sort function (used with foreach)//to sort by alphabet decsend
//or used on an array then you can display the array using
//print_r function
sort($names);
foreach ($names as $n) {

	echo $n."<br>";
}

//reverse array function://to sort by alphabet ascsend
$arr=array_reverse($names);
foreach ($arr as $a) {

	echo $a."<br>";
}

echo array_search("Essa", $names);//Search the array for a value and return the key if thet value exist


$names2=array("Ali","Ahmad","Kamel","basem");
$names3=array("Muhammed","Kamel","Hameed","basem");
//this function return the elements that exist in the two arrays
$interArray=array_intersect($names3, $names2);
echo "<pre>";
print_r($interArray);
echo "<pre>";
echo "<br>";


$names4=array("Muhammed","Kamel","Hameed","basem");
$num=array(2,4,6,5,8,79,0,43);

echo max($names4);//return's biggest value
echo "<br>";
echo min($names4);//return's the smallest value
echo "<br>";
echo max($num);//return's biggest value
echo "<br>";
echo min($num);//return's the smallest value

//sort function we took it before
sort($num);//first we sort the array,then we display it using print_r 


echo "<h3>Normal Sorted Array: ";
echo "<pre>";
print_r($num);
echo "<pre>";

rsort($num);//rsort like sort but reverse
echo "Reverse Sorted Array: ";
echo "<br>";
echo "<pre>";
print_r($num);
echo "<pre></h3>";


//implode(glue, pieces);//this function transform an array into a string and put the glue between the elements,Example:(glue should be a string)
echo implode("-", $names4);

$stringNames = "Muhammed,Kamel,Hameed,basem";

//explode(delimiter, string);//this function transform a string into an array and remove the delimiter EX:(",") from between the elements,Ex:

$stringArray = explode(",", $stringNames);
echo "<br><h3><pre>";
print_r($stringArray);
echo "<pre></h3>";

$num2=array(2,4,6,5,8,79,0,43);
//in_array(needle, haystack);//this function returns nothing or 1 if the needle exist in the haystack(array)
echo in_array(43, $num2);
echo "<br>";
echo in_array(12, $num2);


?>

<!-- //////////////////////  BOOLEANS in PHP  ////////////////////// -->
<?php 

//// Booleans are special type variables and they do not equal 1 or 0
$true_value=1;
$false_value=0;
$true_value1=true;
$false_value1=false;
$true_value2=TRUE;
$false_value2=FALSE;

echo $true_value."<br>";
echo $false_value."<br>";
echo $true_value1."<br>";
echo $false_value1."<br>";
echo $true_value2."<br>";
echo $false_value2."<br>";
echo "<br>";echo "<br>";
$va = 4;
if (is_int($va)) {
	echo "Yes";
}
echo "<br>";echo "<br>";
$va2 = 4.6;
if (is_int($va2)) {
	echo "Yes";
}else{
	echo "No";

 ?>

<!-- /////////////////////////  NULL Types:  /////////////////////////-->

<?php 
$name1 = null;
$name2 = "";
$name3 = 0;
$name4 = "0";

////empty values can be like this:
//"" ,null,NULL,0,"0",false,array()

//var_dump(expression);//display structure information about one or more expression include it's type and value array and objects are explored with value intended to show structure
/////usefull to find the type of data of a variable/////
var_dump($name1);
echo "<br>";
var_dump($name2);
echo "<br>";
var_dump($name3);
echo "<br>";
var_dump($name4);
echo "<br>";echo "<br>";

echo empty($name1);//check for a var if empty and return's 1
echo "<br>";
echo empty($name2);
echo "<br>";
echo empty($name3);
echo "<br>";
echo empty($name4);
echo "<br>";echo "<br>";

//isset(var);//check if var has been asigned a value and return's 1 if yes or null if no

echo isset($name1)." null";
echo "<br>";
echo isset($name2)." emptyString";
echo "<br>";
echo isset($name3)." zero";
echo "<br>";
echo isset($name4)." string with zero";
echo "<br>";echo "<br>";

echo is_null($name1)." null";
echo "<br>";
echo is_null($name2)." emptyString";
echo "<br>";
echo is_null($name3)." zero";
echo "<br>";
echo is_null($name4)." string with zero";
echo "<br>";echo "<br>";


 ?>

<!-- ///////////////////////  Type Casting  /////////////////////// -->

<?php 
////Casting: changing the variable type manually:
////there are two ways:
////this way it will change the type instantly
settype(var, type)//changes the type of a var
settype($foo, "array");
settype($foo, "bool");
settype($foo, "boolean");
settype($foo, "float");
settype($foo, "int");
settype($foo, "integer");
settype($foo, "null");
settype($foo, "object");
settype($foo, "string");

////change the type using this way:
//this way it will change the type later,not instantly
$foo = (array)$foo;
$foo = (binary)$foo;
$foo = (bool)$foo;
$foo = (boolean)$foo;
$foo = (double)$foo;
$foo = (float)$foo;
$foo = (int)$foo;//int = integer
$foo = (integer)$foo;
$foo = (object)$foo;
$foo = (real)$foo;
$foo = (string)$foo;


//juggling (letting php change the type of a var):

$foo = "0";
var_dump($foo);
echo "<br>";
$foo = 2;
var_dump($foo);
echo "<br>";
$foo = $foo + 1.3;
var_dump($foo);
echo "<br>";
$foo = 5 + "10 Little";
var_dump($foo);
echo "<br>";
$foo = "10.5 Mikies" . "10 Small";
var_dump($foo);
echo "<br>";

echo "<br>";echo "<br>";
//juggling:
$var = "6";
var_dump($var);
echo "<br>";
$var++;//this will make php convert the var into integer
var_dump($var);
echo "<br>";echo "<br>";
////////////////////////////
//casting:
$num = 6;
var_dump($num);
echo "<br>";
$num = (string)$num;
var_dump($num);
echo "<br>";echo "<br>";
///////////////////////////
$num1 = 6;
$num2 = 67;
$num3 = "10";
$num4 = (int)$num1;
// echo gettype($num1);//similar to var_dump
// echo "<br>";
// echo gettype($num2);
// echo "<br>";
echo "num3 is string, gettype:(".gettype($num3).")";
echo "<br>";
// echo gettype($num4);
$num5 = ++$num3;//$num3 is string and ++ before $num3 convert's it to integer
echo "<br>";
echo gettype($num5)."=".$num5;
echo "<br>";
$num6 = $num5."ALI";
echo "<br>";
echo gettype($num6)."=".$num6;
echo "<br>";echo "<br>";

/////////////////////////////////////
//using settype function changes the type of a var immeditly but using the other way,$num4 = (int)$num1; will change it untill you use it 
$num1 = 6;
$num2 = 67;
$num3 = "10";
echo gettype($num3);
echo "<br>";
settype($num3, "int");
echo gettype($num3);


 ?>
<!-- /////////////////////// PHP CONSTANTS ////////////////////// -->
<?php 
//there are two ways to define constants in php,and is considered a
//constant variable(same rules),Should be defined with uppercase letters
//first way to define a constant by using define(name, value) function:
define('NOTE', 'Ali');
echo NOTE;
echo "<br>";
define('NOTE', 'Constant Message',true);//true here means that the name of the constant is not case sensitive,false makes it case sensitive.
echo note;
//another way to define a constant by using const keyword:
const NAME = "Mike";
echo "<br>";
echo NAME;


 ?>
<!-- ////////////////// CONTROLL IN PHP,If STATMENT ///////////////// -->

<?php 
// there are many ways to write an if statment
//the first one:
$num = 200;
if ($num<100) //no need for {} after the condition
	echo "$num is smaller than 100";
else{
	echo "$num is greater than 100";
}
//the seconde way,with {}:
echo "<br>";echo "<br>";
$num = 200;
if ($num%2==0) {//$num%2 similar to mod(200,2) in matlab
		echo "$num is Even Number";
	}else{
		echo "$num is Odd Number";
	}	
echo "<br>";echo "<br>";
//////////////////////////////
$new_visitor = true;
if ($new_visitor) {
		echo "<h2>Wellcome New Visitor</h2>";
	}else{
		echo "<h2>Wellcome Back</h2>";
	}	

echo "<br>";echo "<br>";
//////////////////////////////////////
$new_visitor = true;
if ($new_visitor) {
		echo "<h2>Wellcome New Visitor</h2>";
	}else{
		echo "<h2>Wellcome Back</h2>";
	}	

///////////////////////////////////
//any variable defineed inside if statment is only visible inside  that if statment
 $new_visitor = true;
if ($new_visitor) {
		echo "<h2>Wellcome New Visitor</h2>";
	}else{
		echo "<h2>Wellcome Back</h2>";
	}	

/////////////////////////////////////
//using elseif:
$num1 = 200;
$num2 = 200;
if ($num1>$num2) {
	echo "<h2>$num1</h2>";
}elseif($num2>$num1){
	echo "<h2>$num2</h2>";
}else{
	echo "$num1 = $num2";
 ?>
<!-- ///////////////////////// OPERATORS: /////////////////////////-->
<?php 
//// == means equal and is true when the two variables are equals EX:
//// ("2" == 2) this is true,
//// === means identical,the var should be equal and the same type
//// not equal !=
//// not identical !==

//// Example:
$var = 20;
if (($var % 2) == 1) {
	echo "$var is odd number";
}
if (($var % 2) == 0) {
	echo "$var is even number";
}
////////////////////////////////////
echo "<h3>Postincrement</h3>";
$a = 5;
echo "Should be 5:".$a++."<br>\n";
echo "Should be 6:$a <br>\n";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6:".++$a."<br>\n";
echo "Should be 6:$a <br>\n";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "Should be 5:".$a--."<br>\n";
echo "Should be 4:$a <br>\n";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "Should be 4:".--$a."<br>\n";
echo "Should be 4:$a <br>\n";
echo "<br>";echo "<br>";
////////////////////////////////////////////////
////Logical Operators:

//// && is the same as and
//// || is the same as or
////there are also xor
////Ex:
$x = 100;
$y = 50;
if ($x == 100 and $y == 50) {
	echo "Hello World 1";
}
echo "<br>";
if ($x == 100 or $y == 80) {
	echo "Hello World 2";
}
echo "<br>";
if ($x == 100 xor $y == 80) {// xor true when only one of them is true
	echo "Hello World 3";
}
echo "<br>";
if ($x == 100 && $y == 50) {
	echo "Hello World 4";
}
echo "<br>";
if ($x == 100 || $y == 50) {
	echo "Hello World 5";
}
echo "<br>";echo "<br>";

/////////////////////////
////String Operators:
$str1 = "ALi";
$str2 = "Mike";

$str1 .= $str2;
echo $str1;
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
/////////////////////////
////Array Operators:

$x = array("a"=>"red","b"=>"green");
$y = array("c"=>"blue","d"=>"yellow");

print_r($x + $y);//union of $x and $y
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";

//equality(check if its equal or not)
$t = array("a"=>"red","b"=>"green");
$s = array("c"=>"blue","d"=>"yellow");

var_dump($t==$s);
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";

//identity(both type and value should be equal)
$r = array("a"=>"red","b"=>"green");
$i = array("c"=>"blue","d"=>"yellow");

var_dump($r===$i);
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";

//inequality
$f = array("a"=>"red","b"=>"green");
$h = array("c"=>"blue","d"=>"yellow");

var_dump($f!=$h);
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";

$var = null;
if (empty($var)) {
	echo "null is empty";
}

?>

<!-- ///////////////////// CONTROLL,SWITCH: /////////////////////-->

<?php 

$num = 21;
switch ($num) {
	case 20:
	case 40:
		echo "num = $num";
		break;/////without break the application will run all cases after this one
	case null:
		echo "Null Value";
		break;
	case !isset($num):
		echo "is Not Set";
		break;
	default:
		echo "num equal default $num";
		break;
}

?>
<!-- ///////////////////////////// Loops: /////////////////////////////-->
<?php 
////while loop:
// $num = 0;
// while ( $num <= 10) {
// 	echo "$num <br>";
// 	$num++;
// }
///////////////////////////////////////////////////
// $num = 1;
// while ($num <= 4) {
// 	$num2 = 1;
// 	while ($num2 <= 4) {
// 		echo $num." ".$num2."<br>";
// 		$num2++;
// 	}
// 	echo "<br>";
// 	$num++;
// }
///////////////////////////////////////////////////
// $num = 1;
// while ($num <= 7) {
// 	if ($num == 3) {
// 		echo "Ali"."<br>";
// 	}
// 	else{
// 		echo $num."<br>";
// 	}
// 	$num++;
// }
///////////////////////////////////////////////////
//// for Loop:
// for ($i=0; $i <10 ; $i++) { 
// 	echo "$i<br>";
// }

///////////////////////////////////////////////////
// $num = 0;
// while ($num <= 20) {
// 	if ($num%2 == 0) {
// 		echo "$num is an Even Number<br>";
// 	}
// 	else{
// 		echo "$num is an Odd Number<br>";
// 	}
// 	$num++;
// }
// echo "$num";
// echo "<br>";echo "<br>";echo "<br>";echo "<br>";
// ///////////////////////////////////////////////////
// for ($i=0; $i <=20 ; $i++) { 
// 	if ($i%2 == 0) {
// 		echo "$i is an Even Number<br>";
// 	}
// 	else{
// 		echo "$i is an Odd Number<br>";
// 	}
// }
// echo "$i";

///////////////////////////////////////////////////
//// foreach loop:
// $profile=array("Muhammed","Essa","Hameed");

// foreach ($profile as $v) {
// 	echo "$v <br>";
// }
///////////////////////////////////////////////////
$profile=array("First_name"=>"Muhammed",
	"Last_name"=>"Essa",
	"age"=>"32",
	"Email"=>"MuhammedEssa@gmail.com",
	"salary"=>3000);
////here we want to replace "_" with " "
////also we want to change the first letter in key to uppercase for this there are thow ways:
////the first one:

// foreach ($profile as $n => $v) {
// 	if ($n == "age") {
// 		$newKey = ucfirst($n);
// 	}else{
// 	$newKey = str_replace("_", " ", $n);
// 	}
// 	echo "$newKey => $v <br>";
// }
////the second one:
// foreach ($profile as $n => $v) {
// 	$newKey = ucfirst(str_replace("_", " ", $n));
// 	if (is_int($v)) {
// 		echo $newKey."=>".$v." $<br>";
// 	}else{
// 	echo "$newKey => $v <br>";
// 	}
// }
/////////////////////////////////
//// Continue Keyword:

// for ($i=0; $i <20 ; $i++) { 
// 	if ($i == 15) {
// 		continue;
// 	}
// 	echo "$i<br>";
// }

// for ($i=0; $i <20 ; $i++) { 
// 	if ($i %2 != 0) {
// 		continue;
// 	}
// 	echo "$i-";
// }
///////////////////////////////
// $value =0;
// while ($value <= 20) {
// 	if ($value == 10) {
// 		$value++;//when you put if statment with continue inside while you need to put $value++ inside the if statment or you have an infinete loop 
// 		continue;
// 	}
// 	echo $value."-";
// 	$value++;
// }
///////////////////////////////

// for ($i=0; $i <=10 ; $i++) { 
// 	if ($i == 3) {
// 		continue;
// 	}
// 	for ($j=0; $j <=10 ; $j++) { 
// 		if ($j == 5) {
// 		continue(2);////here jump twice
// 	}
// 		echo "$i <> $j<br>";
// 	}
	
// }
///////////////////////////////// break /////////////////////////////////
//// break is used to stop the loop for good
// for ($i=0; $i<=10 ; $i++) { 
// 	if ($i == 5) {
// 		break;
// 	}
// 	echo "$i<br>";
// }
////////////////////////////// do while //////////////////////////////
////this will always run the code at least once and then it will check the condition

// $value = 10;
// do {
// 	echo "$value<br>";
// 	$value--;
// } while ($value >= 0);


 ?>
<!-- ///////////////////// ARRAY POINTERS: /////////////////////-->
<?php 
$names=array("Muhammed","Kamel","Ali","Mike");
echo "current Pointer: ".current($names)."<br>";
echo "next Pointer: ".next($names)."<br>";
echo "next Pointer: ".next($names)."<br>";
echo "next Pointer: ".next($names)."<br>";
echo "next Pointer: ".next($names)."<br>";
echo "current Pointer: ".current($names)."<br>";
echo "reset Pointer: ".reset($names)."<br>";//this return the pointer to the first element in the array
echo "current Pointer: ".current($names)."<br>";
echo "next Pointer: ".next($names)."<br>";
echo "next Pointer: ".next($names)."<br>";
echo "prev Pointer: ".prev($names)."<br>";
echo "current Pointer: ".current($names)."<br>";
echo "reset Pointer: ".reset($names)."<br>";

echo "<br>";echo "<br>";

while ($name = current($names)) {
	echo $name."-";
	next($names);
}echo "<br>";
echo "current Pointer: ".current($names)."<br>";
echo "reset Pointer: ".reset($names)."<br>";

?>
<!-- ///////////////////// PHP Functions: /////////////////////-->
<?php 
////functions are not case sensitive
// function showlove($name)
// {
// 	echo "We Love $name<br>";
// }
// showlove("Ali");
// ShowLove("bitch");
// SHOWLOVE("mike");

// showHate("Bike");////you can call a function then define it afterwards
// //// However it's not recommended to do that
// function showHate($name)
// {
// 	echo "We Hate $name<br>";
// }

// function myName($first_name,$second_name,$third_name)
// {
// 	echo "My Name is: ".$first_name." ".$second_name." ".$third_name."<br>";
// }
// Myname("Ali","Ahmad","Smith");
// Myname("Ali","Mike"," ");////you can't ignore the last argument or there will be error
// Myname("Ali","bike",null);

////////////////////////////////// return //////////////////////////////////
// function sum($x,$y)
// {
// 	$result = $x+$y;
// 	return $result;
// }

// $var = sum(3,4);
// echo "$var";
///////////////////// Multiple return Values Functions ////////////////////
////you can return array instead of a var:

function newName($first_name,$second_name,$third_name)
{
	$first_one = "My first Name is $first_name <br>";
	$second_one ="My second Name is $second_name <br>";
	$third_one = "My third Name is $third_name <br>";
	return array($first_one,$second_one,$third_one);
}
$name1=newName("Ali","Ahmad","Smith");
echo "Using indexed array: <br><br>";
echo $name1[0];
echo $name1[2];

echo "<br>";echo "<br>";
echo "Using foreach function: <br><br>";
foreach ($name1 as $value) {
	echo "$value";
}
echo "<br>";echo "<br>";
list($one,$two,$three) = $name1;////you can use list($var) to assign a number of variables to thier counter parts in an array,here name1 is an array
echo "Using list() function: <br><br>";
echo $one;
echo $two;
echo $three;
///////////////////////////////////////////////////
echo "<br>";echo "<br>";
function operators($num1,$num2,$num3)
{
	$sum = $num1+$num2+$num3;
	$prod = $num1*$num2*$num3;
	$avg = ($num1+$num2+$num3)/3;
	return array($sum,$prod,$avg);
}
$newarray = operators(2,3,4);
list($sum,$prod,$avg) = $newarray;
echo "sum = ".$sum."<br>";
echo "prod = ".$prod."<br>";
echo "avg = ".$avg."<br>";

////////////////////////////////////
//// assignimg a default value for the arguments if they are not
//// provided
function employeeInfo($firstName = "Employee First Name",$lastName = "Employ Last Name")
{
	$employeeInfo = "First Name is: $firstName ,and Last Name is: $lastName";
	return $employeeInfo;
}

echo employeeInfo("Ali","galel"); echo "<br>";
echo employeeInfo("japper",null); echo "<br>";
echo employeeInfo(); echo "<br>";
echo employeeInfo("Mike"); echo "<br>";

?>
<!-- ///////////////////// Variable Scopes: /////////////////////-->
<?php 
// $num = 3;////this is a GLOBAL variable(can be used only outside a function)
// function myNum()
// {
// 	echo "<h1>num inside function is $num</h1>";
// }

// myNum();

// echo "<h1>num outside function is $num</h1>";

///////////////////////////////////////////////////////
// $num = 3;
// function myNum(){
// 	$num = 4;//this is LOCAL variable because(it can only be used inside this function)
// 	echo "<h1>num inside function is $num</h1>";
// }

// myNum();

// echo "<h1>num outside function is $num</h1>";

///////////////////////////////////////////////////////
// $num = 3;
// $num2 = 10;
// function myNum(){
// 	global $num,$num2;//when defining a global variable you 
// can't  assign it a value,unless you defign it using
// $GLOBALS array 
// 	if (isset($num) and isset($num2)) {
// 		echo "<h1>num inside function is $num</h1>";
// 		echo "<h1>num2 inside function is $num2</h1>";
// 	}
// 	$num = 6;
// 	echo "<h1>num inside function is $num</h1>";
// }
	

// myNum();

// echo "<h1>num outside function is $num</h1>";
// echo "<h1>num2 outside function is $num2</h1>";

//// PHP Stores the Global Variables Inside  An Array called Globals
//// And This Array Can Be Used To Update The Global Variables Directly
// $num5 = "Muhammed";
// $num6 = "Ali";
// function myName(){
// 	global $num5,$num6;
// 	if (isset($num5) and isset($num6)) {
// 		echo "<h1>num5 inside function is $num5</h1>";
// 		echo "<h1>num6 inside function is $num6</h1>";
// 	}
// 	$num5 = "Mike";
// 	echo "<h1>num5 inside function is $num5</h1>";
// }
	

// myName();

// $GLOBALS['num6'] = "Bike";// here we use the $GLOBALS array to change a global variable
// $GLOBALS['name66'] = "Reju";// defign a global variable using $GLOBALS Array
// echo "<h1>num5 outside function is $num5</h1>";
// echo "<h1>num6 outside function is $num6</h1>";
// echo "<h1>Global name is $name66</h1>";

/////////////////// Static variables ///////////////////
////they are not deleted when the function finish it's work
// function myNum(){
// 	static $num = 1;
// 	echo "$num <br>";
// 	$num++;
// }
// myNum();
// myNum();
// myNum();

?>

<!-- ///////////////////// Debugging PHP: /////////////////////-->
<?php 
//// you can use this function to make sure php is running on the server:
// phpinfo();

//// inside php.ini you should turn on errors and error reporting using this two lines(when developing your product):
//// display_error= on
//// error_reporting = E_ALL

//// or by using this tow functions inside your code:
//// ini_set("display_error","on");
//// error_reporting(E_ALL);

//// also you can use this functions for debugging:
// var_dump(expression);
// print_r(expression);
// gettype(var);
// get_defined_vars();
// debug_backtrace();


 ?>
<!-- ////////////////// Advanced Functionality In PHP: ////////////////// -->
<?php 
//// $_GET Method:
//// used to get elements like id and user_name from page url
$page_name2 = "Second Page";
$page_name1 = "First Page";
echo "<h2>Wellcome to $page_name1</h2><br>";//you can't use single quotes strings with variables inside
echo '<a href="SecondPage.php?id=2">'."$page_name2</a>";

echo "<br>".$_GET['id'];

echo "<br>";echo "<br>";
////////////////////////////////////////////////////////////
$page_name2 = "Second Page";
$page_name1 = "First Page";
echo "<h2>Wellcome to $page_name2</h2><br>";//you can't use single quotes strings with variables inside
echo '<a href="FirstPage.php?id=10">'."$page_name1</a>";//here we put id on page url
echo "<br>";
echo "<pre>";
echo print_r($_GET);// $_GET is an assosiative array
echo "</pre>";
echo "<br>";

echo $_GET['id'];
echo "<br>";
echo $_GET['name'];

echo "<br>";echo "<br>";
////////////////////////////////////////////////////////////
$page_name = "Second Page";
$page_id2 = $_GET['id'];
$employee_name2 = $_GET['employee_name'];


?>
<h2>Page URL: 
	<?php	 
	echo $page_name.".php?"."id=".$page_id2."&employee_name=".$employee_name2;
	?>
</h2>
<!-- ////////////////////////////////////////////////////// -->
<h1>Wellcome To The First Page</h1>
<?php 
$page_name = "Second Page";
$page_id = 2;
$employee_name = "Muhammed & Ali";
?>
<!-- here we use urlencode()function to encode the $employee_name string
so that there will be no conflict between PHP and HTML when using & inside a url string-->
<a href="Second_Page.php?id=<?php echo $page_id; ?>&employee_name=
	<?php echo urlencode($employee_name); ?>">
	<?php 
		echo $page_name;
	?>
</a>
<!-- ////////////////////////////////////////////////////// -->
<!-- rawurlencode() is used for letters,numbers,underscore and dash and its better in all cases to use rawurlencode() -->
<a href="Second_Page.php?id=<?php echo $page_id; ?>&employee_name=
	<?php echo rawurlencode($employee_name); ?>">
	<?php 
		echo $page_name;
	?>
</a>

<!-- ///////////////////////// HTMl ENCODING ///////////////////////// -->
<?php 
//// htmlentities(string) Function transform any character in PHP to HTML
// $str = "<# $ ! % ^ & * ~>";
// echo htmlentities($str);
// echo "<br>";
// echo $str;
// echo "<br>";
//// html_entity_decode(string) Function transform any character in HTML to PHP
// echo html_entity_decode($str);
// echo "<br>";echo "<br>";
//////////////////////////////////////////////////////////////////
// $str = "Muhammed & 'Ali'";
// echo htmlentities($str,2);// 2 or ENT_QUOTES Transform's only the double quotes
// echo "<br>";
// echo htmlentities($str,3);// 3 Transform's the double quotes and single quotes
// echo "<br>";
// echo htmlentities($str,0);// 0 does not convert any quotes
// echo "<br>";

//////////////////////////////////////////////////////////////////
// $str = "A 'quote' is <b>bold</b>";
// echo htmlentities($str);
// echo "<br>";
// echo htmlentities($str,ENT_QUOTES);
// echo "<br>";
// echo $str;
// echo "<br>";
//////////////////////////////////////////////////////////////////
// $str = 'this is a link: <a href="muhammed.php">link</a> to muhammed page';
// echo htmlspecialchars($str);
// echo "<br>";
// echo $str;
// echo "<br>";
// echo "<br>";
//////////////////////////////////////////////////////////////////
// $str = '&lt;# $ ! % ^ &amp; * ~&gt;';
// echo html_entity_decode($str);//html_entity_decode(string) is the opposite to htmlspecialchars() and htmlentities()
// echo "<br>";
// echo $str;
// echo "<br>";

 ?>

<!-- ///////////////////////////// Headers: //////////////////////// -->
<?php 
//// headers should be at the top of php file
// $string = 'Location: http//www.muhammed.essa';//make sure the L in Location: is capital letter

// header($string,replace);//the second argument 'replace' can be added to replace the old header

?>

<!-- ///////////////////////////// redirectiion|: //////////////////////// -->
<?php 
// function redirect_url($url_name){
// 	header("Location: $url_name");
// 	exit;//ignore all code after exit
// }

// redirect_url("Items.php");

?>
<!-- ////////////////////////// More about Headers: ///////////////////// -->

<!-- When Turning off output buffering you get an error when leaving a space before header() statment -->
<!-- //////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////// Forms in PHP ///////////////////// -->
<!-- see Forms.php and myPage.php and test.php and -->
<!-- see form.php and CheckPage.php and inputPage.php and AdminPage.php and CodeForHaking.php -->

<!-- ////////////////////////// Form Validation: ///////////////////// -->
<?php
// $pattern = "/MEHz/";
// $subject = "is my MEH";
// if (preg_match($pattern, $subject)) {
// 	echo "Yes Match !";
// }else{
// 	echo "No Match";

// }
// echo "<br>";echo "<br>";

// $pattern1 = "/@/";
// $email = "Mohammed.essa@gmail.com";
// if (preg_match($pattern1, $email)) {
// 	echo "Yes Match email ";
// }else{
// 	echo "No Match email";
// }

// echo "<br>";echo "<br>";

// $name = "Ali";
// $dbArray = ["Mike","Mazen","Salem","Ali","Mohamed"];

// if (in_array($name, $dbArray)) {
// 	echo "Yes in Array ";
// }else{
// 	echo "No not in Array ";
// }

echo "<br>";echo "<br>";

$email = "0";

if (!isset($email)) {
	echo "Don't leave this blank";
}elseif(strlen($email) > 30){
	echo "Error Very Long email";
}elseif (strlen($email) < 6) {
	echo "Error Very small email";
}
else{
	echo "Good length email";
}
echo "<br>";
if (preg_match("/@/",$email)) {
	echo "Valid email";
}else{
	echo "Not Valid email";

// echo "<br>";echo "<br>";

/////////////////////////////////////////////////////////////////////////
$str= "0";
$NewStr = trim($str);
if (empty($NewStr) or !isset($NewStr)) {
	echo "Error";
}else{
	echo "Good";
}

 ?>
<!-- //////////////////////////////////////////////////////////////////// -->

<!-- ////////////////////////// Errors: ///////////////////// -->

<?php 
$str1 = " Ali  ";
$str2 = "     ";
$name = trim($str1);
$password = trim($str2);
$Error_Array = Array();
if (!isset($name) or empty($name)) {
	$Error_Array['name'] = "Please Enter Your Name";
}elseif(strlen($name) < 3){
	$Error_Array['name'] = "Name length Must be Longer than 3";
}elseif(strlen($name) >= 30){
	$Error_Array['name'] = "Name length Must be shorter than 30";
}else{
	$Error_Array['name'] = "Valid Name !";
}
if (!isset($password) or empty($password)) {
	$Error_Array['password'] = "Please Enter Your Password";
}

ArrayError($Error_Array);

function ArrayError($Error_Array){
	if (!empty($Error_Array)) {
		echo "Please Fix The Following Errors:<br>";
	}
	foreach ($Error_Array as $key => $value) {
		echo $value."<br>";
	}

}

?>
<!-- ///////////////////////////// COOKIES //////////////////////////// -->
<?php 
//must be the first on a webpage
//it is sent during requests with the header
//Cookie Content has to be encoded for security
$CookieName = "MyCookie";
$CookieValue = "CookieContents";
$CookieExpireDate = time()+(60*60*24*7);
if (!isset($_COOKIE[$CookieName])) {
setcookie($CookieName,$CookieValue,$CookieExpireDate);
}
/////////////////////////////
// echo $_COOKIE["MyCookie"];
// echo "<br>";
// print_r($_COOKIE);

foreach ($_COOKIE as $key => $value) {
	echo $key."==>".$value."<br>";
}
/////////////////////////////
// Deleting Cookies:
//unset($_COOKIE[$CookieName]);//this method is not recommended and wrong
//USE THESE Functions to Delete Cookies:
setcookie($CookieName);
setcookie($CookieName,null);
setcookie($CookieName,$CookieValue,time()-1000);

 ?>
<!-- //////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////// Sessions: //////////////////////////// -->

<?php 

//must be the first on a webpage
//it is sent during requests with the header
//Sessions depends on cookies and cookies depends on header
//Sessions are saved on the server side and expire on the client when closing webpage.
session_start();

$_SESSION['name'] = "ALI";
$myName = $_SESSION['name'];
echo $myName;
echo "<br>";
print_r($_SESSION);


////To delete Sessions use function session_unset() that delete the variables in session;
session_unset();
////or use session_destroy() to destroy the sessions
session_destroy();


 ?>

<!-- //////////////////////////////////////////////////////////////////// -->

<!-- /////////////////////// Php File Handeling: ////////////////////// -->
<?php 
//open file using fopen(filename, mode)
//filename is the name of the file or the path to it
//mode is either "r" read or "w" write or "a" append 
$handle = fopen('E:\wamp64\www\phpProjects/Ali.php', "r");
$handle2 = fopen('Ali.php', "r");
$fileName = 'Ali.php';
//close file using fclose(handle)
//fclose($handle)
////////////////////////////
//// Read file using fread(handle, length)
if (filesize($fileName) != null) {
	$contents = fread($handle, filesize($fileName));
}else{
	$contents = "File is empty";
}

filesize($fileName);//returns the number of strings in a file
echo $contents;
////////////////////////////
//write file using fwrite(handle, string)
$fb = fopen($fileName, "w");
fwrite($fb, "Nice it works");
fclose($fb);

////////////////////////////
//Append file (add strings to file) using fopen($fileName,"a")
//then write using fwrite(handle,"w")
$appendFile = fopen($fileName, "a");
fwrite($appendFile, " New String");
$newcontent = fread($appendFile, filesize($fileName));
echo $newcontent;
fclose($appendFile);
////////////////////////////
//delete file using unlink("file path") function
if (is_readable("Ali.php")) {
	unlink("Ali.php");
	echo "Deleated Successfully";
}
 ?>
<!-- ///////////////////////////  Procedural  /////////////////////////// -->
<!-- ///////////////////////    PHP AND MySQLi   //////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////// -->
<?php 
//////////////   here we use Procedural PHP AND MySQLi API:   //////////////

// Connect function:
//use it to connect to MySQL and to a database directly
//$conn = mysqli_connect($hostname,$username,$password,$dbname);

//connection check:
// if (!$conn) {
// 	die("Connection Failed ".mysqli_connect_error($conn)."<br>Error Num: ".mysqli_connect_errno());
// }


// query for sending to MySQL:
//could be any SQL code
//$query = "SELECT * FROM `cool`";
// Function to send the query:
//it takes the connection and query as arguments
//$results = mysqli_query($conn,$query);

//function for counting how many rows the $results has
//mysqli_num_rows($results);
////////////////////////////////////////////////////////
//This Functions Transforms The results into An Assosiative Array:

//mysqli_fetch_assoc($results);//with Columns names as Keys (recommended).
//mysqli_fetch_row($results);//Normal Assosiative Array with keys(0,1,2,...).
//mysqli_fetch_array($results);//does the job of the two functions before it
//at the same time,NOT RECOMENDED.
//(Make an array with Columns names as Keys AND another with keys(0,1,2,...)).
////////////////////////////////////////////////////////
// for closing the connection (very important after operation Completed)
//mysqli_close($conn);

//Use this function to make sure operations like write update and delete are done correctly:
//mysqli_affected_rows($conn);

//use this function to free memory when reading from the database:
//mysqli_free_result($results);

//to protect MySQL from database hack:
//mysqli_real_escape_string()








 ?>		






</body>
</html>