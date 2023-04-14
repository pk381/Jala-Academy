

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
      
        <div class="in-window">
          <div class="top">
            <div class="popone">Popup one</div>
            <div class="xbtn">
              <button class="cancle">×</button>
            </div>
          </div>

          <div class="message">
            <p id="msg">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptatum, a.
            </p>
          </div>

          <div id="btn-cancle">
            <div class="cancle-btn">
              <button class="btn-can cancle">Cancle</button>
            </div>
          </div>
        </div>

        <div class="contant">
        <h1 id="page-title">POPUPS</h1>

          <div class="tab-nav">
            <button class="btn" style="background-color: rgb(41, 236, 236)">
              ToolTips
            </button>
          </div>
          <div class="tabs">
            <div class="popups">
              <div class="btn-group">
                <button class="pop-btn">one</button>
                <button class="pop-btn">two</button>
                <button class="pop-btn">three</button>
              </div>
              <div class="btn-group">
                <button class="pop-btn">four</button>
                <button class="pop-btn">five</button>
                <button class="pop-btn">six</button>
              </div>
              <div class="btn-group">
                <button class="pop-btn">seven</button>
                <button class="pop-btn">eight</button>
                <button class="pop-btn">nine</button>
              </div>
              
              <div class="btn-group">
                <p id="name"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="script/popups.js"></script>
    <script src="script/script.js"></script>

  </body>
</html>
