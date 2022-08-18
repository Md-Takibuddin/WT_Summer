<?php
include("../control/admin_login.php");
?>
<head>
    <link rel="stylesheet" href="../css/sign.css">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet"> -->
</head>


<html>
<title>Admin Login</title>


    <body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <form  method="POST"  onsubmit ="return loginBtn()">

        <h3>Welcome to Admin login</h3>

        <label >Email</label>
        <input type="email" name="LoginEmail"id="LoginEmail" placeholder="email">

        <label >Password</label>
        <input type="password" name="LoginPassword" id="LoginPassword" placeholder="password">

        <div class="error" ><?php echo $loginError; ?></di>

        <button class="button" type="submit"  name ="Admin_login_submit" id="Admin_login_submit" >Log in</button>
        <div class="signup">Don't have a account ?
        <a class='link' href= "adminsignup.php"> Sign up </a>
        </div>
        
         
        
    </form>
 <script src="../javascript/signin.js"></script> 


    </body>
</html>
