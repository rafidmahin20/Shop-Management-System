<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="Login.css">
</head>
<body>

	<div class="container">
		<h1 class="label">User Login</h1>
		<form class="login_form" method="post" name="form" onsubmit="return validated()">
			<div class="font">User Name</div>
			<input type="text" name="username">
			<div id="username_error">Please fill up your username </div>
			<div class="font font2">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Please fill up your password </div>
			<button type="submit">Login</button>
		</form>
	</div>

	<script src="login.js"></script>

</body>
</html>