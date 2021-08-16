<!DOCTYPE html>
<html>
<head>
	<title>SIGN UO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="n_buyer.php" method="post">
		<h2>Sign up</h2>
		<?php if (isset($_GET['error'])) {?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<?php if (isset($_GET['done'])) {?>
			<p class="done"><?php echo $_GET['done']; ?></p>
		<?php } ?>

		<label>Name</label>
		<input type="text" name=" bname" placeholder="Name"><br>

		<label>Password</label>
		<input type="password" name=" password" placeholder="password"><br>

		<label>Reenter Password</label>
		<input type="password" name="re_password" placeholder="re_password"><br>

		<label>Address</label>
		<input type="text" name=" addre" placeholder="addre"><br>

		<label>Phone</label>
		<input type="text" name=" Phone" placeholder="Phone"><br>

		<button type="submit">Sign Up</button>

		<a href="index.php" class="cr">Already have an Account </a>


	</form>

</body>
</html>