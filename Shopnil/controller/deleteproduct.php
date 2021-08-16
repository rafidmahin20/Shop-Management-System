<?php 

require "DBconnect.php";

if( !empty($_GET['id']) ){

	$id = $_GET['id'];
	$con = connect();
	$query = mysqli_query( $con, "DELETE FROM products WHERE id='$id'");

	if( !$query ){
	    die("Query failed" . mysqli_error($con));
	}

	header("location: ../dashboard.php");

}else{
	header("location: ../dashboard.php");
}


?>