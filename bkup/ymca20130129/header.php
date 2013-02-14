<div id="wrap">
	<div id="header">
		<h1><a href="index.php">YMCA Swim Club</a></h1>
	</div>
	<div id="sidebar">
		<div>
			<h2>Notice Board</h2>
			<?php

			//SHOW NOTIFICATIONS
			include("notification.php");

			//SHOW ALL NOTIFICATIONS
			echo "For more broadcasts: <a href='notification_all.php'>Click Here</a>";

			if(isset($_SESSION['user'])){
				//INCLUDE DIVIDER
				echo"<HR>";

				//ADD NOTIFICATION
				echo"<p class='welcome' id='greeting'>Add Notification:</p>
						<form action='notification_add.php' method='post' onSubmit='return clicked();'>
						<b id='errorData'>Data:</b>
						<input type='text' id='add_data' name='adddata'/></br>
						<b id='errorData'>Broadcast:</b>
						<select name='optiontype'>
							<option value='3'>Public</option>
							<option value='2'>Group</option>
							<option value='1'>Self</option>
						</select>
						<input type='submit' value='Submit'/>
						<p id='message'></p>
						</form>";
				echo $_SESSION['notification_output'];
			}
			?>
		</div>
	</div>
<div id="instructions">
