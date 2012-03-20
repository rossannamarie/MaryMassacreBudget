<?php
	$_SESSION['username'] = "loggedout";
	session_destroy();
?>

<META HTTP-EQUIV="refresh" content="0;URL=login.php">
