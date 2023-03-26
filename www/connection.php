<?php
	$conn=mysqli_connect("localhost","root","")
	or die("No connection!".mysqli_error($conn));
	mysqli_select_db($conn , "user")
	or die('db will not open'.mysqli_error($conn));
	$query = "select * from userdata";
	$result = mysqli_query($conn, $query) 
	or die("Invalid query");
?>

