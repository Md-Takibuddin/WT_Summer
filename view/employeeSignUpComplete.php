<?php
session_start();
?>

<html>
<body>
<link rel="stylesheet" href="../css/profile.css" />


<font size="20" color="forestgreen"><b>Sign Up Successful</b></font>
<br>
<br>
<br>
<br>
        <!-- content -->
        <section class="content">
          <div class="profile_container">
            <header class="profile_header">
              <figure>
                <img
                src="<?php echo $_SESSION['ePhoto'];?>"
                  alt="User Image"
                />
              </figure>
              <h1 class="name"><?php echo $_SESSION['eFName']." ".$_SESSION['eLName'];?></h1>
              <h6 class="role"><?php echo $_SESSION['eJobTitle'];?></h6>
            </header>
            <section class="profile_filed_container">
              <div>
                <div class="input_field">
                  <span class="label">Email</span>
                  <span class="value"><?php echo $_SESSION['eEmail'];?> </span>
                </div>
                <div class="input_field">
                  <span class="label"> Date of Birth</span>
                  <span class="value"><?php echo $_SESSION['eDOB'];?></span>
                </div>
                <div class="input_field">
                  <span class="label">Address</span>
                  <span class="value"><?php echo $_SESSION['eAddress'];?></span>
                </div>
              </div>
              <div>
                <div class="input_field">
                  <span class="label">Mobile No</span>
                  <span class="value"><?php echo $_SESSION['eMobileNo'];?></span>
                </div>
                <div class="input_field">
                  <span class="label">CV</span>
                  <span>
                    <a class="value" href="<?php echo $_SESSION['eCv'] ?>" target="_blank">Click here </a>
                  </span>
                </div>
                <div class="input_field">
                  <span class="label">Salary</span>
                  <span class="value"><?php echo $_SESSION['eSalary'];?></span>
                </div>
              </div>
            </section>
          </div>
        </section>

<br>
<big>

    <a href= "adminDashboard.php"> Back to Dashboard </a>
</big>
<script>sessionStorage.clear();</script>
</body>
<html>

