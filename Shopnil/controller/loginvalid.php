<?php

session_start();

if( (isset( $_SESSION['login'] ) && $_SESSION['login'] == true) || (isset( $_COOKIE['login'] ) && $_COOKIE['login'] == true)  ){
    header("location: dashboard.php");
}

$con = connect();

$username = $password = "";
$usernameEr = $passwordEr ="";


    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $username = $_POST['username'];
        $password = $_POST['password'];


    if(empty($username)){
        $usernameEr  = "Username cant not be empty";
        $flag = false;
    }
    if(empty($password)){
        $passwordEr = "Password cant not be empty";
        $flag = false;
    }

    if( !empty($username) || !empty($password) ){
        $query = mysqli_query( $con, "SELECT * FROM users WHERE username='$username'");

        if( !$query ){
            die("Query failed" . mysqli_error($con));
        }

        $result = mysqli_fetch_assoc($query);

        if($result){

            $dbusername = $result['username'];
            $dbpassword = $result['password'];

            if( $dbusername == $username && $dbpassword == $password ){
                $_SESSION['login'] = true;
                $_SESSION['username'] = $username;

                if(isset($rememberme)){ 
                    setcookie( "login", true, time() + 86400);
                    setcookie( "username", $username, time() + 86400);
                }

                header("location: dashboard.php");
            }else{
                echo "Invalid Password";
            }
        } 
    }

}






?>
