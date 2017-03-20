#!/usr/bin/perl -w
# show.pl
# This program is used to list the data collected

use CGI ":standard";

sub error {
	print "Error file could not be opened in show.pl <br />";
	print end_html();
	exit(1);
}

# Begin the main program

$LOCK = 2;
$UNLOCK = 8;

open(SURVDAT, "<survdat.dat") or error();
flock(SURVDAT, $LOCK);
@data = <SURVDAT>;
flock(SURVDAT, $UNLOCK);
close(SURVDAT);

# The following part create the html page
print header();
print 
'<!DOCTYPE html>',
'<HTML><HEAD><TITLE>Query</TITLE>',
'<link rel="stylesheet" type="text/css" href="cgi_style.css" />',
'</HEAD><BODY>';

print
'<h1>Data List</h1>',
'<hr />',
'<div id="body"><p><form action="delete.pl" method="get">',
'&nbsp;&nbsp;Here is all the information collected. ',
'If you wanna delete some data, please tick it and click the Delete button.<ol>';

$len = @data;
$index = 0;
for ($count = 0; $count < $len; $count += 4, $index++)
{
	print
	'<li>',
	"<input type=\"checkbox\" name=\"deletelist\" value=\"$index\" />",
	"Name: $data[$count+0]<br />",
	"Age: $data[$count+1]<br />",
	"Gender: $data[$count+2]<br />",
	"E_mail Address: $data[$count+3]</li>";
}

print
'</ol><input id="button" type="submit" value="Delete" />',
'</form></p></div><hr />',
'<div id="footer"><a href="http://162.105.146.180:8079/week3_form.html">Click here to go back to the form page.</a></div>';

print end_html();