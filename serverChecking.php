<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Server</title>
	</head>
	<body>
		<form action="serverChecking.php" method="post">
			<h1>Checking the server</h1>
			<input type="text" name="id">
			<input type="password" name="pass">
			<button>search</button>
		</form>
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST"){
		$id=$_POST["id"];
		$pass=$_POST["pass"];
		echo ("The id and password is ".$id." and ".$pass);
		}
		?>
	</body>
</html>