
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
          <h1>Tabs</h1>

          <div class="tab-nav">
            <button class="btn">Working Links</button>
            <button class="btn">Broken Links</button>
            <button class="btn">Image Links</button>
            <button class="btn">Status Codes</button>
          </div>
          <div class="tabs links-tab">
            <div class="working">
              <a
                href="https://www.workinglinks.co.uk/"
                target="_blank"
                class="link"
                id="l1"
                >Link 1</a
              >
              <a
                href="https://www.google.co.in/"
                target="_blank"
                class="link"
                id="l2"
                >Link 2</a
              >
              <a
                href="https://jalatechnologies.com/"
                target="_blank"
                class="link"
                id="l3"
                >Link 3</a
              >
            </div>

            <div class="working">
              <a
                href="https://magnus.jalatechnologies.com/Home/www.brokenlinkcheck.com/"
                target="_blank"
                class="link"
                id="l1"
                >Link 1</a
              >
              <a
                href="https://magnus.jalatechnologies.com/Home/www.brokenlinkcheck.com/"
                target="_blank"
                class="link"
                id="l2"
                >Link 2</a
              >
              <a
                href="https://magnus.jalatechnologies.com/Home/www.brokenlinkcheck.com/"
                target="_blank"
                class="link"
                id="l3"
                >Link 3</a
              >
            </div>

            <div class="working">
              <a
                href="http://www.growictech.com/"
                target="_blank"
                class="link"
                id="l1"
                ><img
                  src="growic.jpg"
                  alt=""
                  srcset=""
                  width="100"
                  height="100"
              /></a>
              <a
                href="https://www.linkedin.com/"
                target="_blank"
                class="link"
                id="l2"
                ><img
                  src="linkedin.png"
                  alt=""
                  srcset=""
                  width="100"
                  height="100"
              /></a>
              <a
                href="https://google.co.in"
                target="_blank"
                class="link"
                id="l3"
                ><img
                  src="google.png"
                  alt=""
                  srcset=""
                  width="100"
                  height="100"
              /></a>
              <a
                href="https://jalatechnologies.com/"
                target="_blank"
                class="link"
                id="l3"
                ><img src="jala.png" alt="" srcset="" width="100" height="100"
              /></a>
            </div>

            <div class="working">
              <a
                href="https://www.restapitutorial.com/httpstatuscodes.html"
                target="_blank"
                class="link"
                id="l1"
                >200</a
              >
              <a
                href="/ErrorHandler/RedirectPermanently"
                target="_blank"
                class="link"
                id="l1"
                >301</a
              >
              <a
                href="/ErrorHandler/NotFound"
                class="link"
                target="_blank"
                id="l2"
                >404</a
              >
              <a
                href="/ErrorHandler/InternalServerError"
                target="_blank"
                class="link"
                id="l3"
                >500</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="script/links.js"></script>
    <script src="script/script.js"></script>

  </body>
</html>
