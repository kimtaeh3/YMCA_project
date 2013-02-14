<?php session_start();
include('config.php');?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome</title>
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
				//SET SESSION
				$_SESSION['user']= $usercheck;
				$_SESSION['pass']= $passcheck;
				//WELCOME USER
				//echo "Welcome, " . $usercheck . "! You are now logging in... <a href='logout.php'>logout</a><br/>";
			}
			else{
				$_SESSION['user_login'] = '<p style="color:red">Sorry, wrong password.<p>';
			}
		}
		else{
			$_SESSION['user_login'] = "<p style='color:red'>Sorry, wrong username<p>";
		}
		//REDIRECT
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";?>

		<?php include("footer.php");?>
	</body>
</html>
