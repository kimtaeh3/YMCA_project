<?php session_start(); 
include('config.php');?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Apple Tart</title>
		<link rel="stylesheet" href="style.css" charset="utf-8">	
	</head>
	
	<body>
		<?php include("header.php");?>
		
		<?php
		$usercheck = $_POST["username"];
		$passcheck = $_POST["password"];
		$db_query = mysql_query("SELECT * FROM users WHERE username = '" . $usercheck  . "'");
		
		if (mysql_num_rows($db_query) == 1){
			$record = mysql_fetch_array($db_query);
			if (md5($passcheck) == $record['password']){
				echo "Welcome, " . $usercheck . "! You are now logged in. <a href='logout.php'>logout</a><br/>";
				$_SESSION['user']= $usercheck;
				$_SESSION['pass']= $passcheck;
			}
			else{
				echo "Sorry, wrong password. <br/>";
				include("forms.php");
			}
		}
		else{
			echo "Sorry, wrong username. <br/>";
			include("forms.php");
		}
		?>
		
		<?php include("footer.php");?>
	</body>
</html>