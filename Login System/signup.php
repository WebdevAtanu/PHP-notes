<?php
$alert=false;//it will holding the alert message
$error=false;//it will holding the alert message
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include "components/connection.php";
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$query="INSERT INTO `logindata` (`username`,`email`, `password`, `time`) VALUES ('$name', '$email', '$password', current_timestamp())";
$result=mysqli_query($conn,$query);
if(!$result){
$error=true;
}
else{
$alert=true;
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Signup</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php require"components/navbar.php"?>
		<?php
		if($alert){
			echo'
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Success!</strong> Your account is saved. You can login now.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>';};
		?>
		<?php
		if($error){
		echo'
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Sorry!</strong> The email is already in use.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>';};
		?>
		<div class="container my-5"">
			<h1 class="text-center">Signup</h1>
			<form action="signup.php" method="post">
				<div class="mb-3">
					<label for="name" class="form-label">Your name</label>
					<input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
				</div>
				<div class="mb-3">
					<label for="email" class="form-label">E-mail</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
				</div>
				<button type="submit" class="btn btn-primary" style="width:100%;">Signup</button>
			</form>
		</div>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>