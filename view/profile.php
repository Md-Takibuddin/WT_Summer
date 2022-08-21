<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/profile.css" />
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

        <!-- content -->
        <section class="content">
          <div class="profile_container">
            <header class="profile_header">
              <figure>
                <img
                  src="../resources/static/users/Placeholder-3.png"
                  alt="User Image"
                />
              </figure>
              <h1 class="name">Shan Hossian</h1>
              <h6 class="role">Tea Boy</h6>
            </header>
            <section class="profile_filed_container">
              <div>
                <div class="input_field">
                  <span class="label">Email</span>
                  <span class="value">shan@gmail.com </span>
                </div>
                <div class="input_field">
                  <span class="label"> Date of Birth</span>
                  <span class="value">shan@gmail.com </span>
                </div>
                <div class="input_field">
                  <span class="label">Address</span>
                  <span class="value">shan@gmail.com </span>
                </div>
              </div>
              <div>
                <div class="input_field">
                  <span class="label">Mobile No</span>
                  <span class="value">01779011690</span>
                </div>
                <div class="input_field">
                  <span class="label">CV</span>
                  <span>
                    <a class="value" href="">Click here </a>
                  </span>
                </div>
                <div class="input_field">
                  <span class="label">key</span>
                  <span class="value">1235sadsd</span>
                </div>
              </div>
            </section>
          </div>
        </section>
      </section>
    </main>

    <script src="./script.js"></script>
  </body>
</html>
