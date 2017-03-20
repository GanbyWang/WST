#!/usr/bin/perl -w
# collect.pl
# This program is used to collect the information that user filled in

use CGI ":standard";

sub error {
	print "Error file could not be opened in collect.pl <br />";
	print end_html();
	exit(1);
}

# Begin the main program

my($name, $age, $gender, $email) = (param("name"), param("age"), param("gender"), param("email"));

$LOCK = 2;
$UNLOCK = 8;

open(SURVDAT, ">>survdat.dat") or error();
# Add the infomation to survdat, note tha the new data is added to the end of the file
flock(SURVDAT, $LOCK);
# Lock the file

print SURVDAT "$name\n";
print SURVDAT "$age\n";
print SURVDAT "$gender\n";
print SURVDAT "$email\n";

flock(SURVDAT, $UNLOCK);
close(SURVDAT);
# Unlock the file

# The following part create the html page
print header();
print 
'<!DOCTYPE html>',
'<HTML><HEAD><TITLE>Submission Response</TITLE>',
'<link rel="stylesheet" type="text/css" href="cgi_style.css" />',
'</HEAD><BODY>';

print
'<h1>Submission Response</h1>',
'<hr />',
'<div id="body"><p>';

if ($gender eq "male") {
	print 'Mr.';
}
else {
	print 'Ms.';
}

print
"${name}:<br />",
"&nbsp;&nbsp;You have successfully turned in your form. ",
"Here is the information we collect from you:",
"<ul>",
"<li>Name: $name</li>",
"<li>Age: $age</li>",
"<li>Gender: $gender</li>",
"<li>E_mail address: $email</li>",
"</ul></p></div>",
'<hr />',
'<div id="footer"><a href="http://162.105.146.180:8079/week3_form.html">Click here to go back to the form page.</a></div>';

print end_html();