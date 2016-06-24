<?php
require ('reg.php');
?>

<html>
<head>
<link rel="stylesheet"; type="text/css"; href="Styling.css">
     
</head>
<body class="register" >
    
    
    <form class="register"  action="reg.php" method="POST" accept-charset="UTF-8">
        <h2 class="register"><b>Register</b></h2><br><br><br>
      
        <label for='firstName' ><b>First Name*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
        <input type="text" name="FIRST_NAME" id="FIRST_NAME" maxlenght="20" required/><br><br>
      
        <label for='lastName' ><b>Last Name*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
        <input type="text" name="LAST_NAME" id="LAST_NAME" maxlenght="20" required/><br><br>
        
        <label for='DOB'><b>Date of Birth*:&nbsp;&nbsp;&nbsp;</b></label>
        <input type="text" id="DOB" name="DOB" placeholder="mm/dd/yy" required ><br><br>
    
        <label for='email' ><b>Email Address*:</b></label>
        <input type='email' name='EMAIL' id='EMAIL' maxlength="50" required/><br><br>
   
       <label for='password' ><b>Password*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
        <input type='password' name='PASSWORD' id='PASSWORD'  maxlength="21" required /><br><br>
       
        
        <input type='submit' class="registration" name='submit' value='submit'/><br><br><br>
        
        
        <a href="login.php" class="registration">I already have registration</a><br>
    </form>
    
    
    
</body>


</html>