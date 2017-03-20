<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="cgi_style.css" />
<title>week4_show</title>
</head>

<body>
<h1>Data List</h1>
<hr />

<div id="body">
<p>

<form action="week4_delete.php" method="get">
&nbsp;&nbsp;Here is all the information collected. If you wanna delete some data, please tick it and click the Delete button.
<ol>

<?php

$db=mysqli_connect("localhost", "usr_2016_79", "19951018", "db_2016_79");

$query="SELECT * FROM guest";
$result=mysqli_query($db, $query);
$num_rows=mysqli_num_rows($result);

for($row_num=1; $row_num<=$num_rows; $row_num++)
{
	$row=mysqli_fetch_array($result);
	print "<li>";
	print "<input type=\"checkbox\" name=\"deletelist[]\" value=\"".htmlspecialchars($row["Guest_ID"])."\" />";
	print "Guest ID: ".htmlspecialchars($row["Guest_ID"])."<br />";
	print "Name: ".htmlspecialchars($row["Guest_Name"])."<br />";
	print "Age: ".htmlspecialchars($row["Age"])."<br />";
	print "Gender: ".htmlspecialchars($row["Gender"])."<br />";
	print "E_mail Address: ".htmlspecialchars($row["E_mail"])."</li>";
}
?>

</ol>
<input id="button" type="submit" value="Delete" />
</form>

<hr />

If you are linked here from Party List page, please click 
<a href="week4_party_show.php"><i>
here 
</i></a>
to go back.
</p>
</div>

<hr />
<div id="footer"><a href="week4_form.html">Click here to go back to the form page.</a></div>

</body>
</html>