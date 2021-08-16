<?php

include "Controller/DBinsert.php";

?>

<?php 
$fname = $lname = $username = $password = $gender = $mobile = $email = $address = "";
$fnameEr = $lnameEr = $usernameEr = $passwordEr = $genderEr = $mobileEr = $emailEr = $addressEr = "";
$errrmsg = $successmsg =  "";
$flag = true;

  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email  = $_POST['email'];
    $address = $_POST['address'];

    if(empty($fname) && empty($lname) && empty($username) && empty($password)  && empty($gender)  && empty($mobile)  && empty($email)  && empty($address) ){

      $error = "FIll all Feild";
     
    }if(!empty($fname) && !empty($lname) && !empty($username) && !empty($password)  && !empty($gender)  && !empty($mobile)  && !empty($email)  && !empty($address) ){

      user_register($fname,$lname,$username,$password,$gender,$mobile,$email,$address);
      
    } 
  }

?>
<!DOCTYPE html>
<html>
<body>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;1,300&display=swap" rel="stylesheet"> 
<link type="text/css" rel="stylesheet" href="View/reg.css">

<div class = "box">
   <h2>Create an Account</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST" name="myForm">
    <label for="fname">First Name</label>
    <span style = "color :red;"><?php echo $error ?? "" ?></span>
    <span id="fnEr"></span>
    <input type="text" id="fname" name="fname" placeholder="Your name..">
    <span id="fnEr"></span>
    

    <label for="lname">Last Name</label>
    <span style = "color :red;"><?php echo $error ?? "" ?></span>
    <span id="lnEr"></span>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">
    
    <label for="username">Username</label>
    <span style = "color :red;"><?php echo $error ?? "" ?></span>
    <input type="text" id="username" name="username" placeholder="Your Username..">
   

    <label for="password">Password</label>
    <span style = "color :red;"><?php echo $error ?? "" ?></span>
    <input type="text" id="password" name="password" placeholder="Your Password ..">
   


    <label for="Gender">Gender</label>
    <span style = "color :red;"><?php echo $error ?? "" ?></span>
    <span id="gEr"></span>
    <select id="gender" name="gender">
    <option value="">Select</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
      
    </select>

    <label for="mobile">Contact Number</label>
    <span id="mEr"></span>
    <span style = "color :red;"><?php echo $error ?? "" ?></span>
    <input type="text" id="mobile" name="mobile" placeholder="Your Contact Number..">
    

    <label for="email">Email</label>
    <span id="eEr"></span>
    <span style = "color :red;"><?php echo $error ?? "" ?></span>
    <input type="text" id="email" name="email" placeholder="Your Email Address..">
    

    <label for="address">Address</label>
    <span id="aEr"></span>
    <span style = "color :red;"><?php echo $error ?? "" ?></span>
    <input type="text" id="address" name="address" placeholder="Your Address..">
    
 
    <input type="submit" value="Submit" id = "submit" onclick="return valid()">
   
  </form>
  <p>Aleady a member? 
   <a href="login.php">Login</a>
  </p>
</div>
<style>


</style>
<script type = "text/javascript" src= "View/valid.js">
</script>

</body>
</html>

  
 



