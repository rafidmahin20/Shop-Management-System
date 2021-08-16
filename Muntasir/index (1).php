<!DOCTYPE html>
<html>
<head>
	<title>Buyer Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="fpage.php" method="post">
		<h2>LOGIN</h2>
		<?php if (isset($_GET['error'])) {?>
			<p class="error"><?php echo $_GET['error']; ?></p>

		<?php } ?>

		<label>Name</label>
		<input type="text" name=" bname" placeholder="Name"><br>

		<label>Password</label>
		<input type="password" name=" password" placeholder="password"><br>

		<button type="submit">Login</button>

		<a href="signup.php" class="cr">Create an Account </a>


	</form>

</body>
</html>