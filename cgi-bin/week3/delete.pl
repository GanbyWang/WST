#!/usr/bin/perl -w
# delete.pl
# This program is used to delete data that was chosen in the query page
# This program is called by show.pl

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
'<HTML><HEAD><TITLE>Delete</TITLE>',
'<link rel="stylesheet" type="text/css" href="cgi_style.css" />',
'</HEAD><BODY>';

# Store the deletelist to array del_list
my(@del_list) = param("deletelist");

open(SURVDAT, ">survdat.dat") or error();
flock(SURVDAT, $LOCK);

$len = @data;
$del_len = @del_list;
$index = 0;
$del_index = 0;
$count = 0;
for(; $count < $len && $del_index < $del_len; $count += 4, $index++)
{
	# If the index equals the del_list index, ignore it and increase del_index
	if($index == $del_list[$del_index])
	{
		$del_index++;
	}
	# Otherwise, copy the record to the new file
	else
	{
		print SURVDAT "$data[$count+0]";
		print SURVDAT "$data[$count+1]";
		print SURVDAT "$data[$count+2]";
		print SURVDAT "$data[$count+3]";
	}
}
# The following part move the remaining data to the new file
while($count < $len)
{
	print SURVDAT "$data[$count+0]";
	print SURVDAT "$data[$count+1]";
	print SURVDAT "$data[$count+2]";
	print SURVDAT "$data[$count+3]";
	$count += 4;
}

flock(SURVDAT, $UNLOCK);
close(SURVDAT);
# Unlock the file

print
'<h1>Deletion Response</h1>',
'<hr /><div id="body"><p>',
'&nbsp;&nbsp;You have successfully delete the data! Now the data is as follows:',
'<ol>';

open(SURVDAT, "<survdat.dat") or error();
flock(SURVDAT, $LOCK);
@new_data = <SURVDAT>;
flock(SURVDAT, $UNLOCK);
close(SURVDAT);

$len = @new_data;
$index = 0;
for ($count = 0; $count < $len; $count += 4, $index++)
{
	print
	'<li>',
	"Name: $new_data[$count+0]<br />",
	"Age: $new_data[$count+1]<br />",
	"Gender: $new_data[$count+2]<br />",
	"E_mail Address: $new_data[$count+3]</li>";
}

print
'</ol></p></div><hr />',
'<div id="footer"><a href="http://162.105.146.180:8079/week3_form.html">Click here to go back to the form page.</a></div>';

print end_html();