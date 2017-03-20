<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="cgi_style.css" />
<title>week6_form</title>
</head>

<body>
<h1>Submission Response</h1>
<hr />

<div id="body">
<p>

<?php

$fname=$_REQUEST['Personal_FirstName'];
$lname=$_REQUEST['Personal_LastName'];
$age=$_REQUEST['Personal_Age'];
$sex=$_REQUEST['Personal_Sex'];
$id=$_REQUEST['Personal_IDNumber'];
$ent=$_REQUEST['Watch'];
$holi=$_REQUEST['holiday'];
$know=$_REQUEST['knowledge'];

if($sex=='Male')
{
	print "Mr.";
}
else
{
	print "Ms.";
}
print $lname;

print "<br />&nbsp;&nbsp;You have successfully turned in your form. Here is the information we collect from you:";

print "<ul>";
print "<li>First Name: $fname</li>";
print "<li>Last Name: $lname</li>";
print "<li>Age: $age</li>";
print "<li>Gender: $sex</li>";
print "<li>ID Number: $id</li>";
print "<li>Entertainment: $ent</li>";
print "<li>Destination: $holi</li>";
print "<li>Knowledge of JS: $know</li>";

?>

</p>
</div>

<hr />
<div id="footer"><a href="week6_wizardForm.html">Click here to go back to the form page.</a></div>
</body>
</html>