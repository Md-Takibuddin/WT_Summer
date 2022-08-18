<?php
include("../control/admin_signup.php");
?>

<html>
<head>
<title>Registration</title>
</head>
<body>

<h1> Admin Registration Form</h1>

<form  method="POST" enctype="multipart/form-data" onsubmit ="return submitBtn()">

<?php echo $dataError; ?>

<table align = "center">

    

<label >First Name: 
        <input class="signup" type="text" name="admin_fname" id="admin_fname" data-name ="fname">
         <?php echo $adminFNameError; ?> 

    
    
         <label >Last Name: </label>
        <input class="signup" type="text" name="admin_lname" id="admin_lname" data-name ="lname">
         <?php echo $adminLNameError; ?> 
     
    
         <label >Date of Birth: </label>
        <input class="signup" type="date" name="admin_dob" id="admin_dob"  data-name ="dob">
         <?php echo $adminDOBError; ?> 
     
    
         <label >Address: </label>
        <input class="signup" type="text" name="admin_address"  id="admin_address" data-name ="address">
         <?php echo $adminAddressError; ?> 
    
    
         <label >Mobile No: </label>
        <input class="signup"  type="tel" id="phone" name="admin_mobileno" data-name ="mobileNo">
         <?php echo $adminMobileNoError; ?> 
    
    
         <label >Email: </label>
        <input class="signup" type="email"id="email" name="admin_email" data-name ="email" >
         <?php echo $adminEmailError; ?> 
     
         <label >Password: </label>
        <input class="signup" type="password" name="admin_password" data-name ="password">
         <?php echo $adminPasswordError; ?> 
     
    
         <label >Admin Key : </label>
        <input class="signup" type="text" name="admin_key" data-name ="key">
         <?php echo $adminKeyError; ?> 
    
         <label >Upload Your CV : </label>
        <input type="file" name="admin_cvfile">
         <?php echo $admin_cvfileError; ?> 
     
    
         <label >Upload Your Photo: </label>
        <input type="file" name="admin_photofile">
         <?php echo $admin_photofileError; ?> 
        
     

    <input type="submit" id = "submit" value="Submit" name ="Admin_signup_submit">
    <input type="reset" id = "reset" value="Reset" name= "Admin_signup_reset">


</table>
</form>



<br>
Go to <a href= "adminlogin.php"> Login <br> </a>
<br>
<a href= "home.php"> Back to Home </a>

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