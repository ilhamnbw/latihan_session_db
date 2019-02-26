<?php

session_start();
	
	if(isset($_SESSION['message'])){
		if($_SESSION['message']!=""){
			echo "<span 
			style= 'color: red'>".$_SESSION['message']."</span>";
			$_SESSION['message'] = "";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login">
	<h2>Sign IN</h2>
	<form method="POST" action="ceklogin.php">
		<center>
		<table>	
			<tr>
				<td></td>
				<td><input type="text" name="username" required placeholder="username" id="username"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="password" name="password" required placeholder="password" id="wokwok"></td>
			</tr>
			<center>
			<tr>
				<td></td>
				<td><button type="submit" name="login" id="wakaka">Sign IN</button></td>
			</tr>
			</center>
			</center>
		</table>
	</center>
	</form>
	<p>Dont have an account?</p> 
	<p><a href="register.php">sign up now</a></p>
</div>
</body>
</html>