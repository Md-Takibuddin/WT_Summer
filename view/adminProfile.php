<?php
include("../control/adminProfileData.php");
include("../control/adminProfileUpdate.php");

?>

<html>
    <link rel="stylesheet" href="../css/profile.css">
    <a href="adminDashboard.php"> Back </a>
     <?php echo $dataError; ?>

<body>
<font size="10" color="forestgreen"><b>Profile</b></font>

<form  method="POST" enctype="multipart/form-data"> 

        <img src="<?php echo $_SESSION['adminPhoto']; ?>">
    <div>
        First Name: 
         <input class="hide select" type="text" readonly name="admin_fname" value="<?php echo $_SESSION['adminFName'];?>" > 
         <?php echo $adminFNameError ; ?> 
        </div>
    <div>
        Last Name: 
         <input class="hide select" type="text" readonly name="admin_lname"value="<?php echo $_SESSION['adminLName'];?>" > 
         <?php echo $adminLNameError; ?> 
        </div>
    <div>
        Date of Birth: 
        <input class="hide select" type="text" name="admin_dob" value="<?php echo $_SESSION['adminDOB'];?>"> 
         <?php echo $adminDOBError; ?> 
        </div>
    <div>
        Address: 
         <input class="hide select" type="text"  name="admin_address" value="<?php echo $_SESSION['adminAddress'];?>"> 
         <?php echo $adminAddressError; ?> 
        </div>
    <div>
        Mobile No: 
        <td > <input class="hide select" type="text" name="admin_mobileno" value="<?php echo $_SESSION['adminMobileNo'];?>">
         </div>
    <div>
        Email: 
        <input  class="hide " type="text" name="admin_email" value="<?php echo $_SESSION['adminEmail'];?>" readonly> 
        </div>
    <div>
        Admin Key :
        <input class="hide " type="text" name="admin_key" value="<?php echo $_SESSION['adminKey'];?>" readonly> 
        </div>
    <div>
        Your CV :
        <a href= "<?php echo $_SESSION['adminCv'] ?>" target="_blank"> CV File </a>  
        </div>
 

        <?php echo $admin_photofileError; ?>
        <br>
        <?php echo $admin_cvfileError; ?>

    <div id="saveShow">
        <br>
        Select Photo : <input type="file" name="admin_photofile"> <br>
        Select CV : <input type="file" name="admin_cvfile">
        <br> <br>

        <input type="submit" value="Save" name ="Admin_update_data">

        <button id="changePassword" >Change Password </button>
        <button id="cancelBtn" >Cancel</button>
        <button id="delete" >Delete Account</button>
    </div>
    
        </form>
        
        <p id="demo"></p>
        <button class="edit">Edit</button>
</body>


<script src="../javascript/edit.js" ></script>


</html>


