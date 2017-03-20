<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>week8_cookbook</title>

<style type="text/css">
body{
	font-family:Verdana, Geneva, sans-serif;
	margin:0px 0px 0px 0px;
	background-color:whitesmoke;
}

a{
	text-decoration:none;
}

a.one:link {color:white;}
a.one:visited {color:white;}
a.one:hover {color:coral;}

a.two:link {color:lightslategray;}
a.two:visited {color:lightslategray;}
a.two:hover {color:coral;}

a.three:link {color:black;}
a.three:visited {color:black;}
a.three:hover {color:coral;}

#nav{
	width:100%;
	margin:0px 0px 0px 0px;
	padding:0px 0px 0px 0px;
}

#nav table{
	width:100%;
	text-align:center;
	background-color:black;
	color:white;
	height:50px;
	border-style:none;
}

#header{
	text-align:center;
	padding:30px;
	color:lightslategray;
}

.hw {
	width:80%;
	padding:30px 10% 30px 10%;
	line-height:200%;
}

.hw caption {
	font-size:32px;
	margin:20px;
	color:gray;
}

.hw table {
	border:2px gray;
	border-style:solid;
	border-collapse:collapse;
	padding:10px;
}

.hw th {
	border:2px gray;
	background:black;
	color:white;
	border-style:solid;
	border-collapse:collapse;
	padding:10px;
}

.hw td {
	border:2px gray;
	background:white;
	border-style:solid;
	border-collapse:collapse;
	padding:20px;
	font-family:"Comic Sans MS", cursive;
}

.hw ol {
	line-height:200%;
}

img {
	width:80%;
	margin:20px 10% 20px 10%;
}

#footer{
	clear:both;
	text-align:left;
	width:100%;
	background-color:black;
	color:white;
	padding:10px 20px 10px 20px;
}
</style>
</head>

<body>
<div id="nav">
<table>
<tr>
<td width="33%">
<strong><a href="../index.html" class="one">Homepage</a></strong>
</td>

<td width="33%" style="background:white; color:black;">
<strong>Homework List</strong>
</td>

<td width="33%">
<strong><a href="../index.html#info" class="one">Contact Me</a></strong>
</td>
</tr>
</table>
</div>

<div id="header">
<h1>Week 8 Cookbook</h1>
</div>

<xsl:for-each select="cookbook/recipe">
<hr />
<div class="hw">

<table>
<caption>
<xsl:value-of select="name"/>
</caption>

<tr>
<th>Ingredient</th>
<th>Amount</th>
</tr>

<xsl:for-each select="material">
<xsl:for-each select="ingredient">
<tr>
<td width="50%"><xsl:value-of select="name" /></td>
<td width="50%"><xsl:value-of select="amount" /></td>
</tr>
</xsl:for-each>
</xsl:for-each>


<tr>
<th colspan="2">Directions</th>
</tr>

<tr>
<td colspan="2">
<ol>
<xsl:for-each select="direction">
<li>
<xsl:value-of select="step" />
</li>
</xsl:for-each>
</ol>
</td>
</tr>

</table>
</div>
</xsl:for-each>

<hr />

<p style="text-align:right;">
<a href="week8.html" class="two">Back to week 8 page.</a>
</p>

<div id="footer">
<p>Copyright@Alex_Wang | Web Software Technology</p>
</div>
</body>
</html>

</xsl:template>
</xsl:stylesheet>