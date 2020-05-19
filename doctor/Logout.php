<?php
	session_start();
	setcookie('user', '', time()-10, '/');
	header("location: Login.php");

?>