<?php 

	if( $_SERVER['REQUEST_METHOD'] == "POST" ){

	    $pname = $_POST['pname'];
	    $sdesc = $_POST['sdesc'];
	    $price = $_POST['price'];
	    $id = $_POST['id'];
	    
	    $con = connect();


	   

		$query = mysqli_query($con,"UPDATE products SET pname='$pname',sdesc='$sdesc',price='$price' WHERE id='$id'");

		if(!$query){
			die(mysqli_error($connection));
			
		}

	header("location: dashboard.php");
}


?>