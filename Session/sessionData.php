<?php 
session_start();
if(isset($_SESSION['user'])){
	echo("Welcome ".$_SESSION['user']);
}
else{
	echo("User not logged in. Log in to continue");
}
?>