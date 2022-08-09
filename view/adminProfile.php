<?php
require_once("../control/adminProfileData.php");
include("../control/adminProfileUpdate.php");
?>

<html>
    <link rel="stylesheet" href="../css/style.css">
    <a href="adminDashboard.php"> Back </a>

<body>


<font size="10" color="forestgreen"><b>Profile</b></font>

<form  method="POST" enctype="multipart/form-data">
<table>

    <tr>
        <td>Photo: </td>
        <td><img src="<?php echo $_SESSION['adminPhoto']; ?>" height="150" width="150">  </td>

    </tr>
    <tr>
        <td>First Name: </td>
        <td> <input class="hide select" type="text" readonly name="admin_fname" value="<?php echo $_SESSION['adminFName']; ?>" > </td>

    </tr>
    <tr>
        <td>Last Name: </td>
        <td> <input class="hide select" type="text" readonly name="admin_lname"value="<?php echo $_SESSION['adminLName'];?>" > </td>

    </tr>
    <tr>
        <td>Date of Birth: </td>
        <td><input class="hide select" type="text" name="admin_dob" value=" <?php echo $_SESSION['adminDOB']; ?>"> </td>
    </tr> 
    <tr>
        <td>Address: </td>
        <td> <input class="hide select" type="text"  name="admin_address" value="<?php echo $_SESSION['adminAddress']; ?>"> </td>
    </tr>
    <tr>
        <td>Mobile No: </td>
        <td > <input class="hide select" type="text" name="admin_mobileno" value="<?php echo $_SESSION['adminMobileNo']; ?> "></td>
    </tr>
    <tr>
        <td>Email: </td>
        <td><input  class="hide " type="text" name="admin_email" value=" <?php echo $_SESSION['adminEmail']; ?>" readonly> </td>
    </tr> 
    <tr>
        <td>Admin Key :</td>
        <td><input class="hide " type="text" name="admin_key" value=" <?php echo $_SESSION['adminKey'] ; ?>" readonly> </td>
    </tr>
    <tr>
        <td>Your CV :</td>
        <td><a href= "<?php echo $_SESSION['adminCv'] ?>" target="_blank"> CV File  </a>  </td>
    </tr> 

  

</table>




<div id="saveShow">
<br>
Select Photo : <input type="file" name="admin_photofile"> <br>
Select CV : <input type="file" name="admin_cvfile">
<br>
<br>
<input type="submit" value="Save" name ="Admin_update_data">
<button id="cancelBtn" >Cancel</button>

</div>


</form>

<button class="edit ">Edit</button>
</body>

<script src="../javascript/edit.js" ></script>


</html>


