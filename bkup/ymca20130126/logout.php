<?php session_start(); 
session_destroy();?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Apple Tart</title>
		<link rel="stylesheet" href="style.css" charset="utf-8">	
	</head>
	
	<body>
		<?php include("header.php");?>
		
		<p class="welcome" id="greeting">You are now logged out</p>
		
		<?php include("forms.php"); ?>
		<?php include("footer.php");?>
	</body>
</html>