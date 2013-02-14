<?php
	//PHP SHOWS REGISTERED INSTRUCTORS
	if(isset($_SESSION['user'])){
		//DB SELECT USERS
		$db_query= mysql_query("SELECT * FROM users WHERE del=0");
		
		//TABLE
		echo '<h1> User List:</h1><table class="hilite" id="highlight">
		<thead><tr>
		<td><b>User ID </b></td>
		<td><b>User Name</b></td>
		<td><b>First Name</b></td>
		<td><b>Last Name</b></td>
		<td><b>Permission</b></td>
		<td><b>Delete</b></td>
		</tr></thead>';
		
		//DB DISPLAY USERS
		while($record = mysql_fetch_array($db_query)){
			echo "<tbody><tr>";
			echo"<td>" . $record['id'] . "</td>";
			echo"<td>" . $record['username'] . "</td>";
			echo"<td>" . $record['lastname'] . "</td>";
			echo"<td>" . $record['firstname'] . "</td>";
			echo"<td>" . $record['lv'] . "</td>";
			echo"<td>
			<form action='user_remove.php' method='post'>
			<input type=HIDDEN NAME='id' value='{$record['id']}'/>
			<input type='submit' value='Delete'/>
			</form>
			</td>";
			echo"</tr></tbody>";
		}
		echo"</table>";
	}
?>
