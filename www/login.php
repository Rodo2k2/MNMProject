<?php
	session_start(); // Starting Session
	require ("connection.php");
	$error=''; // Variable To Store Error Message
	
	if (isset($_POST['btn-log'])) {
	if (empty($_POST['username']) || empty($_POST['pwd'])) {
		$error = "Username or Password is invalid";
	}else{
	// Define $username and $password
	
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	
	// To protect MySQL injection for Security purpose
	//$username = stripslashes($username);
	//$pwd = stripslashes($pwd);
	
	//$username = mysql_real_escape_string($username);
	//$pwd = mysql_real_escape_string($pwd);
	
	// SQL query to fetch information of registerd users and finds user match.
	$query =("select * from userdata where pwd='$pwd' AND username='$username'");
	$result = mysqli_query($conn, $query) or die("Invalid query");
	$rows = mysqli_num_rows($result);
	
	if ($rows == 1) {
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: web.php"); // Redirecting To Other Page
	} else {
		$error = "Username or Password is invalid";
	}
	mysqli_close($conn); // Closing Connection
	}
	}
?>
