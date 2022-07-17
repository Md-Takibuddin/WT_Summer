<?php
include("../control/admin_signup.php");
?>

<html>
<head>
<title>Registration</title>
</head>
<body>

<h1> Admin Registration Form</h1>

<form  method="POST" enctype="multipart/form-data">

<?php echo $dataError; ?>

<table align = "center">

    <tr>
        <td>First Name: </td>
        <td><input type="text" name="admin_fname" ></td>
        <td> <?php echo $adminFNameError; ?> </td>

    </tr>
    <tr>
        <td>Last Name: </td>
        <td><input type="text" name="admin_lname"></td>
        <td> <?php echo $adminLNameError; ?> </td>
    </tr> 
    <tr>
        <td>Date of Birth: </td>
        <td><input type="date" name="admin_dob"></td>
        <td> <?php echo $adminDOBError; ?> </td>
    </tr> 
    <tr>
        <td>Address: </td>
        <td><input type="text" name="admin_address"></td>
        <td> <?php echo $adminAddressError; ?> </td>
    </tr>
    <tr>
        <td>Mobile No: </td>
        <td><input  type="tel" id="phone" name="admin_mobileno"></td>
        <td> <?php echo $adminMobileNoError; ?> </td>
    </tr>
    <tr>
        <td>Email: </td>
        <td><input type="email" name="admin_email"></td>
        <td> <?php echo $adminEmailError; ?> </td>
    </tr> 
    <tr>
        <td>Password: </td>
        <td><input type="password" name="admin_password"></td>
        <td> <?php echo $adminPasswordError; ?> </td>
    </tr> 
    <tr>
        <td>Admin Key :</td>
        <td><input type="text" name="admin_key"></td>
        <td> <?php echo $adminKeyError; ?> </td>
    </tr>
    <tr>
        <td>Upload Your CV :</td>
        <td><input type="file" name="admin_cvfile"></td>
        <td> <?php echo $admin_cvfileError; ?> </td>
    </tr> 
    <tr>
        <td>Upload Your Photo:</td>
        <td><input type="file" name="admin_photofile"></td>
        <td> <?php echo $admin_photofileError; ?> </td>
        
    </tr> 
    <tr>
        <td>
            <input type="submit" value="Submit" name ="Admin_signup_submit">
            <input type="reset" value="Reset" name= "Admin_signup_reset">
        </td>
    </tr>


</table>
<br>
Go to <a href= "adminlogin.php"> Login <br> </a>
<br>
<a href= "home.php"> Back to Home </a>
</form>

</body>
</html> 