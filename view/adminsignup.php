<?php
include("../control/admin_signup.php");
?>

<head>
<link rel="stylesheet" href="../css/signup.css">
</head>

<html>
<title>Registration</title>

<body>
<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
</div>
<form  method="POST" enctype="multipart/form-data" onsubmit ="return submitBtn()">

<?php echo $dataError; ?>
    
<h3> Admin Registration Form</h3>
<div class= "full">
<div class="half">
        <label >First Name: </label>
        <input class="signup" type="text" name="admin_fname" id="admin_fname" data-name ="fname" placeholder="Mr. Takib">
         <?php echo $adminFNameError; ?> 


         <label >Date of Birth: </label>
        <input class="signup" type="date" name="admin_dob" id="admin_dob"  data-name ="dob" >
         <?php echo $adminDOBError; ?> 
     
         <label >Mobile No: </label>
        <input class="signup"  type="tel" id="phone" name="admin_mobileno" data-name ="mobileNo" placeholder="01xxxxxxxx">
         <?php echo $adminMobileNoError; ?> 

         <label >Email: </label>
        <input class="signup" type="email"id="email" name="admin_email" data-name ="email" placeholder="user@mail.com" >
         <?php echo $adminEmailError; ?> 


         <label >Upload Your CV : </label>
        <input id="cv" type = "text" placeholder = "Choose PDF File" onclick ="javascript:document.getElementById('cvFile').click();">
        <input id = "cvFile" type="file" name="admin_cvfile"style='visibility: hidden;' name="img" onchange="ChangeText(this, 'cv');">
        <div class="error"><?php echo $admin_cvfileError; ?> </div> 
</div>    
    
<div class="half">
        <label >Last Name: </label>
        <input class="signup" type="text" name="admin_lname" id="admin_lname" data-name ="lname" placeholder="password">
        <?php echo $adminLNameError; ?> 

        <label >Address: </label>
        <input class="signup" type="text" name="admin_address"  id="admin_address" data-name ="address" placeholder = "Current address">
         <?php echo $adminAddressError; ?> 
   
            <label >Admin Key : </label>
        <input class="signup" type="text" id="adminKey" name="admin_key" data-name ="key" placeholder = "As provided">
         <?php echo $adminKeyError; ?> 
     
         <label >Password: </label>
        <input class="signup" type="password" id="adminPass"name="admin_password" data-name ="password" placeholder = "xYz9*aUqb%6">
         <?php echo $adminPasswordError; ?> 
     
    
         <label >Upload Your Photo: </label>
         <input id="photo" type = "text" placeholder = "Choose JPG/PNG File" onclick ="javascript:document.getElementById('photoFile').click();">
        <input id = "photoFile" type="file" name="admin_photofile"style='visibility: hidden;' name="img" onchange="ChangeText(this, 'photo');">
        <div class="error"><?php echo $admin_photofileError; ?> </div>

 </div>     
</div>
    <input class ="button" type="submit" id = "submit" value="Submit" name ="Admin_signup_submit">
    <input class ="reset"type="reset" id = "reset" value="Reset" name= "Admin_signup_reset">
    
<br>
<label for="">Go to <a href= "adminlogin.php"> Login <br> </a></label>
<br>
<a href= "home.php"> Back to Home </a>


</form>




<p id="email_available" ></p>
<p id="mobile_available" ></p>
<p id="key_available" ></p>

<script src="../javascript/signup.js"></script>

<script>

var tmpFname = sessionStorage.getItem('fname')
document.getElementById("admin_fname").value=tmpFname;

var tmpLname = sessionStorage.getItem('lname')
document.getElementById("admin_lname").value=tmpLname;

var tmpAddress = sessionStorage.getItem('address')
document.getElementById("admin_address").value=tmpAddress;

var tmpDob = sessionStorage.getItem('dob')
document.getElementById("admin_dob").value=tmpDob;

var tmpMobileNo = sessionStorage.getItem('mobileNo')
document.getElementById("phone").value=tmpMobileNo;

var tmpEmail = sessionStorage.getItem('email')
document.getElementById("email").value=tmpEmail;

</script>

</body>
</html> 