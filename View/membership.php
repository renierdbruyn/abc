<?php
	//include"membership.class.php";
function autoload($class)
{
    require('classes/' . $class . '.class.php');
}

// automatically loads all needed classes, when they are needed
spl_autoload_register("autoload");
	
?>
<html>
<head>
	<title>Register</title>
	<style>
		input
		{
			
			left:40%;
			height:30px;
			width:30%;
		}
		
		body
		{
			background:#F0F0F0;
		}
		
		label
		{
			width:30%;
			height:30px;
			
			left:1%;
		}
		
		.color
		{
			background:#B1B1B1;
		}
		
		.button
		{
			background:#B1B1B1;
			font-size:20px;
			border:0px;
		}	
	</style>
</head>
<body>
	<div class="color">
		<h1>Sign Up</h1>
	</div>
	<div>
	<form action="membership.class.php" method="post">
		<label>Name</label>
		<input type="text" name="name" />
		<br/>
		<label>Surname</label>
		<input type="text" name="surname" />
		<br/>
		<label>Phone</label>
		<input type="text" name="phone" />
		<br/>
		<label>ID Number</label>
		<input type="text" name="idNumber" />
		<br/>
		<label>Password</label>
		<input type="password" name="password" />
		<br/>
		<label>Confirm Password</label>
		<input type="password" name="confirmPass" />
		<br/>
		<input class="button" type="submit" name="membership" value="Register" />
	</form>
	</div>
</body>
</html>

