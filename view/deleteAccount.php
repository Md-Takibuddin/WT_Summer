<?php
include("../control/adminDeleteAccount.php");
?>
<head>
    <link rel="stylesheet" href="../css/profile.css">

</head>

<html>
<title>Delete Account</title>


    <body>
        <br>

    <form  method="POST">
    <p> Please enter your password to continue </p> 
    Password :
    <input type="password" name="confirmPassword">
    <font color="RED"><?php echo $deleteAccountError; ?></font> 
    <br>
  
    <input type="submit" value="Delete Account" name ="deleteAccount">
    <input type="submit" value="Cancel" name= "deleteAccountCancel">
  
  
    </form>

    </body>
</html>
