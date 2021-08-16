<?php

	session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>

	<h1>Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : "Anonymous" ?></h1>

	<p><a href="Logout.php">Logout</a></p>

</body>
</html>