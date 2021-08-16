<?php

require "DBconnect.php";

function register($fname,$lname, $username,$password,$gender,$mobile,$email,$address){

    $con = connect();
    echo "DBinsert";
    $sql = $con->prepare("insert into user(fname,lname,username,password,gender,mobile,email,address)
    values(?,?,?,?,?,?,?,?)");
     
   $sql->bind_param("sssssiss",$fname,$lname,$username,$password,$gender,$mobile,$email,$address);
   $response = $sql->execute();
   $sql->colse();
   $con->close();
   
    
}


function user_register($fname,$lname, $username,$password,$gender,$mobile,$email,$address){

    $con = connect();

    $query = mysqli_query($con,"INSERT INTO users (fname,lname,username,password,gender,mobile,email,address) VALUES ('$fname','$lname','$username','$password','$gender','$mobile','$email','$address')");

    if(!$query){
        die(mysqli_error($con));
    }

    //header("location: login.php");
}



?>