<?php
	
	function connect() {
		$conn = new mysqli("Localhost", "Rafid", "1234");

	if ($conn -> connect_errno) {
		die("Connection Failed" . $conn -> connect_errno);
	}
	

	return $conn;
}
 ?>