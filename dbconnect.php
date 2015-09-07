<?php
	if (!($mylink = mysql_connect("localhost","root","root")))
		{
			print "<h3>could not connect to database</h3>\n";
			exit;
		}
	echo "DB conection succesful";
	mysql_select_db("gbook");
?>
