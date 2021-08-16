<?php

$data = "contnt";

if (isset($_GET['da'])){
	$data = $_GET['da'];
}

$conn1 = new mysqli('localhost','root','bdata_db');

if (!$conn1) {
	echo "Connection Failed";
}

	$sql1 = "SELECT * FROM bdata_db WHERE p_name LIKE '%$data%";
	$result1 = mysqli_query($conn1, $sql1);

	if (mysqli_num_rows($result1) === 1) 
	{
			$row1 = mysqli_fetch_assoc($result1);
			echo "<h1>", $row1['p_name'],"</h1>";
	}

?>
