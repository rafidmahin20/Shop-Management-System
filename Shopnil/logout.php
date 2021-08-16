<?php 

session_start();
session_destroy();

setcookie( "login", true, time() - 100);
setcookie( "username", null, time() - 100);

header("location: login.php");
