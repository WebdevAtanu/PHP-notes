<?php 
include 'connection.php';//It will run the entire code if error happened.
//require 'connection.php';//It does not run the entire code if error happened.
echo"Connection Okay";


//Insert data
$id="2";
$name="Atanu";
// $sql="INSERT INTO `mytable` (`id`, `name`) VALUES (NULL, 'Atanu')";
$sql="INSERT INTO `mytable` (`id`, `name`) VALUES ('$id', '$name')";
$result=mysqli_query($conn,$sql);
if(!$result){
	echo("Insertion failed");
}
else{
	echo("Data insertion successful");
}


//Show data
// $sql="select * from `mytable`";
$sql="select * from `mytable` where `id`=2";

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
while($rows=mysqli_fetch_assoc($result)){
	// echo var_dump($rows);
	echo "ID is ".$rows['id']." and name is ".$rows['name'];	
}
 ?>