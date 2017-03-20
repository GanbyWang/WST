<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="cgi_style.css" />
<title>week7_hw3</title>
</head>

<body>
<h1>Submission Response</h1>
<hr />

<div id="body">
<p style="text-align:center;">

If everything works fine, you shall see the shape you want with the color you want below:<br />
<applet code="HW3.class" width="300" height="300">
<?php
print '<param name="shape" value="'.$_GET["shape"].'" />';
print '<param name="color" value="'.$_GET["color"].'" />';
?>
</applet>

</p>
</div>

<hr />
<div id="footer"><a href="week7.html">Click here to go back to week 7 page.</a></div>
</body>
</html>