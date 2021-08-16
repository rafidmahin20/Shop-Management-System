<?php
session_start();
if (isset($_SESSION['ID']) && isset($_SESSION['NAME'])) {
	# code...
}

	include "db.php";


if (isset($_POST['o_password']) && isset($_POST['n_password']) && isset($_POST['re_password']) && isset($_POST['n_addre']) &&isset($_POST['n_Phone'])) 
{   
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$o_pass = validate($_POST['o_password']);
	$n_pass = validate($_POST['n_password']);
	$re_pass = validate($_POST['re_password']);
	$n_add = validate($_POST['n_addre']);
	$n_phone = validate($_POST['n_Phone']);
	

}
	if (empty($o_pass)) 
	{
		 header("Location: uinfo.php?error=old Password required");
		 exit();
	}
	elseif (empty($n_pass)) 
	{
		 header("Location: uinfo.php?error=new Password required");
		 exit();
	} 
	elseif (empty($re_pass)) 
	{
		 header("Location: uinfo.php?error=confirm the Password");
		 exit();
	}
	elseif ($n_pass !== $re_pass)
        {
		 header("Location: uinfo.php?error=Password doesn't match");
		 exit();
		}
		else
		{
			$ID =$_SESSION['ID'];
			$sql_2 = " SELECT Password FROM b_data Where ID= '$ID' AND Password= 'o_pass'";
			$result2 = mysqli_query($conn, $sql_2);
			if (mysqli_num_rows($result2) === 1) {
				$sql_3 = "UPDATE b_data 
                          SET Password= '$n_pass'
                          WHERE ID= '$ID'";
                $result3 = mysqli_query($conn, $sql_3);

			 	echo "correct";
			 } 
			 else {
			 	header("Location: uinfo.php?error = Old password doesn't match");
			 	exit();
			 }
	
		}
	
