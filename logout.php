<?php
	session_destroy();
	$_SESSION['username'] = "loggedout";
?>

<META HTTP-EQUIV="refresh" content="0;URL=login.php">
