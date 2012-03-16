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
	echo "Hello";
	$query = "SELECT DISTINCT users.name, dateSubmitted, link, position, picture FROM userLogs INNER JOIN users ON name=name";
	$result = mysqli_query($db, $query) or die ("Error Querying Database");
	while ($row = mysqli_fetch_array($result)) 
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
		result = mysqli_query($db, $query) or die ("Error Querying Database");
		while ($row = mysqli_fetch_array($result)) 
		{
			$name = $row['name'];
			$date = $row['dateSubmitted'];
			$link = $row['link'];
			echo "<td>";
			echo "<p>";
			echo "<b>$name</b> posted a transaction on <i>$date</i>.</br><font size=2><u>$link</u></font></br>";
			echo "</td>";
		}
	}
?>



</div>
</HTML>
