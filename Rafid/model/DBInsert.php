<?php
	
	//include 'DBConnect.php';

	function connect() {
		$conn = new mysqli("Localhost", "Rafid", "1234");

	if ($conn -> connect_errno) {
		die("Connection Failed" . $conn -> connect_errno);
	}
	

	return $conn;
}

	function register($username, $password) {
		$sql = $conn->prepare ("INSERT INTO USER (username, password) VALUES (?, ?)");

		$sql->bind_param("ss", $username, $password);

		$response = $sql->execute();

		$conn->close();
	}
	

 ?>