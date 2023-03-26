<?php 
	setcookie("firstName", "Hoàng");
	setcookie("lastName", "Phạm");
	setcookie("occupation", "English Teacher");
		if (isset($_COOKIE['firstName'])
			&& isset($_COOKIE['lastName'])
			&& isset($_COOKIE['occupation']))
		echo "{$_COOKIE['firstName']} {$_COOKIE['lastName']}
			is a {$_COOKIE['occupation']}.";

?>