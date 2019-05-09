<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
};


?>
<!DOCTYPE html>
<html>
<head>
	<title>O_worker</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
		<div class="container">
			<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
			<a href="/wad/index.php">GO TO THE website</a><br>
			<a href="Logout.php">Logout</a>
		</div>
</body>
</html>