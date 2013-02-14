<?php session_start(); 
include('config.php')?> 

<html>
	<head>
		<meta charset="utf-8">
		<title>Add User</title>
		<link rel="stylesheet" href="style.css" charset="utf-8">
	</head>
	<body>
		<?php include("header.php");?>

		<?php
			if(!($_POST[addusername]=='') and !($_POST[addpassword]=='')){
				$db_query="INSERT INTO users (username, password) VALUES ('$_POST[addusername]',md5('$_POST[addpassword]'))";
				if (!mysql_query($db_query)){
				  die('Error: ' . mysql_error());
				}
				$_SESSION['user_output'] = '<p style="color:blue">User Added</p>'; 
			}else{
				$_SESSION['user_output'] = '<p style="color:red">Please fill in all possible variables</p>';
			}
			echo '<meta http-equiv="refresh" content="0;url=index.php">';
		?>

		<?php include("footer.php");?>
	</body>
</html>