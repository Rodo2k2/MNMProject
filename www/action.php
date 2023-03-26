<html>
<head>
		<title> Action File </title>
</head>
<body>
<?php
	require("connection.php");
	echo "<h1>Hien thi thong tin sinh vien!</h1>";
	echo "<p>User's Name is: </p>";
	echo $_REQUEST["username"] ;
	echo "<br>";
	
	echo "<p>Password is: </p>";
	echo $_REQUEST["pwd"];
	echo "<br>";
	
	echo "<p>Last name is: </p>";
	echo $_REQUEST["fname"];
	echo "<br>";
	
	echo "<p>First name is: </p>";
	echo $_REQUEST["lname"];
	echo "<br>";
	
	echo "<p>Email address is: </p>";
	echo $_REQUEST["email"];
?>
</body>
</html>