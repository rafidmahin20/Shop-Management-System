<?php


function connect(){

  $servername = "localhost";
  $userName = "root";
  $Passwrd = "";
  $dbname = "wtk";

  $con = mysqli_connect($servername,$userName,$Passwrd,$dbname);

    if(!$con){
      die('Connection Not Stable'.mysqli_connect_error());
    }
    
    return $con;
}

?>