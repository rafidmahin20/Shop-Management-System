<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Employee List</title>
	<link rel="stylesheet" type="text/css" href="employee.css">
</head>
<body>

	<table>
		<tr>
			<td>
				<form onsubmit="">
					<div>
						<label>Full Name</label>
						<input type="text" name="fullname">
					</div>
					<div>
						<label>Emp Code</label>
						<input type="text" name="empCode">
					</div>
					<div>
						<label>Salary</label>
						<input type="text" name="salary">
					</div>
					<div>
						<label>City</label>
						<input type="text" name="city">
					</div>
					<div class="form-action-button">
						<input type="submit" value="Submit">
					</div>
				</form>
			</td>
			<td>
				<table class="list" id="employeelist">
					<thead>
						<tr>
							<th>Full Name</th>
							<th>Emp Code</th>
							<th>Salary</th>
							<th>City</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</td>
		</tr>
	</table>
	<script src="employee.js"></script>
</body>
</html>