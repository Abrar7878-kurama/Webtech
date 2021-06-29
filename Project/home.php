<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body style="background-image: url(coffee1.jpg);">
<fieldset>
	<?php
		session_start();
		include 'header.php';
	?>
</fieldset>
<fieldset>
	<center><h1><span style="color: rgb(90, 56, 37);">Welcome To @Cafe</span></h1></center>
	<center><li><a href="aboutUs.php">About Us</a></li></center>
	<center><li><a href="contractUs.php">Contact Us</a></li></center>
	<center><li><a href="menu.php">Menu</a></li></center>
</fieldset>
<fieldset>
	<?php include 'footer.php';?>
</fieldset>
</body>
</html>