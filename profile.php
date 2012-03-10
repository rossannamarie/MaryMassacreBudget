<?php
session_start();
?>

<HTML>
<link rel="stylesheet" type="text/css" href="style.css" />
<div id="view">

<?php
	include 'template.php';
?>

<table width = "100%">
<tr valign = "top">
<td>
<center>*name goes here*</center></br>
<center><img src="default.jpg" width=200 height=auto></center></br>
<center>*info goes here*</center>
</td>
<td>
<p>
*user actions go here*</br></br>
Example:</br>
<b>User</b> posted a transaction on <i>1/1/2012</i>.</br><font size=2><u>Link to view transaction goes here</u></font></br>
</td>

</div>
</HTML>
