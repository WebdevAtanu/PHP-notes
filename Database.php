<?php 
// ===================================Database connection===================================
$servername="localhost";
$username="root";
$password="";
$database="phpdb";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
die("Sorry failed to connect: ".mysqli_connect_error());
}
else{
	echo("Connection successful <br>");
}

// ===================================Create a new db===================================
$query="create database phpdb";
$db=mysqli_query($conn,$query);
if($db){
echo("DB creation successful <br>");
}
else{
	echo("DB creation unsuccessful <br>");
}

// ===================================Create a new table===================================
$query="CREATE TABLE `mytable` ( `id` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`))";
$result=mysqli_query($conn,$query);
if($result){
	echo("Table creation successful <br>");
}
else{
	echo("Table creation unsuccessful <br>");
}

// ===================================Insert data===================================
$id="3";
$name="Atanu";
// $query="INSERT INTO `mytable` (`id`, `name`) VALUES (NULL, 'Atanu')";
$query="INSERT INTO `mytable` (`id`, `name`) VALUES ('$id', '$name')";
$result=mysqli_query($conn,$query);
if(!$result){
	echo("Data insertion unsuccessful <br>");
}
else{
	echo("Data insertion successful <br>");
}

// ===================================Show data===================================
// $query="select * from `mytable`";
$query="select * from `mytable` where `id`=2";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
while($rows=mysqli_fetch_assoc($result)){
	// echo var_dump($rows);
	echo "ID is ".$rows['id']." and name is ".$rows['name']."<br>";	
}

// ===================================Update data===================================
$query="UPDATE `mytable` SET `name` = 'Atanu Mondal' WHERE `mytable`.`id` = 2";
$result=mysqli_query($conn,$query);
if($result){
	echo("Update successful <br>");
}
else{
	echo("Update unsuccessful <br>");
}
$affected=mysqli_affected_rows($conn);//To display how many rows are affected after running the query.
echo("Number of affected rows ".$affected."<br>");

// ===================================Show data===================================
// $query="select * from `mytable`";
$query="select * from `mytable` where `id`=2";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
while($rows=mysqli_fetch_assoc($result)){
	// echo var_dump($rows);
	echo "ID is ".$rows['id']." and name is ".$rows['name']."<br>";	
}

// ===================================Delete data===================================
$query="DELETE FROM `mytable` WHERE `mytable`.`id` = 1";
//$query="DELETE FROM `mytable` WHERE `mytable`.`id` = 2 LIMIT 3";//Limited the affected rows
$result=mysqli_query($conn,$query);
if($result){
	echo("Delete successful <br>");
}
else{
	echo("Delete unsuccessful <br>");
}
$affected=mysqli_affected_rows($conn);//To display how many rows are affected after running the query.
echo("Number of affected rows ".$affected);
// ?>