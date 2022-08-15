<?php
include("../control/admin_login.php");
?>
<head>
    <link rel="stylesheet" href="../css/sign.css">

</head>


<html>
<title>Admin Login</title>


    <body>
        <br>
    <h3>Welcome to Admin login </h4>
    
    <form  method="POST" enctype="multipart/form-data">
    <table>
    <tr>
        <td>Email: </td>
        <td><input type="email" name="LoginEmail"></td>
    </tr> 
    <tr>
        <td>Password: </td>
        <td><input type="password" name="LoginPassword"></td>
    </tr> 
    <tr>
        <td> </td>
        <td><font color="RED"><?php echo $loginError; ?></font>  </td>
    </tr>
    <tr>
    <td align="center">
        
        </td>
        <td align="center">
         
            <input type="submit" value="Log in" name ="Admin_login_submit">
            <input type="reset" value="Reset" name= "Admin_login_reset">
        
    </tr>
   
   
    </table>
    </form>

    Don't have a account ?
    <a href= "adminsignup.php"> Sign up </a>


    </body>
</html>
