<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="Registration.css">
</head>
<body>

	<div class="container">
		<div class="header">
			<h2>Create Account</h2>
		</div>
	</div>
	<form class="form" id="form">
		<div class="form-control success">
			<label>Username</label>
			<input type="text" id="username">
			<small>Error message</small>
		</div>

		<br><br>

		<div class="form-control error">
			<label>Email</label>
			<input type="email" id="email">
			<small>Error message</small>
		</div>

		<br><br>

		<div class="form-control">
			<label>Password</label>
			<input type="password" id="password">
			<small>Error message</small>
		</div>

		<br><br>

		<div class="form-control">
			<label>Password Check</label>
			<input type="password" id="password check">
			<small>Error message</small>
		</div>

		<br><br>

		<button>Submit</button>
	</form>

	<script src="Registration.js"></script>


</body>
</html>