<?php 



if( !empty($_GET['id']) ){

	$id = $_GET['id'];
	$con = connect();
	$query = mysqli_query( $con, "SELECT * FROM products WHERE id='$id'");

	if( !$query ){
	    die("Query failed" . mysqli_error($con));
	}

	$result = mysqli_fetch_assoc($query);

	$pname = $result['pname'];
	$sdesc = $result['sdesc'];
	$price = $result['price'];

}


?>