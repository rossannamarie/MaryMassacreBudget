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
	?>
		<META HTTP-EQUIV="refresh" content="0;URL=postlogin.php">
	<?php
	}	
	else if (!isset($_SESSION['username']))
	{
		$name = mysqli_real_escape_string($db, trim($_POST['username']));
		$pw = mysqli_real_escape_string($db, trim($_POST['password']));
		$name = mysqli_real_escape_string($db, strip_tags($_POST['username']));
		$pw = mysqli_real_escape_string($db, strip_tags($_POST['password']));

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
			echo "<h1>Login</h1>\n <form method=\"post\" action=\"postlogin.php\">";
			echo "<div id = \"form\"><table border = 0><tr><td align = \"right\"><label for=\"username\">Username:</td><td></label><input typ=\"text\" id=\"username\" name=\"username\" /></td></tr><tr><td align = \"right\">";
			echo "<label for=\"password\">Password:</td><td></label><input type=\"password\" id =\"password\" name=\"password\" /></td></tr><tr><td></td><td>";
			echo "<input type=\"submit\" value=\"Login\" name=\"submit\" /></td></form>";
			echo "</tr><tr><td></td><td><a href=\"register.php\">Register</a></td></tr></table></form>";
		}
	}
	else if (isset($_SESSION['username']))
	{
		echo "<p>You're logged in!</p>";
		echo "<p><a href=\"viewAll.php\">View All</a></p>";
	}
?>
</HTML>
			
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
