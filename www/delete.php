<html>
<head>
		<title> DELETE </title>
</head>
<body>
<?php
	echo $_REQUEST["username"];
	require("connection.php");
	$temp = $_REQUEST["username"];
	
	if($temp != ""){
	$query = "DELETE FROM userdata WHERE `username` = '$temp'";
	$result = mysqli_query($conn, $query) or die("Invalid query");
		if($result > 0)
			echo "Value is succesfully deleted";
		else
			echo "No action delete!";
	}
	echo"<br>";
	echo"<p>Quay lai Trang Chủ</p>";
	echo "<a href=\"list.php\">Homepage List of Students</a>"; 
?>
</body>
</html>
