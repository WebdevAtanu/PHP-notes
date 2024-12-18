<?php
$server="localhost";
$user="root";
$pass="";
$con=mysqli_connect($server,$user,$pass);
if(!$con){
die("failed".mysqli_connect_error());
}
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$other=$_POST['other'];

$sql="INSERT INTO `supe`.`supedata`(`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name','$age','$gender','$email','$phone','$other',current_timestamp());";
if($con->query($sql)==true){
echo "Your details have been submitted";
}
else{
echo"Error: $sql $con->error";
}
$con->close();
?>