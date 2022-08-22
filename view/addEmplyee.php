<?php
include("../control/addEmployee.php");
?>

<head>
<link rel="stylesheet" href="../css/signup.css">
</head>

<html>
<title>Add Employee</title>

<body>
<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
</div>
<form  method="POST" enctype="multipart/form-data" onsubmit ="return submitBtn()">

    
<h3> Add Employee</h3>
<div class= "full">
<div class="half">
        <label >First Name: </label>
        <input class="addEmployee" type="text" name="fname" id="admin_fname" data-name ="fname" placeholder="Mr. Takib">
        
         <label >Date of Birth: </label>
        <input class="addEmployee" type="date" name="dob" id="admin_dob"  data-name ="dob" >
         
         <label >Mobile No: </label>
        <input class="addEmployee"  type="tel" id="phone" name="admin_mobileno" data-name ="mobileNo" placeholder="01xxxxxxxx">
          

         <label >Email: </label>
        <input class="addEmployee" type="email"id="email" name="admin_email" data-name ="email" placeholder="user@mail.com" >
        
         <label >Upload Your CV : </label>
        <input id="cv" type = "text" placeholder = "Choose PDF File" onclick ="javascript:document.getElementById('cvFile').click();">
        <input id = "cvFile" type="file" name="admin_cvfile"style='visibility: hidden;' name="img" onchange="ChangeText(this, 'cv');">
       
</div>    
    
<div class="half">
        <label >Last Name: </label>
        <input class="addEmployee" type="text" name="lname" id="admin_lname" data-name ="lname" placeholder="Khan">
       
        <label >Address: </label>
        <input class="addEmployee" type="text" name="address"  id="admin_address" data-name ="address" placeholder = "Current address">
         
            <label >Job Title : </label>
            <select name="jobTitle" id="jobTitle" >
                 <option value="" disabled selected hidden>Choose title...</option>
                <option value="Manager">Manager</option>
                <option value="Accountant ">Accountant</option>
                <option value="Executive Officer">Executive Officer</option>
                <option value="Internship">Internship</option>
            </select>
            <br><br>
       
     
         <label >Salary: </label>
        <input class="addEmployee" type="text" id="adminPass"name="salary" data-name ="salary" >
        
     
    
         <label >Upload Your Photo: </label>
         <input id="photo" type = "" placeholder = "Choose JPG/PNG File" onclick ="javascript:document.getElementById('photoFile').click();">
        <input id = "photoFile" type="file" name="admin_photofile"style='visibility: hidden;' name="img" onchange="ChangeText(this, 'photo');">
    

 </div>     
</div>
    <input class ="button" type="submit" id = "submit" value="Submit" name ="Admin_signup_submit">
    <input class ="reset"type="reset" id = "reset" value="Reset" name= "Admin_signup_reset">
    

<a href= "home.php"> Back to Home </a>


</form>

<script src="../javascript/addEmployee.js"></script>


<script>

// var tmpFname = sessionStorage.getItem('fname')
// document.getElementById("admin_fname").value=tmpFname;

// var tmpLname = sessionStorage.getItem('lname')
// document.getElementById("admin_lname").value=tmpLname;

// var tmpAddress = sessionStorage.getItem('address')
// document.getElementById("admin_address").value=tmpAddress;

// var tmpDob = sessionStorage.getItem('dob')
// document.getElementById("admin_dob").value=tmpDob;

// var tmpMobileNo = sessionStorage.getItem('mobileNo')
// document.getElementById("phone").value=tmpMobileNo;

// var tmpEmail = sessionStorage.getItem('email')
// document.getElementById("email").value=tmpEmail;

</script>

</body>
</html> 