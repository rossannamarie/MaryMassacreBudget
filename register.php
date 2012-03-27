<HTML>
<title>Mary Massacre Budget</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<div id="banner">
<div id="title"> Mary Massacre Budget</div>
</div>

<?php
	if (isset($_POST['username']) && isset($_POST['password']) && $_POST['password'] == $_POST['cpassword'])
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$msg = "Welcome to the Mary Massacre Budget!"
		$query = "SELECT FROM users (name, password) values ('$username', '$password')";
	}

</HTML>
