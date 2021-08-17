<?php
include('../db/cusDb.php'); 

   $validatefname ="";
   $validatelname ="";
   $validateemail="";
   $validateusername="";
   $validatepassword ="";
   $validatecpassword ="";
   $validatedob="";
   $validateaddress ="";
   $validatenid ="";
   $validatephone ="";
   $validategender="";
   $validatecheckbox="";
   $checkbox="";
   $gender="";
   $validateForm= "";
   $flag=true;
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
    $fname = $_REQUEST ["fname"];
    $lname = $_REQUEST ["lname"];
    $email = $_REQUEST ["email"];
    $username = $_REQUEST ["username"];
    $password = $_REQUEST["password"];
    $cpassword = $_REQUEST["cpassword"];
    $dob = $_REQUEST["dob"];
    $address = $_REQUEST ["address"];
    $nid = $_REQUEST ["nid"];
    $phone = $_REQUEST["phone"];
    
            if(empty($fname) || strlen($fname)<3){
                $validatefname="Please Enter a Valid First Name.";
                $flag=false;
            }
            
            if(empty($lname) || strlen($lname)<3){
                $validatelname="Please Enter a Valid Last Name.";
                $flag= false;
            }
           
            if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)){
                $validateemail="Email Does NOT exist! Enter a Valid Email.";
                $flag= false;
            }

              if(empty($username) || !preg_match('/[a-zA-Z0-9._]{5,}$/', $username)){
                $validateusername="Please enter a valid Username!";
                $flag= false;
            }
            
            if(empty($password) || strlen($password)<8 || !preg_match("/(?=.*[@#$%^&+=!]).*$/", $password)){
                $validatepassword = "Please Enter a valid Password atleast contain 1 special character.";
                $flag= false;
            }

           if(empty($cpassword) || $password != $cpassword){
                $validatecpassword = "Please Check Your Password Again!";
                $flag= false;
            }

            if(empty($dob))
            {
                $validatedob="Please Select a Date.";
                $flag= false;
            } 

            if(empty($address))
            {
                $validateaddress="Please Enter a Valid Address.";
                $flag= false;
            }  
            if(!preg_match("/^[0-9]\d{12}$/",$nid)){
                $validatenid="Please enter a valid NID Number!";
                $flag= false;
            }
            if(!preg_match("/^01\d{9}$/",$phone)){
                $validatephone="Please enter a valid phone number!";
                $flag=false;
            }  
            if(!isset($_POST["gender"])){
                $validateGender="Please Select Your Gender!";
                $flag=false;
            }
            else{
                    $gender = $_REQUEST["gender"];
            }
            if(!isset($_POST['checkbox'])){
                $validatecheckbox="Please agree to all terms & conditions";
                $flag= false;
            }
            if ($flag ==true) 
            {
                $connection = new db();
                $conobj=$connection->OpenCon();
    
                $userQuery=$connection->RegUser($conobj,"customer",$fname, $lname, $email, $username, $password, $dob, $address, $nid, $phone, $gender);
                
                $connection->CloseCon($conobj);
            }
            else
       {
        $validateForm="Registration Failed";
     }
    }
?>