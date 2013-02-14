<?php session_start(); 
include('config.php')?> 

<html>
	<head>
		<meta charset="utf-8">
		<title>Edit User</title>
		<link rel="stylesheet" href="style.css" charset="utf-8">
	</head>
	<body>
		<?php include("header.php");?>

		<?php
			if(!($_POST[id]=='')){
				$db_query="UPDATE users SET del=1, del_dt= NOW() WHERE id=" . $_POST[id];
				if (!mysql_query($db_query)){
				  die('Error: ' . mysql_error());
				}
				$_SESSION['user_table_output'] = '<p style="color:red">User Removed</p>'; 
			}else {
				$_SESSION['user_table_output'] = '<p>Nothing Happened</p>';
			}
			echo '<meta http-equiv="refresh" content="0;url=index.php">';	
		?>

		<?php include("footer.php");?>
	</body>
</html>
