<?php
$server="localhost";
$user="root";
$pass="";
$con=mysqli_connect($server,$user,$pass);
if(!$con){
die("failed".mysqli_connect_error());
}
// echo"successful";
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$other=$_POST['other'];

$sql="INSERT INTO `supe`.`supedata`(`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name','$age','$gender','$email','$phone','$other',current_timestamp());";
if($con->query($sql)==true){
echo "Thank you for showing your interest. Your details have been submitted. Go back and conquer the world";
}
else{
echo"Error: $sql $con->error";
}
$con->close();
?>