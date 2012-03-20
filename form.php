<HTML>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
include 'template.php';
?>
<div id="form">
<form name="login" method="get" action="view.php">
<p> Name of transactor: <input type="text" name="name" /></p>
<input type="radio" name="ford" value="Gas" />Gas
<input type="radio" name="ford" value="Bid" />Bid
<input type="radio" name="ford" value="Hotel" />Hotel
<input type="radio" name="ford" value="Other" />Other
<p> Title : <input type="text" name="title" /></p>
	e.g. Cupid's Revenge Bid <p></p>
<p> Amount : <input type="text" name="amount" /></p>
<input type="radio" name="comp" value="Reimbursement" />Reimbursement
<input type="radio" name="comp" value="Paid out" />Paid out
<p> Date : <input type="text" name="date" /></p>
	<i><font size=2>ex. YYYY-MM-DD</font></i>
<br/>
<br/>
<input type="submit" value="Submit Application" class="submitButton" />
</form>
</div>
</HTML>
