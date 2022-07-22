<?php
include("../control/adminProfileData.php");
?>
<html>
<body>


<font size="10" color="forestgreen"><b>Profile</b></font>

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
        <td><a href= "<?php echo $_SESSION['adminCv'] ?>" target="_blank"> CV File  </a>  </td>
    </tr> 

</table>
</body>
</html>

