<?php session_start(); 
include('config.php');?>
<html>
		<?php //Load title and sidebar
		include("header.php"); ?>
		<?php
		if(isset($_SESSION['user'])){
			//GREETING
			echo "<p class='welcome' id='greeting'>Hi, ".$_SESSION['user']."! Welcome to my site! 
				<a href='logout.php'>logout</a></p>";
			
			//ADD USER
			echo "<form action='add_user.php' method='post'>
			Name:<input type='text' name='addusername'/>
			Password:<input type='password' name='addpassword'/>
			<input type='submit' value='Add'/>
			</form>";

			//USER LIST
			$db_query= mysql_query("SELECT * FROM users");
			echo "<center><h1> User List:</h1><table border='1'>
			<tr>
			<td><b>User ID</b></td>
			<td><b>Username</b></td>
			</tr>";
			//Show all users
			while($record = mysql_fetch_array($db_query)){
			echo "<tr>";
			echo"<td>" . $record['id'] . "</td>";
			echo"<td>" . $record['username'] . "</td>";
			echo"</tr>";
			}
			echo"</table></center>";
			include("data.php");
		} else 
			//Else show login screen
			include("forms.php");
		include("footer.php");?>
	</body>
</html>