<?php

require "DBconnect.php";

if( $_SERVER['REQUEST_METHOD'] == "POST" ){

    $pname = $_POST['pname'];
    $sdesc = $_POST['sdesc'];
    $price = $_POST['price'];
    
    $con = connect();

    $query = mysqli_query($con,"INSERT INTO products (pname,sdesc,price) VALUES ('$pname','$sdesc','$price')");

    if(!$query){
        die(mysqli_error($con));
    }

    header("location: dashboard.php");
}
?>