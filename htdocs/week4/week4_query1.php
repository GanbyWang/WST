<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="cgi_style.css" />
<title>week4_query1</title>
</head>

<body>
<h1>Who will go to the particular party?</h1>
<hr />

<div id="body">
<p>

<?php

$party_id=$_REQUEST['party_id'];

$db=mysqli_connect("localhost", "usr_2016_79", "19951018", "db_2016_79");

$query="SELECT * FROM party WHERE Party_ID=$party_id";
$result=mysqli_query($db, $query);
$num_rows=mysqli_num_rows($result);

if($num_rows==0)
{
	print "The party you are querying doesn't exist!";
}
else
{
	$row=mysqli_fetch_array($result);
	print "You are querying the party held in <strong>".$row["Place"]."</strong> by <strong>".$row["Host_Name"]."</strong> at <strong>".$row["Time"];
	print "</strong><br />";
	print "People attending the party are as below:";
	print "<ol>";
	
	$query="SELECT guest.Guest_Name, guest.Gender, guest.Age, guest.E_mail 
	FROM guest, guest_party 
	WHERE guest.Guest_ID=guest_party.Guest_ID 
	AND guest_party.Party_ID=$party_id";
	
	$result=mysqli_query($db, $query);
	$rows_num=mysqli_num_rows($result);
	for($row_num=1; $row_num<=$rows_num; $row_num++)
	{
		$row=mysqli_fetch_array($result);
		print "<li>";
		print "Guest Name: ".htmlspecialchars($row["Guest_Name"])."<br />";
		print "Guest Age: ".htmlspecialchars($row["Age"])."<br />";
		print "Guest Gender: ".htmlspecialchars($row["Gender"])."<br />";
		print "Guest E_mail Address: ".htmlspecialchars($row["E_mail"])."</li>";
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