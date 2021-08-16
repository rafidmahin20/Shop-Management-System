

<?php

include "Controller/DBconnect.php";
include "Controller/retrieveusers.php";
include "Controller/updateusers.php";

?>


<!DOCTYPE html>
<html>
<body>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;1,300&display=swap" rel="stylesheet"> 
<link type="text/css" rel="stylesheet" href="View/reg.css">

<div class = "box">
   <h2>Edit User</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST" name="myForm">
    
    <label for="fname">First Name </label>
    <input value="<?php echo $fname ?? "" ?>" type="text" id="fname" name="fname" placeholder="Product Name">
    <span id="fnEr"></span>
    

    <label for="lname">Last Name</label>
    <input value="<?php echo $lname ?? "" ?>" type="text" id="lname" name="fname" placeholder="Short Description">
    
    <label for="username">Username</label>
    <input value="<?php echo $username ?? "" ?>" type="text" id="username" name="username" placeholder="Username">


    <label for="password">Password</label>
    <input value="<?php echo $password ?? "" ?>" type="text" id="password" name="password" placeholder="password">
    

    <label for="gender">Gender</label>
    <input value="<?php echo $gender ?? "" ?>" type="text" id="gender" name="gender" placeholder="gender">


    <label for="mobile">Contact</label>
    <input value="<?php echo $mobile ?? "" ?>" type="text" id="mobile" name="mobile" placeholder="Your Contact Number">


    <label for="email">Email</label>
    <input value="<?php echo $email ?? "" ?>" type="text" id="email" name="email" placeholder="Email">

    
    <label for="address">Address</label>
    <input value="<?php echo $address ?? "" ?>" type="text" id="address" name="address" placeholder="Address">

    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?? "" ?>">
 
    <input type="submit" value="Update" id="submit">
  </form>


</div>
<style>


</style>

</script>

</body>
</html>

<?php 




?>
  
  
 



