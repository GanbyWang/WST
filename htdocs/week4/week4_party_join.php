<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="cgi_style.css" />
<title>week4_party_join</title>
</head>

<body>
<h1>Application Response</h1>
<hr />

<div id="body">
<p>
&nbsp;&nbsp;You have successfully turned in your application! Here are the parties you wanna join:

<ol>

<?php

$db=mysqli_connect("localhost", "usr_2016_79", "19951018", "db_2016_79");

$guest_id=$_REQUEST['guest_id'];
$join_list=$_REQUEST['joinlist'];
$size=count($join_list);
for($i=0; $i<$size; $i++)
{
	$party_id=$join_list[$i];
	$query="SELECT * 
	FROM guest_party 
	WHERE Party_ID=$party_id 
	AND Guest_ID=$guest_id";
	$result=mysqli_query($db, $query);
	$num_rows=mysqli_num_rows($result);
	if($num_rows==0)
	{
		$query="INSERT INTO guest_party 
		VALUES($guest_id, $party_id)";
		mysqli_query($db, $query);
	}
}

$query="SELECT party.Time, party.Place, guest.Guest_Name 
FROM guest, party, guest_party 
WHERE party.Party_ID=guest_party.Party_ID 
AND guest_party.Guest_ID=guest.Guest_ID 
AND guest.Guest_ID=$guest_id";

$result=mysqli_query($db, $query);
$num_rows=mysqli_num_rows($result);

for($row_num=1; $row_num<=$num_rows; $row_num++)
{
	$row=mysqli_fetch_array($result);
	print "<li>";
	print "Name: ".htmlspecialchars($row["Guest_Name"])."<br />";
	print "Party Time: ".htmlspecialchars($row["Time"])."<br />";
	print "Party Place: ".htmlspecialchars($row["Place"])."<br />";
}

?>

</ol>
</p>
</div>

<hr />
<div id="footer"><a href="week4_form_op.html">Click here to go back to the form page.</a></div>

</body>
</html>