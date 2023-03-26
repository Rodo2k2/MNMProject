<?php
	require("header.php");
	require("connection.php");
?>
<div class="container">
<?php 
	echo $_REQUEST['username'];
	$temp = $_REQUEST['username'];
	
	if($temp != ""){
		$query = "select * from userdata where `username` = '$temp'";
		$result = mysqli_query($conn, $query) or die("Invalid query");
		if($result->num_rows > 0){
			//var_dump($result);
		$data = mysqli_fetch_assoc($result);
		//var_dump($data);
?>
			
			<form action="processupdate.php" method="POST">
			  <div class="mb-3 mt-3">
				<label for="username" class="form-label">username</label>
				<input type="text" class="form-control" id="username" placeholder="username" value="<?=$data['username'];?>" name="username">
			  </div>
			  <div class="mb-3">
				<label for="pwd" class="form-label">password</label>
				<input type="password" class="form-control" value="<?=$data['pwd'];?>" id="password" placeholder="password" name="pwd">
			  </div>
			<div class="mb-3">
				<label for="fname" class="form-label">FirstName</label>
				<input type="text" class="form-control" value="<?=$data['fname'];?>" id="fname" placeholder="FirstName" name="fname">
			  </div>
			  <div class="mb-3">
				<label for="lname" class="form-label">LastName</label>
				<input type="text" class="form-control" value="<?=$data['lname'];?>" id="lname" placeholder="LastName" name="lname">
			  </div>
			  <div class="mb-3">
				<label for="email" class="form-label">email</label>
				<input type="email" class="form-control" value="<?=$data['email'];?>" id="email" placeholder="Email" name="email">
			  </div>
			  
			  <div class="form-check mb-3">
				<label class="form-check-label">
				  <input class="form-check-input" type="checkbox" name="remember"> Remember me
				</label>
			  </div>
			  <input type="hidden" name="id"  value="<?=$data['username'];?>" >
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>

				
<?php
			
		}else
		{
			echo "No available records. Pls, try agian! ";
		}
		
	}
echo "<a href=\"list.php\"> | BACK | </a>";

		
	
?>
