<?php 
	session_start();
	require ("header.php");
?>

<html>

	<head>
		<title> SELECT  DuLieu From </title>
	</head>
	
	<body>
		<h1>Danh Sach Sinh Vien KNU K19 2021</h1>
		<div class="example">
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
	<?php
		
		require("connection.php");
		$query = "select * from userdata ";
		$result = mysqli_query($conn, $query) or die("Invalid query");
		$num = mysqli_num_rows($result);
		
		echo "<table border='1'>
		<tr>
			<th>User Name</th>
			<th>Password</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Action</th>

		</tr>";
		
		for($i=0; $i<$num; $i++){
			$row = mysqli_fetch_row($result);
			echo "<tr><td>" . $row[0] . "</td><td>" . $row[1];
			echo "</td><td>" . $row[2] . "</td><td>" . $row[3];
			echo "</td><td>" . $row[4] . "</td>";
			
			echo "<td><a href=\"delete.php?username=".$row[0]."\" >DELETE</a> | ";
			echo "<a href=\"update.php?username=".$row[0]."\" >UPDATE</a> </td></tr>";
		}
		
		echo "</table>";
		mysqli_close($conn);
	?>
					</thead>
				</table>
			</div>
		</div>
		</div>
	</body>
</html>
