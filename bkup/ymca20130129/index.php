<?php 
session_start();
include('config.php');?>
<html>
	<head>
		<meta charset="utf-8">
		<title>YMCA Swim Club</title>
		<link rel="stylesheet" href="style.css" charset="utf-8">
	</head>
	<body>
		<?php include("header.php"); ?>
		<?php if(isset($_SESSION['user'])){
			//GREETING
			echo "<p class='welcome' id='greeting'>Hi, ".$_SESSION['user']."! Welcome back! 
				<a href='logout.php'>logout</a> 
				<a href='user_edit.php'>Edit</a>
				</p>";
			echo"<HR>";

			//SHOW ALL USERS
			include("users.php");
			echo $_SESSION['user_table_output'];
			echo"<HR>";

			//ADD USER
			echo"<p class='welcome' id='greeting'>Add User:</p>
					<form action='user_add.php' method='post' onSubmit='return clicked();'>
					<b id='errorName'>UserName:</b>
					<input type='text' id='add_name' name='addusername'/>
					<b id='errorPass'>Password:</b>
					<input type='password' id='add_password' name='addpassword'/>
					<input type='submit' value='Add'/>
					<p id='message'></p>
					</form>";
			echo $_SESSION['user_output'];
			echo"<HR>";

			//SHOW DATA
			include("data.php");
		} else
			//SHOW LOGIN
			echo"<p class='welcome' id='greeting'>Please Login:</p>
					<form action='welcome.php' method='post' onSubmit='return clicked();'>
					<b id='errorName'>Name:</b>
					<input type='text' id='name' name='username' value='{$_SESSION['user_login_name']}'/>
					<b id='errorPass'>Password:</b>
					<input type='password' id='password' name='password'/>
					<input type='submit' value='Submit'/>
					<p id='message'></p>
					</form>";

			//SHOW MESSAGE
			echo $_SESSION['user_login'];

		include("footer.php");?>
	</body>
</html>
