<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="cgi_style.css" />
<title>week4_delete</title>
</head>

<body>
<h1>Deletion Response</h1>
<hr />

<div id="body">
<p>
&nbsp;&nbsp;You have successfully delete the data! Now the data is as follows:
<ol>

<?php

$db=mysqli_connect("localhost", "usr_2016_79", "19951018", "db_2016_79");

$delete_list=$_REQUEST['deletelist'];
$size=count($delete_list);
for($i=0; $i<$size; $i++)
{
	$delete_ID=$delete_list[$i];
	
	$query="DELETE FROM guest_party WHERE Guest_ID=$delete_ID";
	mysqli_query($db, $query);
	
	$query="DELETE FROM guest WHERE Guest_ID=$delete_ID";
	mysqli_query($db, $query);
}

$query="SELECT * FROM guest";
$result=mysqli_query($db, $query);
$num_rows=mysqli_num_rows($result);

for($row_num=1; $row_num<=$num_rows; $row_num++)
{
	$row=mysqli_fetch_array($result);
	print "<li>";
	print "Guest ID: ".htmlspecialchars($row["Guest_ID"])."<br />";
	print "Name: ".htmlspecialchars($row["Guest_Name"])."<br />";
	print "Age: ".htmlspecialchars($row["Age"])."<br />";
	print "Gender: ".htmlspecialchars($row["Gender"])."<br />";
	print "E_mail Address: ".htmlspecialchars($row["E_mail"])."</li>";
}
?>

</ol>
</p>
</div>

<hr />
<div id="footer"><a href="week4_form.html">Click here to go back to the form page.</a></div>

</body>
</html>