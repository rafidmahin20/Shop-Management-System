<!DOCTYPE html>
<html>
<head>
	<title>Search bar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<a href="uinfo.php" class="info">Update Account </a>

	<div class="src">
		<h1>SEARCH</h1>
		<input type="text" onkeyup="imu(this.value)" placeholder="Search" >
		<div id="ans">
			Loading...
		</div>
	</div>
	<script type="text/javascript">
		let ans = document.getElementbyid('ans');

		function imu (obj)
		{
			if (obj.length == 0)
			{
				ans.innerHTML = "empty";
			}
			else
			{
				var XML = new XMLHttpRequest();
				XML.onreadystatechange = function();
				XML.open('GET', 'Srch.php?da='+obj, true);
			    XML.send();
			}
		}
	</script>