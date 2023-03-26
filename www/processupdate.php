<?php 
		require("connection.php");
		$username = $_REQUEST['username'];		
		$pwd = $_REQUEST['pwd'];
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$email = $_REQUEST['email'];
		if ($username !="")
		{
			$sql = "UPDATE userdata SET username='$username', email='$email' ,pwd ='$pwd',lname ='$lname', fname = '$fname'  WHERE username='$username'";
			if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
			} else {
			echo "Error updating record: " . $conn->error;
			}
	$conn->close();
		}
echo "<a href=\"list.php\"> | BACK | </a>";
?>