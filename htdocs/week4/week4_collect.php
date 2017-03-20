<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="cgi_style.css" />
<title>week4_collect</title>
</head>

<body>
<h1>Submission Response</h1>
<hr />

<div id="body">
<p>

<?php

$name=$_REQUEST['name'];
$age=$_REQUEST['age'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];

if($gender=="male")
{
	print "Mr.";
}
else
{
	print "Ms.";
}
print $name;
print "&nbsp;&nbsp;You have successfully turned in your form. Here is the information we collect from you:";
print "<ul>";
print "<li>Name: $name</li>";
print "<li>Age: $age</li>";
print "<li>Gender: $gender</li>";
print "<li>E_mail address: $email</li></ul>";

$db=mysqli_connect("localhost", "usr_2016_79", "19951018", "db_2016_79");

$query="INSERT INTO guest (Guest_ID, Guest_Name, Age, Gender, E_mail) VALUES('', '$name', $age, '$gender', '$email')";
$result=mysqli_query($db, $query);

mysqli_close($db);
?>

</p>
</div>

<hr />
<div id="footer"><a href="week4_form.html">Click here to go back to the form page.</a></div>
</body>
</html>