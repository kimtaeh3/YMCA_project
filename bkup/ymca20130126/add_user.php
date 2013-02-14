<?php session_start(); 
include('config.php')?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Apple Tart</title>
		<link rel="stylesheet" href="style.css" charset="utf-8">	
	</head>
	
	<body>
		<?php include("header.php");?>

		<?php
			 $db_query="INSERT INTO users (username, password) VALUES ('$_POST[addusername]',md5('$_POST[addpassword]'))";
			 if (!mysql_query($db_query)){
				  die('Error: ' . mysql_error());
			 }
			 echo "User Added";
		?>
		
		<?php include("footer.php");?>
	</body>
</html>