<?php
session_start();
?>

<HTML>
<link rel="stylesheet" type="text/css" href="style.css" />
<div id="view">
<table width = "100%">
<tr valign = "top">
<?php
	include 'template.php';
	include 'dbconnect.php';
?>
<?php
	$query = "SELECT DISTINCT users.name, userLogs.dateSubmitted, userLogs.link, users.position, users.picture FROM userLogs INNER JOIN users WHERE users.name = userLogs.name";
	$resultOne = mysqli_query($db, $query) or die ("Error Querying Database");
	while ($row = mysqli_fetch_array($resultOne)) 
	{
		$name = $row['name'];
		$date = $row['dateSubmitted'];
		$link = $row['link'];
		$position = $row['position'];
		$picture = $row['picture'];
		echo "<td>";
		echo "<center>".$name."</center></br>";
		echo "<center><img src=".$picture." width=100 height=auto></center></br>";
		echo "<center>$position</center>";
		echo "</td>";
		$query ="SELECT users.name, dateSubmitted, link FROM userLogs INNER JOIN users";
		$result = mysqli_query($db, $query) or die ("Error Querying Database");
		while ($row = mysqli_fetch_array($result)) 
		{
			$tname = $row['name'];
			if($name == $tname) {
			echo "<td>";
			$date = $row['dateSubmitted'];
			$link = $row['link'];
			echo "<p>";
			echo "<b>$name</b> posted a transaction on <i>$date</i>.</br><font size=2><u>$link</u></font></br>";
			echo "</td>";
			}
		}
			echo "<tr></tr>";
	}
?>



</div>
</HTML>
