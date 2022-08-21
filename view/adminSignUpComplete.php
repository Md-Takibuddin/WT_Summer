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
                src="<?php echo $_SESSION['adminPhoto']; ?>"
                  alt="User Image"
                />
              </figure>
              <h1 class="name"><?php echo $_SESSION['adminFName']." ".$_SESSION['adminLName'];?></h1>
              <h6 class="role">Admin</h6>
            </header>
            <section class="profile_filed_container">
              <div>
                <div class="input_field">
                  <span class="label">Email</span>
                  <span class="value"><?php echo $_SESSION['adminAddress'];?> </span>
                </div>
                <div class="input_field">
                  <span class="label"> Date of Birth</span>
                  <span class="value"><?php echo $_SESSION['adminDOB'];?></span>
                </div>
                <div class="input_field">
                  <span class="label">Address</span>
                  <span class="value"><?php echo $_SESSION['adminAddress'];?></span>
                </div>
              </div>
              <div>
                <div class="input_field">
                  <span class="label">Mobile No</span>
                  <span class="value"><?php echo $_SESSION['adminMobileNo'];?></span>
                </div>
                <div class="input_field">
                  <span class="label">CV</span>
                  <span>
                    <a class="value" href="<?php echo $_SESSION['adminCv'] ?>" target="_blank">Click here </a>
                  </span>
                </div>
                <div class="input_field">
                  <span class="label">key</span>
                  <span class="value"><?php echo $_SESSION['adminKey'];?></span>
                </div>
              </div>
            </section>
          </div>
        </section>

<br>
<big>
    Go to <a href= "adminlogin.php"> Login <br> </a>
    <br>
    <a href= "home.php"> Back to Home </a>
</big>
<script>sessionStorage.clear();</script>
</body>
<html>

