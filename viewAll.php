<HTML>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
include 'template.php';
include 'dbconnect.php';
?>
<br/>
<br/>
<table id="all">
	<th> Name</th>
	<th> Title </th>
	<th> For </th>
	<th> Amount </th>
	<th> Flow </th>
	<th> Date Submitted </th>
	<?php
		$query = "SELECT * FROM transactions";
		$result = mysqli_query ($db, $query)
			or die ( "Error Querying Database");
		while ($row = mysqli_fetch_array($result))
		{
			$name = $row['name'];
			$title = $row['title'];
			$amount = $row['amount'];
			$flow = $row['flow'];
			$date = $row['dateSubmitted'];
			$ford = $row['because'];
			
			echo "<tr><td>$name</td><td>$title</td><td>$ford</td><td>$amount</td><td>$flow</td><td>$date</td></tr>\n";
		}
	?>
	</table>
</div>
</HTML>
