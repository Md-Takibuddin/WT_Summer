<?php
include("../control/adminDeleteAccount.php");
?>
<head>
    <link rel="stylesheet" href="../css/profile.css">

</head>

<html>
<title>Delete Account</title>
    <body>
      <form class="delete_account_container" method="POST">
        <div>
            <p> Please enter your password to continue </p> 
            Password :
            <input type="password" name="confirmPassword">
            <h2><?php echo $deleteAccountError; ?></font>   
            <input type="submit" value="Delete Account" name ="deleteAccount">
            <input type="submit" value="Cancel" name= "deleteAccountCancel">
        </div>
        </form>
    </body>
</html>
