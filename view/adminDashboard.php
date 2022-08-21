<?php
include("../control/dashboardCheck.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/dashboard.css" />
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
          <a href="/" class="nav_item">
            <figure class="nav_icon">
              <img src="../resources/static/icons/home.png" alt="home-icon" />
            </figure>
            <span>Dashboard</span>
          </a>
          <a href="/" class="nav_item">
            <figure class="nav_icon">
              <img src="../resources/static/icons/balance.png" alt="home-icon" />
            </figure>
            <span>Balance</span>
          </a>
          <a href="/" class="nav_item">
            <figure class="nav_icon">
              <img src="../resources/static/icons/invoice.png" alt="home-icon" />
            </figure>
            <span>Invoices</span>
          </a>
          <a href="/" class="nav_item">
            <figure class="nav_icon">
              <img src="../resources/static/icons/card.png" alt="home-icon" />
            </figure>
            <span>Cards</span>
          </a>
          <a href="/" class="nav_item">
            <figure class="nav_icon">
              <img src="../resources/static/icons/transection.png" alt="home-icon" />
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
              <img src="../resources/static/icons/search.png" alt="search icon" />
              <input placeholder="Seach here..." type="text" />
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
              <img src="../resources/static/icons/Setting.png" alt="setting icon" />
            </figure>
            <div class="user">
              <figure>
                <img
                  src="../resources/static/users/Placeholder-1.png"
                  alt="user image"
                />
                <figcaption>Rara Avis</figcaption>
              </figure>
            </div>
          </div>
        </section>
        <!-- Dashboard -->
        <section class="dashboard">
          <h1 class="header">Dashboard</h1>
          <!-- status -->
          <section class="status_container">
            <div class="status">
              <header>
                <h6 class="status_header">Total Deposit</h6>
                <span class="status_value"
                  >1.234 <br />
                  BDT</span
                >
              </header>
              <figure class="status_icon">
                <img src="../resources/static/dashboard/background-1.png" alt="" />
              </figure>
            </div>
            <div class="status">
              <header>
                <h6 class="status_header">Total Employee</h6>
                <span class="status_value">932</span>
              </header>
              <figure class="status_icon">
                <img src="../resources/static/dashboard/background-2.png" alt="" />
              </figure>
            </div>
            <div class="status">
              <header>
                <h6 class="status_header">Loan Pending</h6>
                <span class="status_value">932</span>
              </header>
              <figure class="status_icon">
                <img src="../resources/static/dashboard/background.png" alt="" />
              </figure>
            </div>
            <div class="status">
              <header>
                <h6 class="status_header">Unpaid Loan</h6>
                <span class="status_value">
                  1.234 <br />
                  BDT</span
                >
              </header>
              <figure class="status_icon">
                <img src="../resources/static/dashboard/background-1.png" alt="" />
              </figure>
            </div>
          </section>
          <!-- Lists -->
          <section class="lists">
            <div class="list">
              <header class="list_header">
                <h5>Employee</h5>
              </header>
              <form class="list_form">
                <div>
                  <img
                    src="../resources/static/icons/search.png"
                    alt="search icon"
                  />
                  <input id="employee_list_input" placeholder="Search here.." type="text" />
                </div>
                <a class="list_form_button" href="addEmplyee.php"><img src="../resources/static/icons/plus.png" alt="button" /> </a>    
                </button>
              </form>

              <ul class="list_item_container employee_list">

              <?php
                 
                  require_once("../model/admindata.php");
                  $admindb = new database();
                  $conObj=$admindb->openCon();
                  $result = $admindb->viewAllAdmin($conObj);

                  if ($result ->num_rows >0){

                  while ($myrow = $result ->fetch_assoc()){
                      echo "<li class=list_item><div class=list_item_content><figure><img src=";
                      echo $myrow["adminphoto"]." alt=user /></figure>";
                      echo "<span> <span class=list_item_header>";
                      echo $myrow["adminfname"]." ".$myrow["adminlname"] ."</span>";
                      echo "<p class=list_item_description>".$myrow["adminemail"]."</p></span></div>"; 
                      echo "<span class=list_item_date>Show</span></li>";
                  }
                }
                mysqli_close($conObj);       
             ?>
              </ul>
              <button class="lists_cta_btn">View More</button>
            </div>
            <div class="list">
              <header class="list_header">
                <h5>Customer</h5>
              </header>
              <form class="list_form">
                <div>
                  <img
                    src="../resources/static/icons/search.png"
                    alt="search icon"
                  />
                  <input placeholder="Search here.." type="text" />
                </div>
              <a class="list_form_button" href="addEmployee.php">
                <img src="../resources/static/icons/plus.png" alt="button" />
               </a>    
              </form>
              <ul class="list_item_container">
                <li class="list_item">
                  <div class="list_item_content">
                    <figure>
                      <img
                        src="../resources/static/users/Placeholder-3.png"
                        alt="user"
                      />
                    </figure>
                    <span>
                      <span class="list_item_header">Samantha William</span>
                      <p class="list_item_description">
                        Lorem ipsum dolor sit amet...
                      </p>
                    </span>
                  </div>
                  <span class="list_item_date">12:45 PM</span>
                </li>
                <li class="list_item">
                  <div class="list_item_content">
                    <figure>
                      <img
                        src="../resources/static/users/Placeholder-3.png"
                        alt="user"
                      />
                    </figure>
                    <span>
                      <span class="list_item_header">Samantha William</span>
                      <p class="list_item_description">
                        Lorem ipsum dolor sit amet...
                      </p>
                    </span>
                  </div>
                  <span class="list_item_date">12:45 PM</span>
                </li>
                <li class="list_item">
                  <div class="list_item_content">
                    <figure>
                      <img
                        src="../resources/static/users/Placeholder.png"
                        alt="user"
                      />
                    </figure>
                    <span>
                      <span class="list_item_header">Samantha William</span>
                      <p class="list_item_description">
                        Lorem ipsum dolor sit amet...
                      </p>
                    </span>
                  </div>
                  <span class="list_item_date">12:45 PM</span>
                </li>
              </ul>
              <button class="lists_cta_btn">View More</button>
            </div>
            <div></div>
          </section>
        </section>
      </section>
    </main>

    <script src="../javascript/search.js"></script>
  </body>
</html>


