<!DOCTYPE html>
<html>
<head>
	<title> UPDATE </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="chng.php" method="post">
		<h2>Update Profile</h2>
		<?php if (isset($_GET['error'])) {?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<?php if (isset($_GET['done'])) {?>
			<p class="done"><?php echo $_GET['done']; ?></p>
		<?php } ?>

		<label>Old Password</label>
		<input type="password" name="o_password" placeholder="o_password"><br>

		<label>New Password</label>
		<input type="password" name="n_password" placeholder="n_password"><br>

		<label>Reenter Password</label>
		<input type="password" name="re_password" placeholder="re_password"><br>

		<label>New Address</label>
		<input type="text" name="n_addre" placeholder="addre"><br>

		<label>New Phone</label>
		<input type="text" name=" n_Phone" placeholder="Phone"><br>

		<button type="submit">Save</button>

		<a href="home.php" class="cr">Home </a>


	</form>

</body>
</html>