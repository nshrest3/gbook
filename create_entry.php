<?php include("dbconnect.php"); ?>
<?php

if (!empty($_POST['submit'])) {

	$names = $_POST['names'];
	$location = $_POST['location'];
	$email = $_POST['email'];
	$url = $_POST['url'];
	$comments = $_POST['comments'];

	$query = "insert into guestbook "
		." (names,location,email,url,comments) values "
		."('$names', '$location', '$email', '$url', '$comments')"
		;
	mysql_query($query);
?>
<h2>Thanks!!</h2>
<h2><a href="view.php">View My Guest Book!!!</a></h2>
<?php
}
else
{
	include("sign.php");
}
?>
