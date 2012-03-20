<?php
session_start();
?>

<HTML>
<link rel="stylesheet" type="text/css" href="style.css" />
<div id="view">
<?php
	include 'template.php';
	include 'dbconnect.php';
	echo "Hello";
?>
<?php
	$query = "SELECT DISTINCT users.name, users.position, users.picture FROM users";
	$resultOne = mysqli_query($db, $query) or die ("Error Querying Database");
	while ($row = mysqli_fetch_array($resultOne)) 
	{
		$name = $row['name'];
		//$date = $row['dateSubmitted'];
		//$link = $row['link'];
		$position = $row['position'];
		$picture = $row['picture'];
		echo "<center>".$name."</center></br>";
		echo "<center><img src=".$picture." width=100 height=auto></center></br>";
		echo "<center>$position</center>";
		$query ="SELECT users.name, dateSubmitted, link FROM userLogs INNER JOIN users ON users.name = userLogs.name";
		$result = mysqli_query($db, $query) or die ("Error Querying Database");
		while ($row = mysqli_fetch_array($result)) 
		{
			$tname = $row['name'];
			//if($name == $tname) {
			$date = $row['dateSubmitted'];
			$link = $row['link'];
			echo "<p><b>$name</b> posted a transaction on <i>$date</i>.</br><font size=2><u>$link</u></font></p>";
			//}
		}
	}
?>



</div>
</HTML>
