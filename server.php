<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Server check</title>
	</head>
	<body>
		<form action="server.php" method="post">
			<h1>Sending data to the server</h1>
			<input type="text" name="id">
			<input type="password" name="pass">
			<button>Send</button>
		</form>
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST"){
		$id=$_POST["id"];
		$pass=$_POST["pass"];
		echo ("ID: ".$id." Password: ".$pass);
		}
		?>
	</body>
</html>