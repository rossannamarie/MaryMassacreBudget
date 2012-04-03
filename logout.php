<?php
	session_start();
	session_destroy();
	$_SESSION['username'] = "loggedout";
?>

<META HTTP-EQUIV="refresh" content="0;URL=home.php">
