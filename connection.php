<?php 
$servername="localhost";
$username="root";
$password="";
$database="phpDB";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
	echo("Connection error");
}
else{
	echo("Connection successful<br>");
}
?>