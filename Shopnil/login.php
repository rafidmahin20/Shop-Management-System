<?php

include ("Controller/DBconnect.php");

include ("Controller/loginvalid.php");

?>

<!DOCTYPE html>
<html>
<body>
<link type="text/css" rel="stylesheet" href="View/login.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;1,300&display=swap" rel="stylesheet"> 

<div class = "box">
   <h2>Log in </h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST" name="myForm">

    <label for="username">Username</label>
    <span style = "color :red;"><?php echo $usernameEr ?></span>
    <input type="text" id="username" name="username" placeholder="Your Username..">
   
    

    <label for="password">Password</label>
    <span style = "color :red;"><?php echo $passwordEr ?></span>
    <input type="password" id="password" name="password" placeholder="Your Password ..">
    <input type="submit" value="Submit" onclick="return valid()">
  </form>

  <p>Not a member? 
   <a href="registration.php">Register</a>
  </p>

</div>
<style>



</style>
<script src="Controller/v.js"></script>
</body>
</html>
