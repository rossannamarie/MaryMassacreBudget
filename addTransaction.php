<?php
session_start();
include 'dbconnect.php';
$name = $_SESSION[name];
$title =$_SESSION[title]; 
$amount = $_SESSION[amount];
$comp=$_SESSION[comp];
$date=$_SESSION[date];
$ford = $_SESSION[ford];
echo "<p> Name of transactor: " . "$name</p>";
	echo "<p> For: " . "$ford</p>";
	echo "<p> Title: " . "$title</p>";
	echo "<p> Amount: " . "$amount</p>";
	echo "<p> Type of transaction: " . "$comp</p>";
	echo "<p> Date: " . "$date</p>";
$insert = "INSERT INTO transactions (name, title, amount, flow, dateSubmitted, because) VALUES ('$name', '$title', '$amount', '$comp', '$date', '$ford')";
$result =mysqli_query($db, $insert) or die("Error inserting");
$insert = "INSERT INTO userLogs (name, dateSubmitted, link) VALUES ('$name', '$date', 'link')";
$result =mysqli_query($db, $insert) or die("Error inserting");
?>
<META HTTP-EQUIV="refresh" content="0;URL=viewAll.php">
