<?php
include("../control/adminChangePassword.php");
?>
<head>
    <link rel="stylesheet" href="../css/profile.css">

</head>

<html>
<title>Change password</title>


    <body>
        <br>

    
    <form  method="POST">
    <table>
    <tr>
        <td>Old Password : </td>
        <td><input type="password" name="oldPassword"></td>
    </tr> 
    <tr>
        <td>New Password : </td>
        <td><input type="password" name="newPassword"></td>
    </tr> 
    <tr>
        <td>Confirm Password : </td>
        <td><input type="password" name="confirmPassword"></td>
    </tr>
    <tr>
        <td> </td>
        <td><font color="RED"><?php echo $passwordError; ?></font>  </td>
    </tr>
    <tr>
    <td align="center">
        
        </td>
        <td align="center">
         
            <input type="submit" value="Save" name ="saveNewPass">
            <input type="submit" value="Cancel" name= "changePasswordCancel">
        
    </tr>
   
   
    </table>
    </form>

    </body>
</html>
