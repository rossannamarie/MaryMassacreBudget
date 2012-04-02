<?php
session_start();
include 'dbconnect.php';
?>

<HTML>
<title>Mary Massacre Budget</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<div id="banner">
<div id="title"> Mary Massacre Budget</div>
</div>

<link rel="stylesheet" type="text/css" href="style.css" />
<div id="regView">
<?php
	if (isset($_GET['name'])){
		$name= mysqli_real_escape_string(trim($_GET['name']));
		$name = mysqli_real_escape_string(strip_tags($name));
		$_SESSION['name'] = $name;
	}
	if (isset($_GET['password'])){
		$password= mysqli_real_escape_string(trim($_GET['password']));
		$password = mysqli_real_escape_string(strip_tags($password));
		$_SESSION['password'] = $password;
	}
	if (isset($_GET['position'])){
		$position= mysqli_real_escape_string(trim($_GET['position']));
		$position = mysqli_real_escape_string(strip_tags($position));
		$_SESSION['position'] = $position;
	}
	
	echo "<p>Welcome to the Mary Massacre Budget, " . "$name!</p>";
	echo "<p>Please confirm your registration.</p>";
?>
</div>
<form name="confirm" method="get" action="completeRegistration.php">
<input type="submit" value="Confirm" class="submitButton" />
</form>
</HTML>
