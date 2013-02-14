<?php session_start(); 
session_destroy();?>
<html>
	<head>
		<meta charset="utf-8">
		<title>YMCA Swim Club Logout</title>
		<link rel="stylesheet" href="style.css" charset="utf-8">	
	</head>
	<body>
		<?php include("header.php");?>
		
		<p class="welcome" id="greeting">You are now logging out...</p>
		<meta http-equiv="refresh" content="0.5;url=index.php">
		
		<?php include("forms.php");?>
		<?php include("footer.php");?>
	</body>
</html>