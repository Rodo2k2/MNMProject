<?php
	REQUIRE ("connection.php");
	if(isset($_POST["btn-reg"])){
		
		$username = $_POST["username"];
		$pwd = $_POST["pwd"];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		
		if(!empty($username)&&!empty($pwd)&&!empty($fname)&&
		!empty($lname)&&!empty($email)){
			echo "<pre>";
			print_r($_POST);
			
			$sql= "INSERT INTO `userdata` (`username`,`pwd`,`fname`,`lname`,`email`) VALUES('$username',md5('$pwd'),'$fname','$lname','$email') ";
				
			if($conn->query($sql)===TRUE){
				echo "Input data sucessfully!";
			}else{
				echo "Error {$sql}".$conn->error;
			}
		}
		else{
			echo "Your information must be fullfilled!";
			
		}
		
	}
		

?>