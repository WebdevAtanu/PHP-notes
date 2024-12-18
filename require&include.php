<?php 
include 'connection.php'; //It will run the entire code if error happened.
// require 'connection.php';//It does not run the entire code if error happened.

// =================Show data=====================
$sql="select * from `mytable`";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
while($rows=mysqli_fetch_assoc($result)){
	echo "ID is ".$rows['id']." and name is ".$rows['name']."<br>";
}
?>