<?php
session_start();
?>
<HTML>
<title>Mary Massacre Budget</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<div id="banner">
<div id="title"> Mary Massacre Budget</div>
</div>

<?php
	include "dbconnect.php";
	if (isset($_SESSION['username']))
	{
		echo "<p>You're logged in!</p>";
		echo "<p><a href=\"viewAll.php\">View All</a></p>";
	}	
	else if (!isset($_SESSION['username']))
	{
		$name = $_POST['username'];
		$pw = $_POST['password'];

		$query = "select * from users WHERE name = '$name' AND password = '$pw'";
		$result = mysqli_query($db, $query);
		if ($row = mysqli_fetch_array($result))
		{
			$_SESSION['username'] = $row['name'];
			$_SESSION['password'] = $row['password'];
		}
		else		
		{
			//echo "<p>Incorrect username or password</p>\n";
			echo "<h1>Login</h1>\n <form method=\"post\" action=\"login.php\">";
			echo "<label for=\"username\">Username : </label><input typ=\"text\" id=\"username\" name=\"username\" /><br/>";
			echo "<label for=\"password\">Password : </label><input type=\"password\" id =\"password\" name=\"password\" /><br/>";
			echo "<input type=\"submit\" value=\"Login\" name=\"submit\" /></form> <p><a href=\"register.php\">Register</a></p>";
		}
	}
	else if (isset($_SESSION['username']))
	{
		echo "<p>You're logged in!</p>";
		echo "<p><a href=\"viewAll.php\">View All</a></p>";
	}
?>
			
<!--<div id="login">
<form name="login" method="get" action="viewAll.php">
<p> Username : <input type="text" name="username" />
<p> Password : <input type="password" name="password" />
<br/>
<br/>
<input type="submit" value="Login" class="submitButton" />
</form>
</div>
</HTML>-->
