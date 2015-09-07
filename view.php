<?php include("dbconnect.php"); ?>

<h2>View My Guest Book!!</h2>

<?php

$result = mysql_query("select * from guestbook");
if ($result)
{
	while ($row = mysql_fetch_array($result)) 
	{
	print "<b>Name:</b>";
	print $row["name"];
	print "<br>\n";
	print "<b>Location:</b>";
	print $row["location"];
	print "<br>\n";
	print "<b>Email:</b>";
	print $row["email"];
	print "<br>\n";
	print "<b>URL:</b>";
	print $row["url"];
	print "<br>\n";
	print "<b>Comments:</b>";
	print $row["comments"];
	print "<br>\n";
	print "<br>\n";
	print "<br>\n";
	}
	mysql_free_result($result);
}
?>

<h2><a href="sign.php">Sign My Guest Book!!</a></h2>

