<?php
session_start();
include "dbconnect.php";
?>
<HTML>
<link rel="stylesheet" type="text/css" href="style.css" />
<div id="view">
<?php
include 'template.php';
	if (isset($_GET['name'])){
		$name= mysqli_real_escape_string($db, trim($_GET['name']));
		$name = mysqli_real_escape_string($db, strip_tags($name));
		$_SESSION['name'] = $name;
	}
	if (isset($_GET['ford'])){
		$ford=$_GET['ford'];
		$_SESSION['ford'] = $ford;
	}
	if (isset($_GET['title'])){
		$title=$_GET['title'];
		$_SESSION['title'] = $title;
	}
	if (isset($_GET['amount'])){
		$amount=$_GET['amount'];
		$_SESSION['amount'] = $amount;
	}
	if (isset($_GET['comp'])){
		$comp=$_GET['comp'];
		$_SESSION['comp'] = $comp;
	}
	if (isset($_GET['date'])){
		$date=$_GET['date'];
		$_SESSION['date'] = $date;
	}
	
	echo "<p> Name of transactor: " . "$name</p>";
	echo "<p> For: " . "$ford</p>";
	echo "<p> Title: " . "$title</p>";
	echo "<p> Amount: " . "$amount</p>";
	echo "<p> Type of transaction: " . "$comp</p>";
	echo "<p> Date: " . "$date</p>";
?>
</div>
<form name="confirm" method="get" action="addTransaction.php">
<input type="submit" value="Confirm" class="submitButton" />
</form>
</HTML>
