<?php
session_start();
include 'dbconnect.php';
$name = $_SESSION['name'];
$password =$_SESSION['password']; 
$position = $_SESSION['position'];
echo "Hello ".$name."Password".$password."Position ".$position ."end";
$insert = "INSERT INTO users (name, password, position, picture) VALUES ('$name', '$password', '$position', 'default')";
$result =mysqli_query($db, $insert) or die("Error inserting");
?>
<META HTTP-EQUIV="refresh" content="0;URL=viewAll.php">
