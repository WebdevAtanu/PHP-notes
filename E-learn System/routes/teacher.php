<?php
// include("connection.php");
// if($_SERVER["REQUEST_METHOD"]=="POST")
// {
	
// 	$Sname=$_POST['Tname'];
// 	$Smail=$_POST['Tmail'];
// 	$Spass=$_POST['TPass'];
// 	$query="INSERT INTO `signups` (`name`, `mail`, `password`) VALUES ('$Sname', '$Smail', '$Spass')";
// 	$result=mysqli_query($conn,$query);
// }
?>
<!-- Teacher registration Modal -->
<div class="modal fade" id="teacherModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Instructor Registration Form</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="index.php" method="post">
					<div class="mb-3">
						<label for="Tname" class="form-label">Name</label>
						<input type="text" class="form-control" id="Tname" name="Tname" placeholder="Name" required>
					</div>
					<div class="mb-3">
						<label for="Tmail" class="form-label">Email address</label>
						<input type="email" class="form-control" id="Tmail" name="Tmail" placeholder="name@example.com" required>
					</div>
					<div class="mb-3">
						<label for="Tnum" class="form-label">Contact number</label>
						<input type="text" class="form-control" id="Tnum" name="Tnum" placeholder="Contact Number" minlength="10" maxlength="10" required>
					</div>
					<div class="mb-3">
						<label for="Ttopic" class="form-label">Topic</label>
						<input type="text" class="form-control" id="Ttopic" name="Ttopic" placeholder="Enter the topic you want to teach" required>
					</div>
					<div class="mb-3">
						<label for="TPass" class="form-label">New password</label>
						<input type="password" class="form-control" id="TPass" name="TPass" placeholder="New Password" minlength="8" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Send</button>
				</div>
			</form>
		</div>
	</div>
</div>