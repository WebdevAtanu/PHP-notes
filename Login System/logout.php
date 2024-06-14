<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Logout</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<style>
		body{
			background: url("images/logout.jpg");
			background-size: 100%;
			background-attachment: fixed;
			}
		.container{
			width: 100vw;
			height: 85vh;
			padding: 15px;
			backdrop-filter: brightness(0.3);
			color: white;
			margin: 1% auto;
			}
		.alert{
			background: transparent;
			color: white;
			width: 100%;
			height: 100%;
			margin: auto;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			font-size: 3rem;
			}
	</style>
	<body>
		
		<?php require"components/navbar.php";
		session_start();
		session_unset();
		session_destroy();
			echo'
				<div class="container">
							<div class="alert" role="alert">
									<h4 class="alert-heading">Oops!</h4>
									<p>You are logged out. <a href="login.php" style="text-decoration:none;">Login again.</a></p>
					</div>
					<div>';
										
				?>
			</body>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		</html>