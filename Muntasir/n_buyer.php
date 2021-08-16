<?php
include "db.php";

if (isset($_POST['bname']) && isset($_POST['password']) && isset($_POST['re_password']) && isset($_POST['addre']) &&isset($_POST['Phone'])) 
{   
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$bname = validate($_POST['bname']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$add = validate($_POST['addre']);
	$phone = validate($_POST['Phone']);
	


	if (empty($bname)) 
	{
		 header("Location: signup.php?error=Name required");
		 exit();
	}
	elseif (empty($pass)) 
	{
		 header("Location: signup.php?error=Password required");
		 exit();
	} 
	elseif (empty($re_pass)) 
	{
		 header("Location: signup.php?error=Password required");
		 exit();
	}
	elseif (empty($add)) 
	{
		 header("Location: signup.php?error=Address required");
		 exit();
	}
	elseif (empty($phone)) 
	{
		 header("Location: signup.php?error=Phone no. required");
		 exit();
	}
	elseif ($pass !== $re_pass)
        {
		 header("Location: signup.php?error=Password doesn't match");
		 exit();
		}

	else 
	{
		//$pass = md5($pass);

		$sql = "INSERT INTO b_data (NAME, Password, Address, Phone) VALUES ('$bname', '$pass', '$add', '$phone' )";
		$result = mysqli_query($conn, $sql);

		if ($result)
		{
			header("Location: signup.php?done= Account has been created");
			 exit();
		}
		else
		{
			header("Location: signup.php?error= Account has been created");
			 exit();
		}
	}	

}
else 
{
	header("Location: signup.php");
	exit();
}