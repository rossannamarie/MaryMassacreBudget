<?php
session_start();
?>

<HTML>
<link rel="stylesheet" type="text/css" href="style.css" />
<div id="view">
<?php
	include 'template.php';
	include 'dbconnect.php';
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
		$query ="SELECT users.name, userLogs.id, dateSubmitted, link FROM userLogs INNER JOIN users ON users.name = userLogs.name";
		$result = mysqli_query($db, $query) or die ("Error Querying Database");
		while ($row = mysqli_fetch_array($result)) 
		{
			//echo "<form method=get action=viewTransaction.php>";
			$tname = $row['name'];
			if($name == $tname) {
			$date = $row['dateSubmitted'];
			$link = $row['id'];
			echo "<p><b>$name</b> posted a transaction on <i>$date</i></p>";
			//echo "<input type=\"submit\" value=\"View transaction\" id = ".$link." />";
			//echo "</form>";
			}
		}
	}
?>



</div>
</HTML>
