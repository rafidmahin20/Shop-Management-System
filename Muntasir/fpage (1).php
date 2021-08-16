<?php
include "db.php";

if (isset($_POST['bname']) && isset($_POST['password'])) 
{   
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$bname = validate($_POST['bname']);
	$pass = validate($_POST['password']);

	if (empty($bname)) {
		 header("Location: index.php?error=Name required");
		 exit();
	}
	elseif (empty($pass)) {
		 header("Location: index.php?error=Password required");
		 exit();
	} else 
	{
		$sql = "SELECT * FROM b_data WHERE NAME= '$bname' AND Password= '$pass'";
		$result = mysqli_query($conn, $sql);

	
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row ['NAME'] === $bname && $row ['Password'] === $pass ) {
				 header("Location: home.php");
			}
			else{
				header("Location: index.php?error= INCORRECT");
		 exit();
			}
			
		}
		else{
			header("Location: index.php?error= INCORRECT");
		 exit();
		}
		

	}

}
else {
	header("Location: index.php");
	exit();
}