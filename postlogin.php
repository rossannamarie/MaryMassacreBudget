<?php
session_start();
?>
<HTML>
<title>Mary Massacre Budget</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<?php
	include 'template.php';
	echo "<p>You're logged in!</p>";
	echo "<p><a href=\"viewAll.php\">View All Transactions</a></p>";
?>

</HTML>
