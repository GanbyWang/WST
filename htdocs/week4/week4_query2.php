<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="cgi_style.css" />
<title>week4_query2</title>
</head>

<body>
<h1>Which party will someone hold?</h1>
<hr />

<div id="body">
<p>

<?php

$host_name=$_REQUEST['host_name'];

$db=mysqli_connect("localhost", "usr_2016_79", "19951018", "db_2016_79");

$query="SELECT * FROM party WHERE Host_Name='$host_name'";
$result=mysqli_query($db, $query);
$num_rows=mysqli_num_rows($result);

if($num_rows==0)
{
	print "The person you are querying won't hold any party!";
}
else
{
	$row=mysqli_fetch_array($result);
	print $host_name." will hold the following parties:";
	print "<ol>";
	
	$query="SELECT * FROM party WHERE Host_Name='$host_name'";
	
	$result=mysqli_query($db, $query);
	$rows_num=mysqli_num_rows($result);
	for($row_num=1; $row_num<=$rows_num; $row_num++)
	{
		$row=mysqli_fetch_array($result);
		print "<li>";
		print "Party Host: ".htmlspecialchars($row["Host_Name"])."<br />";
		print "Party Time: ".htmlspecialchars($row["Time"])."<br />";
		print "Party Place: ".htmlspecialchars($row["Place"])."<br />";
	}
	print "</ol>";
}
?>

</p>
</div>

<hr />
<div id="footer"><a href="week4.html#hw5">Click here to go back to the form page.</a></div>
</body>
</html>