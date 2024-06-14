<?php
include("connection.php");
$alert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$Sname=$_POST['name'];
	$Smail=$_POST['Remail'];
	$Spass=$_POST['rPass'];
	$query="INSERT INTO `signups` (`name`, `mail`, `password`) VALUES ('$Sname', '$Smail', '$Spass')";
	$result=mysqli_query($conn,$query);
	$alert=true;
	}
?>
<!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Student Registration</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="index.php" method="post" id="signForm">
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="mb-3">
						<label for="Remail" class="form-label">Email address</label>
						<input type="email" class="form-control" id="Remail" name="Remail" placeholder="name@example.com" required>
					</div><div class="mb-3">
					<label for="rPass" class="form-label">New password</label>
					<input type="password" class="form-control" id="rPass" name="rPass" placeholder="New Password" minlength="8" required>
				</div>
			</div>
			<div class="modal-footer">
				<?php 
				if($alert){
					echo'
					<script>
					alert("Registration Complete");
					</script>
					';
					}
				 ?>
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Signup</button>
			</div>
		</form>
	</div>
</div>
</div>