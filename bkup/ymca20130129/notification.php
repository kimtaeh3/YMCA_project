<?php
	//PHP SHOWS REGISTERED INSTRUCTORS
	if(isset($_SESSION['user'])){
		//DB SELECT USERS
		$db_query= mysql_query("SELECT * FROM notification ORDER BY dt DESC LIMIT 5");
	} else{
		//DB SELECT USERS
		$db_query= mysql_query("SELECT * FROM notification WHERE lv = '3' ORDER BY dt DESC LIMIT 5");
	}
	//TABLE
		echo '<h1> Display latest notification:</h1><table class="hilite" id="highlight">
		<thead><tr>
		<td><b>User ID </b></td>
		<td><b>Message</b></td>
		<td><b>Time</b></td>
		</tr></thead>';

		//DB DISPLAY USERS
		while($record = mysql_fetch_array($db_query)){
			echo "<tbody><tr>";
			echo"<td>" . $record['username'] . " @ " . $record['lv'] . "</td>";
			echo"<td>" . $record['data'] . "</td>";
			echo"<td>" . $record['dt'] . "</td>";
			echo"</tr></tbody>";
		}
		echo"</table>";
?>
