<?php
session_start();
include('config.php');?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Edit User</title>
		<link rel="stylesheet" href="style.css" charset="utf-8">
	</head>
	<body>
		<?php include("header.php");
			if(isset($_SESSION['user'])){
			//EDIT USER
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

		include("footer.php");?>
	</body>
</html>
