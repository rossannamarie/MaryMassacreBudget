<?php
session_start();
`include 'dbconnect.php';
$name = $_SESSION[name];
$title =$_SESSION[password]; 
$amount = $_SESSION[position];
$insert = "INSERT INTO users (name, password, position, picture) VALUES ('$name', '$password', '$position', 'default.jpg')";
$result =mysqli_query($db, $insert) or die("Error inserting");
?>
<META HTTP-EQUIV="refresh" content="0;URL=viewAll.php">
