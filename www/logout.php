<?php
	session_start();
	ob_start();
	
	unset($_SESSION['login']);
	
	header('Location: web.php');

?>