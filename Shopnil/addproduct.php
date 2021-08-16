<?php

include "Controller/DBinsertProduct.php";

?>

<!DOCTYPE html>
<html>
<body>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;1,300&display=swap" rel="stylesheet"> 
<link type="text/css" rel="stylesheet" href="View/reg.css">

	
<?php
include ("../Model/header.php");
?>

<div class = "box">
  <a href="dashboard.php">Dashboard</a>
   <h2>Add Product</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST" name="myForm">

    <label for="fname">Product Name</label>
    <input type="text" id="pname" name="pname" placeholder="Product Name">
    <span id="fnEr"></span>
    

    <label for="lname">Short Description</label>
    <input type="text" id="sdesc" name="sdesc" placeholder="Short Description">
    
    <label for="username">Price</label>
    <input type="text" id="price" name="price" placeholder="Price">
 
    <input type="submit" value="Create" id="submit">
  </form>

</div>
<style>


</style>

</script>

</body>
</html>





