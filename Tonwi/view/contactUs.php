<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to SHOP</title>
    <link rel="stylesheet" type ="text/css" href="../css/header.css">
    <link rel="stylesheet" type ="text/css" href="../css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  
    var div = $("div.login-box");
    div.animate({height: '0px', opacity: '0.4'}, "slow");
    div.animate({width: '0px', opacity: '0.8'}, "slow");
    div.animate({height: '320px', opacity: '0.4'}, "slow");
    div.animate({width: '500px', opacity: '0.8'}, "slow");
 
});
</script> 
</head>
<body style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(87, 137, 194));">
    <div class="topSection">
        <img src="../resources/pbl.png" alt="pbl Logo" class='logo'>
        <h1 class='topTitle'>Shop Management</h1>
        <h2 class='slogan'>- the shop you can trust</h2>
        <a href="aboutUs.php" class='aboutPbl'>About shop</a>
        <h4 class='devider'>|</h4>
        <a href="contactUs.php" class='contactUs'>Contact Us</a>
    </div>
    <div class='navbar'>
        <div class='navCont'>
            <a href="homePage.php" id="nav-cont">Home</a>
            <a href="terms.php" id="nav-cont">Terms of Deposit</a>
            <a href="loan.php" id="nav-cont">goods</a>
            <a href="branches.php" id="nav-cont">shops</a>
        </div>
    </div>

    <div class="login-box">
    <br>
    <br>
    <br>
        <h1 style="text-shadow: 1px 1px;">Contact With Us Now!</h1>
        <h3 style="text-align:center; text-shadow: 1px 1px;">Email: shopstonwi@gmail.com</h3>
        <h3 style="text-align:center; text-shadow: 1px 1px;">Adress: 1217, Mohammadour, Dhaka</h3>
        <h3 style="text-align:center; text-shadow: 1px 1px;">Mobile: +8801711111111</h3>
        
    </div>

    <footer class='footer'>
        ©2021 Shop Management
    </footer>  
          
</body>
</html>