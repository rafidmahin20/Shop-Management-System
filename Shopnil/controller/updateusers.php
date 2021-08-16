<?php 

	if( $_SERVER['REQUEST_METHOD'] == "POST" ){

        $fname = $result['fname'];
        $lname = $result['lname'];
        $username = $result['username'];
        $password = $result['password'];
        $gender = $result['gender'];
        $mobile = $result['mobile'];
        $email = $result['email'];
        $address = $result['address'];
        $id = $_POST['id'];
	    
	    $con = connect();


	   

		$query = mysqli_query($con,"UPDATE users SET fname='$fname',lname='$lname',username='$username',password='$password',gender='$gender',mobile='$mobile',email='$email',address='$address' WHERE id='$id'");

		if(!$query){
			die(mysqli_error($connection));
		}

	header("location: dashboard.php");
}


?>