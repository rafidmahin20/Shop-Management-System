console.log("hoise valid js");

function valid()
{
   var errormsg ="";
   if(document.getElementById('fname').value =="")
   {
       errormsg += "Enter Your First Name\n";
   }
   if(document.getElementById('lname').value =="")
   {
       errormsg += "Enter Your Last Name\n";
   }
   if(document.getElementById('username').value =="")
   {
       errormsg += "Enter Your userame\n";
   }
   if(document.getElementById('password').value =="")
   {
       errormsg += "Enter Your Password\n";
   }
   if(document.getElementById('gender').value =="")
   {
       errormsg += "Enter Your Gender\n";
   }
   if(document.getElementById('mobile').value =="")
   {
       errormsg += "Enter Your Contact\n";
   }
   if(document.getElementById('email').value =="")
   {
       errormsg += "Enter Your Email\n";
   }
   if(document.getElementById('address').value =="")
   {
       errormsg += "Enter Your Address\n";
   }

   if(errormsg!="")
   {
       alert(errormsg);
       return false;
   }
}