<?php

include "Controller/DBconnect.php";

include "Controller/retrieveproduct.php";
include "Controller/updateproduct.php";

?>

<!DOCTYPE html>
<html>
<body>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;1,300&display=swap" rel="stylesheet"> 
<link type="text/css" rel="stylesheet" href="View/reg.css">
	
<?php
include ("Model/header.php");
?>
<div class = "box">
  <a href="dashboard.php">Dashboard</a>
   <h2>Edit Product</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST" name="myForm">

    <label for="fname">Product Name</label>
    <input value="<?php echo $pname ?? "" ?>" type="text" id="pname" name="pname" placeholder="Product Name">
    <span id="fnEr"></span>
    

    <label for="lname">Short Description</label>
    <input value="<?php echo $sdesc ?? "" ?>" type="text" id="sdesc" name="sdesc" placeholder="Short Description">
    
    <label for="username">Price</label>
    <input value="<?php echo $price ?? "" ?>" type="text" id="price" name="price" placeholder="Username">

    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?? "" ?>">
 
    <input type="submit" value="Update" id="submit">
  </form>

</div>
<style>


</style>

</script>

</body>
</html>





