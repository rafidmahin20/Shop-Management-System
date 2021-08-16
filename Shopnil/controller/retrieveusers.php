<?php 


if( !empty($_GET['id']) ){

	$id = $_GET['id'];
	$con = connect();
	$query = mysqli_query( $con, "SELECT * FROM users WHERE id='$id'");

	if( !$query ){
	    die("Query failed" . mysqli_error($con));
	}

	$result = mysqli_fetch_assoc($query);

	
	$fname = $result['fname'];
	$lname = $result['lname'];
	$username = $result['username'];
	
	$password = $result['password'];
	$gender = $result['gender'];
	$mobile = $result['mobile'];
	
	$email = $result['email'];
	$address = $result['address'];

}


?>