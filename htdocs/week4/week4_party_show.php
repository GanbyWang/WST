<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="cgi_style.css" />
<title>week4_party_show</title>
</head>

<body>
<h1>Party List</h1>
<hr />

<div id="body">
<p>

<form action="week4_party_join.php" method="get">
&nbsp;&nbsp;Here are all the parties going to be held. If you wanna join them, please tick the parties you wanna join and click the Join button.

<ol>
<?php

$db=mysqli_connect("localhost", "usr_2016_79", "19951018", "db_2016_79");

$query="SELECT * FROM party";
$result=mysqli_query($db, $query);
$num_rows=mysqli_num_rows($result);

for($row_num=1; $row_num<=$num_rows; $row_num++)
{
	$row=mysqli_fetch_array($result);
	print "<li>";
	print "<input type=\"checkbox\" name=\"joinlist[]\" value=\"".htmlspecialchars($row["Party_ID"])."\" />";
	print "Time: ".htmlspecialchars($row["Time"])."<br />";
	print "Place: ".htmlspecialchars($row["Place"])."<br />";
	print "Host Name: ".htmlspecialchars($row["Host_Name"])."</li>";
}
?>
</ol>

<hr />

Your Guest_ID is needed if you wanna join parties:<br /><br />
<input type="text" name="guest_id" style="font-size:24px;" /><br /><br />
If you forget your Guest_ID, please click 
<a href="week4_show.php"><i>
here 
</i></a>
to view the guest information.<br />
<hr />
<input id="button" type="submit" value="Join" />
</form>
</p>
</div>

<hr />
<div id="footer"><a href="week4_form_op.html">Click here to go back to the form page.</a></div>

</body>
</html>