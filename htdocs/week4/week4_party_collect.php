<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="cgi_style.css" />
<title>week4_party_collect</title>
</head>

<body>
<h1>Submission Response</h1>
<hr />

<div id="body">
<p>

<?php

$host_name=$_REQUEST['host_name'];
$place=$_REQUEST['place'];
$time=$_REQUEST['time'];

print $host_name;
print "&nbsp;&nbsp;You have successfully turned in your form. Here is the information about the party:";
print "<ul>";
print "<li>Host Name: $host_name</li>";
print "<li>Place: $place</li>";
print "<li>time: $time</li>";

$db=mysqli_connect("localhost", "usr_2016_79", "19951018", "db_2016_79");

$query="INSERT INTO party (Party_ID, Time, Place, Host_Name) VALUES('', '$time', '$place', '$host_name')";
$result=mysqli_query($db, $query);

mysqli_close($db);
?>

</p>
</div>

<hr />
<div id="footer"><a href="week4_party_hold.html">Click here to go back to the form page.</a></div>
</body>
</html>