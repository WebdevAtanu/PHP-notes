<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	<h1><center>PHP cheat sheet</center></h1>
	<?php
	$num1=40;
	$num2=20;
	echo("The 1st numbers is: ");
	echo $num1;
	echo "<br>";
	echo("The 2nd numbers is: ");
	echo $num2;
	echo "<br>";
	echo "<br>";
	
	// =========================================arithmetic operators=========================================
	echo("The addition of the numbers are: ");
	echo $num1+$num2;
	echo "<br>";
	echo("The subtraction of the numbers are: ");
	echo $num1-$num2;
	echo "<br>";
	echo("The multiplication of the numbers are: ");
	echo $num1*$num2;
	echo "<br>";
	echo("The division of the numbers are: ");
	echo $num1/$num2;
	echo "<br>";
	echo "<br>";
	
	// =========================================assignment=========================================
	$newNum=$num1;
	echo("the value of newNum is: ");
	echo $newNum;
	echo "<br>";
	$newNum+=5;//same can be done with -,*,/
	echo("the new value of newNum after adding 5 is: ");
	echo $newNum;
	echo "<br>";
	echo "<br>";
	
	// =========================================comparison operators=========================================
	echo var_dump(1==4);//it returns true or false
	echo "<br>";
	echo var_dump(1>=4);
	echo "<br>";
	echo var_dump(1<=4);
	echo "<br>";
	echo var_dump(1!=4);
	echo "<br>";
	echo "<br>";
	
	// =====================================increment and decrement operator=====================================
	$inc=5;
	$dec=5;
	$inc++;
	$dec--;
	echo("5 after increment ");
	echo $inc;
	echo "<br>";
	echo("5 after decrement ");
	echo $dec;
	echo "<br>";
	echo "<br>";
	
	// =========================================logical operator=========================================
	$log=(true && true);
	var_dump($log);
	echo "<br>";
	$log=(true && false);
	var_dump($log);
	echo "<br>";
	$log=(true || true);
	var_dump($log);
	echo "<br>";
	$log=(true || false);
	var_dump($log);
	echo "<br>";
	echo "<br>";
	
	// =========================================datatypes=========================================
	$str="this is a string";
	var_dump($str);
	echo "<br>";
	$int=100;
	var_dump($int);
	echo "<br>";
	$float=50.50;
	var_dump($float);
	echo "<br>";
	define("pi",3.14);//constant operator
	echo pi;
	echo "<br>";
	echo "<br>";
	
	// =========================================if-else=========================================
	$age=62;
	if($age>=18&&$age<60)
	{
	echo("you can vote");
	}
	else if($age<18)
	{
	echo("you are minor");
	}
	else{
	echo("you can not vote");
	}
	echo "<br>";
	echo "<br>";
	
	// =========================================array=========================================
	$lang=array("java","php","javascript","python");
	echo count($lang);
	echo "<br>";
	echo $lang[0];
	echo "<br>";
	echo "<br>";
	
	// =========================================while loop=========================================
	$a=0;
	while($a<count($lang))
	{
	echo $lang[$a];
	echo "<br>";
	$a++;
	}
	echo "<br>";
	
	// =========================================for loop=========================================
	for($b=0;$b<4;$b++)
	{
	echo $lang[$b];
	echo "<br>";
	}
	echo "<br>";
	echo "<br>";
	
	// =========================================foreach loop=========================================
	foreach($lang as $val)
	{
	echo("the valus are: ");
	echo $val;
	echo "<br>";
	}
	echo "<br>";
	
	// =========================================function=========================================
	function print_name($name)
	{
	echo("Hello, ");
	echo $name;
	}
	print_name("Atanu");
	echo"<br>";
	
	function sum($number1,$number2)
	{
	$number3=$number1+$number2;
	echo("The sum of the numbers: ");
	echo $number3;
	}
	sum(5,10);
	echo"<br>";
	echo"<br>";
	
	// =========================================string=========================================
	$str1="this is a string";
	echo $str1;
	echo"<br>";
	echo("the length of the string is- ");
	echo strlen($str1);
	echo"<br>";
	echo("the number of words in the string is- ".str_word_count($str1));
	echo"<br>";
	echo("the reverse string is- ".strrev($str1));
	echo"<br>";
	echo("the replacement of this to that in string is- ".str_replace("this","that",$str1));

	// =========================================Associative array=========================================
	$assoarray=["a"=>"red", "b"=>"green", "c"=>"blue"];
	echo $assoarray["a"];
	echo"<br>";

	// =========================================Multidimensional array=========================================
	$mularray= array(
		array(1,2,3),
		array(4,5,6),
		array(7,8,9),
	);
	echo $mularray[0][1];
	echo("<br>");
	for($i=0;$i<count($mularray);$i++){
		for($j=0;$j<count($mularray[$i]);$j++){
			echo $mularray[$i][$j];
			echo(" ");
		}
	}
	?>
</body>
</html>