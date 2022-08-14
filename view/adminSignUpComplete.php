<?php
session_start();
?>

<html>
<body>


<font size="20" color="forestgreen"><b>Sign Up Successful</b></font>
<br>
<br>
<br>
<br>
<table>

    <tr>
        <td>Photo: </td>
        <td><img src="<?php echo $_SESSION['adminPhoto']; ?>" height="150" width="150">  </td>

    </tr>
    <tr>
        <td>Name: </td>
        <td> <?php echo $_SESSION['adminFName'] . " " . $_SESSION['adminLName'] . "<br>"; ?> </td>

    </tr>
    <tr>
        <td>Date of Birth: </td>
        <td> <?php echo $_SESSION['adminDOB'] . "<br>"; ?> </td>
    </tr> 
    <tr>
        <td>Address: </td>
        <td> <?php echo $_SESSION['adminAddress'] . "<br>"; ?> </td>
    </tr>
    <tr>
        <td>Mobile No: </td>
        <td> <?php echo $_SESSION['adminMobileNo'] . "<br>"; ?> </td>
    </tr>
    <tr>
        <td>Email: </td>
        <td> <?php echo $_SESSION['adminEmail'] . "<br>"; ?> </td>
    </tr> 
    <tr>
        <td>Admin Key :</td>
        <td> <?php echo $_SESSION['adminKey'] . "<br>"; ?> </td>
    </tr>
    <tr>
        <td>Your CV :</td>
        <td> <?php echo $_SESSION['admin_cvfileError'] . "<br>"; ?> </td>
    </tr> 
    <tr>
        <td>Your Photo:</td>
        <td> <?php echo $_SESSION['admin_photofileError'] . "<br>"; ?> </td>
        
    </tr> 


</table>


<br>
<big>
    Go to <a href= "adminlogin.php"> Login <br> </a>
    <br>
    <a href= "home.php"> Back to Home </a>
</big>

</body>
<html>

