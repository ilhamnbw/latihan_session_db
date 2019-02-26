<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="indexstyle.css">
	</head>
	<body>
		<div class="welcome">
		<h2>Selamat Datang, <?php echo 
		$_SESSION['username'];?> (<?php echo
		$_SESSION['role'];?>) </h2>
		<p>Klik disini untuk <a href="logout.php">Log Out</a></p>
		</div>
	</body>

</html>