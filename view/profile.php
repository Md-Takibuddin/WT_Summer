<!DOCTYPE html>
<html lang="en">
  <head>
<?php
include("../control/adminProfileData.php");
include("../control/adminProfileUpdate.php");
?>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
     <a href="adminDashboard.php"> Back </a>
    <link rel="stylesheet" href="../css/profile.css" />
    <link rel="stylesheet" href="../css/edit.css" />

    <title>Document</title>
  </head>
  <body>
    
  <main class="main_container">
      <!-- Sidebar -->
      <nav class="nav">
        <!-- Logo -->
        <figure class="logo_wrapper">
          <a href="/">
            <img class="logo" src="../resources/static/logo.svg" alt="logo" />
          </a>
        </figure>

        <!-- Nav Links  -->
        <div class="nav_items_wrapper">
          <a href="adminDashboard.php" class="nav_item">
            <figure class="nav_icon">
              <img src="../resources/static/icons/home.png" alt="home-icon" />
            </figure>
            <span>Dashboard</span>
          </a>
          <a href="underConstruction.php" class="nav_item">
            <figure class="nav_icon">
              <img
                src="../resources/static/icons/balance.png"
                alt="home-icon"
              />
            </figure>
            <span>Balance</span>
          </a>
          <a href="underConstruction.php" class="nav_item">
            <figure class="nav_icon">
              <img
                src="../resources/static/icons/invoice.png"
                alt="home-icon"
              />
            </figure>
            <span>Invoices</span>
          </a>
          <a href="/" class="nav_item">
            <figure class="nav_icon">
              <img src="../resources/static/icons/card.png" alt="home-icon" />
            </figure>
            <span>Cards</span>
          </a>
          <a href="underConstruction.php" class="nav_item">
            <figure class="nav_icon">
              <img
                src="../resources/static/icons/transection.png"
                alt="home-icon"
              />
            </figure>
            <span>Transaction</span>
          </a>
        </div>
        <div class="log_out_warpper">
          <a class="nav_item" href="/">
            <img src="../resources/static/icons/log-out.png" alt="" />
            <span>Log Out</span>
          </a>
        </div>
      </nav>

      <!-- Main Contents -->

      <section class="content_body">

      

        <!-- Header -->
        <section class="header">
          <!-- Searchbar -->
          <div class="searchbar_warpper">
            <div class="searchbar">
              <img
                src="../resources/static/icons/search.png"
                alt="search icon"
              />
              <input placeholder="Search here..." type="text" />
            </div>
          </div>
          <!-- CTAS -->
          <div class="header_ctas">
            <figure class="_icon">
              <img src="../resources/static/icons/chat.png" alt="chat icon" />
            </figure>
            <figure class="_icon">
              <img
                src="../resources/static/icons/Notification.png"
                alt="notiication icon"
              />
            </figure>
            <figure class="_icon">
              <img
                src="../resources/static/icons/Setting.png"
                alt="setting icon"
              />
            </figure>
            <div class="user">
              <figure>
                <img
                  src="<?php echo $_SESSION['adminPhoto']; ?>"
                  alt="user image"
                />
                <figcaption class="textBtn">
                  <?php echo $_SESSION['adminFName'];?>
                </figcaption>
              </figure>
            </div>
          </div>
        </section>

        <!-- content -->

        <section class="content">
          <form method="POST" enctype="multipart/form-data" class="profile_container">
         
          <!-- BTN -->
         <div class="btnContainer">
              <button class="editBtn">
                <img src="../resources/static/icons/edit.png" alt="icon">
              </button>
              <button class="deleteBtn">
                <img src="../resources/static/icons/delete.png" alt="icon">
              </button>
            </div>
            <header class="profile_header">
              <figure>
                <img
                  src="<?php echo $_SESSION['adminPhoto']; ?>"
                  alt="User Image"
                />
              </figure>
              <h1 class="name">
                <?php echo $_SESSION['adminFName']." ".$_SESSION['adminLName'];?>
              </h1>
              <h6 class="role">Admin</h6>
            </header>
            <section class="profile_filed_container">
              <div>
                <div class="input_field">
                  <span class="label">Email</span>
                  <input
                    class="hide value"
                    type="text"
                    name="admin_email"
                    value="<?php echo $_SESSION['adminEmail'];?>"
                    readonly
                  />
                </div>
                <div class="input_field">
                  <span class="label"> Date of Birth</span>
                  <input
                    class="hide select"
                    type="text"
                    name="admin_dob"
                    value="<?php echo $_SESSION['adminDOB'];?>"
                  />
                </div>
                <div class="input_field">
                  <span class="label">Address</span>
                  <input
                    class="hide select"
                    type="text"
                    name="admin_address"
                    value="<?php echo $_SESSION['adminAddress'];?>"
                  />
                </div>
              </div>
              <div>
                <div class="input_field">
                  <span class="label">Mobile No</span>
                  <td>
                    <input
                      class="hide select"
                      type="text"
                      name="admin_mobileno"
                      value="<?php echo $_SESSION['adminMobileNo'];?>"
                    />
                  </td>
                </div>

                <div class="input_field">
                  <span class="label">CV</span>
                  <span>
                    <a
                      class="value"
                      href="<?php echo $_SESSION['adminCv'] ?>"
                      target="_blank"
                      >Click here
                    </a>
                  </span>
                </div>
                <div class="input_field">
                  <span class="label">key</span>
                  <span class="value"><?php echo $_SESSION['adminKey'];?></span>
                </div>
              </div>
            </section>
            
            <div id="saveShow">
                Select Photo : <input type="file" name="admin_photofile"> <br>
                Select CV : <input type="file" name="admin_cvfile">
                <br> <br>

                <input class="saveShowBtn" type="submit" value="Save" name ="Admin_update_data">
                <button class="saveShowBtn" id="changePassword" >Change Password </button>
                <button class="saveShowBtn" id="cancelBtn" >Cancel</button>
                <!-- <button id="delete" >Delete Account</button> -->
           </div>
          </div>
        </section>
      </section>
    </main>

    <script src="./script.js"></script>
  </body>
  
  <script src="../javascript/edit.js" ></script>
</html>

