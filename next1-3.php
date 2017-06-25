<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>About me</title>
<link rel="stylesheet" type="text/css" href="ext1.css">
</head>
<body onload="startTime()"">
 <div align="right">
		
		<?php
			if(isset($_SESSION["signin"]))
			{	
					echo "<span class='user' >". $_SESSION['email']  ."&nbsp&nbsp&nbsp<a href='logout.php'>Log Out</a></span>";
			}
			else
			{
				echo "<span class='user'><a href='signin.html' target='_blank'>Log In</a>&nbsp|&nbsp<a href='signup.html' target='_blank'>Sign Up</a></span>";
			}
		?>
    </div>
<blockquote>

<table cellpadding="10">
<tr>
<td>
<h2>HTML & CSS VIDEOS</h2>
</td>
</tr>
<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 1 - Downloading a Text Editor.mp4" type="video/mp4" >
</video> </dt>
<dd>
Creating our First Webpage
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 2 - Creating our First Webpage.mp4" type="video/mp4" >
</video> </dt>
<dd>
Downloading a Text Editor
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 3 - body and headers.mp4" type="video/mp4" >
</video> </dt>
<dd>
Body and Headers
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 4 - Paragraphs and Line Breaks.mp4" type="video/mp4" >
</video> </dt>
<dd>
Paragraphs and Line Breaks
</dd>
</dl></td>
</tr>

<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 5 - Bold. Italics. and Comments.mp4" type="video/mp4" >
</video> </dt>
<dd>
Bold. Italics. and Comments
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 6 - Adding Links to our Webpage.mp4" type="video/mp4" >
</video> </dt>
<dd>
Adding Links to our Webpage
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 7 - Creating a Link Within a Web Page.mp4" type="video/mp4" >
</video> </dt>
<dd>
Create a Link Within a WebPage
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 8 - Email Links and Tool Tips.mp4" type="video/mp4" >
</video> </dt>
<dd>
Email Links and Tool Tips
</dd>
</dl></td>
</tr>

<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 9 - Adding Images to the Webpage.mp4" type="video/mp4" >
</video> </dt>
<dd>
Adding Images to the Webpage
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 10 - Resizing Images.mp4" type="video/mp4" >
</video> </dt>
<dd>
Resizing Images
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 11 - Tables.mp4" type="video/mp4" >
</video> </dt>
<dd>
Tables
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 12 - Table Headers and Movie Stars!.mp4" type="video/mp4" >
</video> </dt>
<dd>
Table Headers and Movie Stars!
</dd>
</dl></td>
</tr>


<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 13 - colspan & Annoying People.mp4" type="video/mp4" >
</video> </dt>
<dd>
Colspan & Annoying People
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 14 - Table width. cellpadding. and cellspacing.mp4" type="video/mp4" >
</video> </dt>
<dd>
Cellpadding and Cellspacing
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 15 - Lists.mp4" type="video/mp4" >
</video> </dt>
<dd>
Lists
</dd>
</dl></td>
<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 16 - Intro to CSS.mp4" type="video/mp4" >
</video> </dt>
<dd>
Intro to CSS
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 17 - RGB Color and Line Spacing.mp4" type="video/mp4" >
</video> </dt>
<dd>
RGB Color and Line Spacing
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 18 - font-weight & font-style.mp4" type="video/mp4" >
</video> </dt>
<dd>
font-weight & font-style
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 19 - text-align and Changing Background Color.mp4" type="video/mp4" >
</video> </dt>
<dd>
Changing Background Color
</dd>
</dl></td>
</tr>

<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 20 - Background Images.mp4" type="video/mp4" >
</video> </dt>
<dd>
Background Images
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 21 - Padding.mp4" type="video/mp4" >
</video> </dt>
<dd>
Padding
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 22 - Border.mp4" type="video/mp4" >
</video> </dt>
<dd>
Border
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 23 - Margin.mp4" type="video/mp4" >
</video> </dt>
<dd>
Margin
</dd>
</dl></td>
</tr>

<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 24 - Width & Height.mp4" type="video/mp4" >
</video> </dt>
<dd>
Width & Height
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 25 - Styling Links.mp4" type="video/mp4" >
</video> </dt>
<dd>
Styling Links
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 26 - Styling Tables.mp4" type="video/mp4" >
</video> </dt>
<dd>
Styling Tables
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 27 - Background Images.mp4" type="video/mp4" >
</video> </dt>
<dd>
Background Images
</dd>
</dl></td>
</tr>


<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 28 - Style More Than One Elements & Span!.mp4" type="video/mp4" >
</video> </dt>
<dd>
Style More Than One Elements & Span!
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 29 - div.mp4" type="video/mp4" >
</video> </dt>
<dd>
div
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 30 - Styling Using Classes.mp4" type="video/mp4" >
</video> </dt>
<dd>
Styling Using Classes
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 31 - ID's.mp4" type="video/mp4" >
</video> </dt>
<dd>
ID's
</dd>
</dl></td>
</table>



<table align="right">
<tr>
<td>
<a href="me2.php" title="previous page"><img src="larrow1.png" height="50"></a>
</td>
</tr>
</table>
</blockquote>
</font>
</body>
</html>