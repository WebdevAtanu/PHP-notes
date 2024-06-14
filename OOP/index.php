<?php 
// class player{
// 	// properties
// 	public $name;
// 	public $speed=5;
// 	// functions
// 	function set_name($myname){
// 		$this->name=$myname;
// 	}
// 	function get_name(){
// 		return $this->name;
// 		echo("<br>");
// 	}
// 	function show_speed(){
// 		echo("The speed is ");
// 		return $this->speed;
// 	}
// 	// constructor method should always '__construct'
// 	function __construct($salary){
// 		echo("This is a constructor which is called whenever an object is created<br>");
// 		$this->salary=$salary;
// 	}
// 	// destructor method should always '__destruct'
// 	function __destruct(){
// 		echo "<br>Destructing $this->name";
// 	}
// }
// $player1=new player(10000);
// $player1->set_name("Atanu<br>");
// echo $player1->get_name();
// echo $player1->show_speed();
// echo("<br>The salary is $player1->salary");


// //Access modifier
// class human{
// 	private $name="Atanu";//default name 
// 	public $salary=15000;
// 	function change_name($name){
// 		$this->name=$name;
// 	}
// 	function show_name(){
// 		echo "The name is $this->name. ";
// 	}
// }

// class coder extends human{
// 	private $language="php";//default value is php
// 	function change_lang($lang){
// 		$this->language=$lang;
// 	}
// 	function show_lang(){
// 		echo "The language is $this->language. ";
// 	}
// }
// 	//only for human class.
// 	$human1=new human();
// 	$human1->show_name(); //only access the public method.
// 	// echo $human1->name; //this line will not work because name is private property.
// 	echo " And The salary is $human1->salary. <br>" ;

// 	//both human and coder class will work.
// 	$coder1=new coder();
// 	$coder1->salary=25000;//changed the salary property of coder1 which is extends from human class
// 	$coder1->change_name("Ram");
// 	$coder1->show_name(); 
// 	$coder1->show_lang();
// 	echo "The salary is $coder1->salary.";

class test{
	public $name;
	public $age;
	//A private function only work inside the same class.
	private function show(){
		echo "The name is $this->name <br>";
		echo "The age is $this->age <br>";
	}
	protected function show_data(){
		echo "The name is $this->name <br>";
		echo "The age is $this->age <br>";
		echo "The language is $this->lang";
	}
	function __construct($myName,$myAge){
		$this->name=$myName;
		$this->age=$myAge;	
		$this->show(); //Function called inside constructor.
	}
}
class coder extends test{
	public $lang;
	function __construct($myName,$myAge,$myLang){
		$this->name=$myName;
		$this->age=$myAge;	
		$this->lang=$myLang;	
		$this->show_data(); //Protected function only work on inheritance.
	}
}
$test1=new test("Atanu",24);
$test2=new coder("Ram",24,"php");

