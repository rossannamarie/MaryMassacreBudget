<HTML>
<title>Mary Massacre Budget</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<div id="banner">
<div id="title"> Mary Massacre Budget</div>
</div>

<?php
	include "dbconnect.php";

	if (isset($_POST['username']) && isset($_POST['password']) && $_POST['password'] == $_POST['cpassword'])
	{
		$username = mysqli_real_escape_string($db, trim($_POST['username']));
		$password = mysqli_real_escape_string($db, trim($_POST['password']));
		$msg = "Welcome to the Mary Massacre Budget!"
		$query = "SELECT FROM users (name, password) values ('$username', '$password')";
	}
?>

</HTML>
