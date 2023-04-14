
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/tabs.css" />
    <title>Magnus</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1>MAGNUS</h1>
        <a id="logout" href="/Project/logout.php">Logout</a>
      </div>
      <div class="main">

      <?php include 'side.php';?>

        <div class="contant">
        <h1 id="page-title">Menu</h1>

          <div class="tab-nav">
            <button class="btn" onclick="openMenu(this)">One</button>
            <button class="btn" onclick="openSubmenu(this)">Two</button>
          </div>

          <div class="tabs menu-tab">
            <div class="main-menu">
              <div class="menu">
                <button class="menu-btn">
                    Testing
                </button> 
                <div class="submenu">
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                </div>
              </div>

              <div class="menu">
                <button class="menu-btn">
                  JAVA
                </button> 
                <div class="submenu">
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                </div>
              </div>
              <div class="menu">
                <button class="menu-btn">
                  .Net
                </button> 
                <div class="submenu">
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                </div>
              </div>
              <div class="menu">
                <button class="menu-btn">
                  Database
                </button> 
                <div class="submenu">
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                  <div class="sub-menu"> <button class="submenu-btn"> sub-menu</button></div>
                </div>
              </div>
            </div>
            <div class="show"></div>
          </div>
        </div>
      </div>
    </div>

    <script src="script/menu.js"></script>
    <script src="script/script.js"></script>

  </body>
</html>
