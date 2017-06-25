<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>HTML TUTORIALS</title>
<link rel="stylesheet" type="text/css" href="ext1.css">
</head>
<body onload="startTime()">
 <div align="right">
		
		<?php
			if(isset($_SESSION["signin"]))
			{	
					echo "<span class='user'>". $_SESSION['email']  ."&nbsp&nbsp&nbsp<a href='logout.php'>Log Out</a></span>";
			}
			else
			{
				echo "<span class='user'><a href='signin.html' target='_blank'>Log In</a>&nbsp|&nbsp<a href='signup.html' target='_blank'>Sign Up</a></span>";
			}
		?>
    </div>
<blockquote> 
<img id="i1" src="HTML.jpg" /> stands for Hypertext Markup Language, and it is the most widely used language to write Web Pages.
<ul >
<li>Hypertext refers to the way in which Web pages (HTML documents) are linked together. Thus, the link available on a webpage is called Hypertext.</li>
<li>As its name suggests, HTML is a Markup Language which means you use HTML to simply "mark-up" a text document with tags that tell a Web browser how to structure it to display.</li>
</ul>
<p>Originally, HTML was developed with the intent of defining the structure of documents like headings, paragraphs, lists, and so forth to facilitate the sharing of scientific information <br />between researchers.</p>
<p>Now, HTML is being widely used to format web pages with the help of different tags available in HTML language.</p>
<span><h2>HTML Tags</h2></span>
<hr />
As told earlier, HTML is a markup language and makes use of various tags to format the content. These tags are enclosed within angle braces. Except few tags, most of the tags have their corresponding closing tags.
<p>HTML document uses the following tags:</p>
<p><img src="tags.jpg" /></p>
To learn HTML, you will need to study various tags and understand how they behave, while formatting a textual document. Learning HTML is simple as users have to learn the usage of different tags in order to format the text or images to make a beautiful webpage.
World Wide Web Consortium (W3C) recommends to use lowercase tags starting from HTML 4.<br />
<span><h2>HTML Elements</h2></span>
<hr />
An HTML element is defined by a starting tag. If the element contains other content, it ends with a closing tag, where the element name is preceded by a forward slash as shown below with few tags:<br/>
<p><img src="elements.jpg" /></p>
<p><center>Click here for HTML Video Tutorials</center></p>
<center><a href="next1-2.php"><img src="htmllogo.png" /></a></center>
<p><center>Click here for css Video Tutorials</center></p>
<center><a href="next12.php"><img src="images.png" /></a></center>
</td>
</blockquote>
</body>
</html>