		<script>
			function Clicked(){
				var x, y, z;
				y=document.getElementById('name').value;
				z=document.getElementById('password').value;
				
				if(y !=""){
					document.getElementById('errorName').innerHTML='Name:';
				}else{
					document.getElementById('errorName').innerHTML='<font color="red"><b>*Name:</b></font>';
				}
				
				if(z !=""){
					document.getElementById('errorPass').innerHTML='Password:';
				}else{
					document.getElementById('errorPass').innerHTML='<font color="red"><b>*Password:</b></font>';
				}
				
				if(y =="" || z ==""){
					document.getElementById('message').innerHTML='<font color="red"><b>Please check the missing fields</b></font>';					
					return false;
				}
				return true;
			}
		</script>

		<form action='welcome.php' method='post'>
			<b id="errorName">Name:</b>
			<input type="text" id="name" name='username' onSubmit='return Clicked();'/>
			<b id="errorPass">Password:</b>
			<input type="password" id="password" name='password'/>
			<input type="submit" value="Submit"/>
			<p id="message"></p>
		</form>