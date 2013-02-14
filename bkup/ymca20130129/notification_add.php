<?php session_start(); 
include('config.php')?> 

<?php
	if(!($_POST[adddata]=='')){
		$db_query="INSERT INTO notification (username, data, lv, dt) VALUES ('$_SESSION[user]','$_POST[adddata]', '$_POST[optiontype]', NOW())";
		
		if (!mysql_query($db_query)){
		  die('Error: ' . mysql_error());
		}
		$_SESSION['notification_output'] = '<p style="color:blue">Notification Added</p>'; 
	}else{
		$_SESSION['notification_output'] = '<p style="color:red">Please fill in all possible variables</p>';
	}
	echo '<meta http-equiv="refresh" content="0;url=index.php">';
?>