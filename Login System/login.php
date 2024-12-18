<?php
$error=false;//it will holding the alert message
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include "components/connection.php";
$email=$_POST["email"];
$password=$_POST["password"];
$sqlquery="select * from logindata where email='$email'AND password='$password'";
$result=mysqli_query($conn,$sqlquery);
$num=mysqli_num_rows($result);
if($num==1){
$alert=true;
session_start();
$_SESSION['log']=true;
$_SESSION['username']=$username;
header("location:content.php");
}
else{
$error=true;
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php require"components/navbar.php"?>
		<?php
		if($error){
			echo'
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Invalid credentials.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';};
		?>
		<div class="container my-5"">
			<h1 class="text-center">Login</h1>
			<form action="login.php" method="post">
				<div class="mb-3">
					<label for="email" class="form-label">E-mail</label>
					<input type="email" class="form-control" id="email" placeholder="Enter Username" name="email" required>
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
				</div>
				<button type="submit" class="btn btn-primary" style="width:100%;">Login</button>
			</form>
		</div>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>