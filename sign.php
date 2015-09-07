<?php include("dbconnect.php"); ?>

<h2>Sign my Guest Book!!!</h2>

<form method=post action="create_entry.php">

<b>Name:</b>
<input type=text size=40 name=names>
<br>
<b>Location:</b>
<input type=text size=40 name=location>
<br>
<b>Email:</b>
<input type=text size=40 name=email>
<br>
<b>Home Page URL:</b>
<input type=text size=40 name=url>
<br>
<b>Comments:</b>
<textarea name=comments cols=40 rows=4 wrap=virtual></textarea>
<br>

<input type=submit name=submit value="Sign">
<input type=reset name=reset value="Start Over">

</form>

