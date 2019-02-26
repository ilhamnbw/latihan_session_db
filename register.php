<?php 

//register php

session_start();

if(isset($_SESSION['message'])){
	if($_SESSION['message']!=""){
		echo"<span
		style='color:red'>".$_SESSION['message']."</span>";
		$_SESSION['message']="";
	}
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>register</title>
 	<link rel="stylesheet" type="text/css" href="registerstyle.css">
 </head>
 <body>
 	
 	<div class="register">
 <h2>REGISTER HERE!</h2>
 <form method="POST" action="cekregister.php">
 	<center>
 	<table>
 		<tr>
 			<td></td>
 			<td><input type="text" name="username" required placeholder="Username" id="username"></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><input type="password" name="password" required placeholder="Password" id="password"></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><button type="submit" name="register" id="register">Register</button></td>
 		</tr>
 	</table>
 </form>
 		<div class="paragraf">
 		<p>do you have account?</p>
 		<p><a href="login.php">Sign in</a></p>
 		</div>
</div>
</center>
 </body>
 </html>
