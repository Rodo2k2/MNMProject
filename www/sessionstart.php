<?php
	session_start();// Starting Session	
	require ("connection.php");
	
	// Storing Session
	$user_check=$_SESSION['login_user'];
	
	// SQL Query To Fetch Complete Information Of User
	$ses_sql=mysqli_query("select username from login where username='$user_check'", $conn);
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session =$row['username'];
	
	if(!isset($login_session)){
		mysqli_close($conn); // Closing Connection
		header('Location: web.php'); // Redirecting To Home Page
	}
?>

