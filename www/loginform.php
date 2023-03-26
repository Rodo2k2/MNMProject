<?php 
	require ("header.php");
	require ("connection.php");
	include('login.php'); // Includes Login Script
?>

<html>
<body>
<div class="container">
	<div class="row">
		<div class="col-6 offset-md-3">
			<form id="form_reg" class="bg-light p-4 my-3" method="post">
			<h2 class="py-3 text-center text-uppercase">Login Form</h2>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" id="username">	
			</div>
			
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" name="pwd" class="form-control" id="pwd">	
			</div>
			
			<div class="form-group">
				<div class="custom-control custom-checkbox small">
					<input type="checkbox" class="custom-control-input" id="customCheck">
					<label class="custome-control-label" for="customCheck">Remember Me</label>				
				</div>	
			</div>
			
			<input type="submit" class="btn btn-primary btn-block mt-4" name="btn-log" value="Login">
			<a href="registerform.php" class="btn btn-success btn-block mt-4" role="button" aria-pressed="true">Register</a>
			
			</form>
		</div>
	</div>
</div>


<?php 
 require ("footer.php");
?>

</body>

</html>

