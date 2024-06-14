<?php 
// Database connection
$servername="localhost";
$username="root";
$password="";
$database="phpDB";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
die("Sorry failed to connect: ".mysqli_connect_error());
}
else{
	echo("Connection successful<br>");
}


// Create a new db
$sql="create database phpDB";
$db=mysqli_query($conn,$sql);
if($db){
echo("DB creation successful");
}
else{
	echo("DB creation unsuccessful");
}


// Create a new table
$sql="CREATE TABLE `mytable` ( `id` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`))";
$result=mysqli_query($conn,$sql);
if($result){
	echo("Table insert successful");
}
else{
	echo("Error");
}


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


//Update data
$sql="UPDATE `mytable` SET `name` = 'Atanu Mondal' WHERE `mytable`.`id` = 2";
$result=mysqli_query($conn,$sql);
if($result){
	echo("Update successful");
}
else{
	echo("Update unsuccessful");
}
$affected=mysqli_affected_rows($conn);//To display how many rows are affected after running the query.
echo("<br>Number of affected rows ".$affected);


//Delete data
$sql="DELETE FROM `mytable` WHERE `mytable`.`id` = 2";
//$sql="DELETE FROM `mytable` WHERE `mytable`.`id` = 2 LIMIT 3";//Limited the affected rows
$result=mysqli_query($conn,$sql);
if($result){
	echo("Delete successful");
}
else{
	echo("Delete unsuccessful");
}
$affected=mysqli_affected_rows($conn);//To display how many rows are affected after running the query.
echo("<br>Number of affected rows ".$affected);


 ?>