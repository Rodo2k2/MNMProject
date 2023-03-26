<?php 
 REQUIRE ("header.php");
?>

<html>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6 offset-md-3">
				<form id="form_reg" class="bg-light p-4 my-3" action="register.php" method="post">
					<h2 class="py-3 text-center text-uppercase">Register Form</h2>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" class="form-control" id="username">	
					</div>
					
					<div class="form-group">
						<label for="pwd">Password</label>
						<input type="password" name="pwd" class="form-control" id="pwd">	
					</div>
					
					<div class="form-group">
						<label for="fname">First Name</label>
						<input type="text" name="fname" class="form-control" id="fname">	
					</div>
					
					<div class="form-group">
						<label for="lname">Last Name</label>
						<input type="text" name="lname" class="form-control" id="lname">	
					</div>
					
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" id="email">	
					</div>
					
					<input type="submit" class="btn btn-primary btn-block mt-4" name="btn-reg" value="Register">
					
				</form>
			</div>
		</div>
	</div>

<?php 
 REQUIRE ("footer.php");
?>

</body>

</html>
