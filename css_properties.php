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
    <link rel="stylesheet" href="style/css_properties.css" />
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
          
        <h1 id="page-title">CSS Properties</h1>

          <div class="tab-nav">
            <button class="btn">Links</button>
            <button class="btn">Lables</button>
            <button class="btn">Buttons</button>
            <button class="btn">Alerts</button>
            <button class="btn">Progress Bars</button>
          </div>
          <div class="tabs links-tab">
            <div class="props">
              <a
                href="http://www.growictech.com/"
                target="_blank"
                class="link"
                id="l1"
                >Link 1</a
              >
              <a
                href="https://www.linkedin.com/"
                target="_blank"
                class="link"
                id="l2"
                >Link 2</a
              >
              <a
                href="https://www.google.co.in/"
                target="_blank"
                class="link"
                id="l3"
                >Link 3</a
              >

              <a
                href="https://www.growictech.com:2096/"
                target="_blank"
                class="link"
                id="l2"
                >Link 4</a
              >
              <a
                href="https://www.restapitutorial.com/httpstatuscodes.html"
                target="_blank"
                class="link"
                id="l3"
                >Link 5</a
              >
            </div>
            <div class="props">
              <span class="prop lables" style="background-color: #444"
                >Default</span
              >
              <span
                class="prop lables"
                style="background-color: #3c8dbc !important"
                >Primary</span
              >
              <span
                class="prop lables"
                style="background-color: #00a65a !important"
                >Success</span
              >
              <span
                class="prop lables"
                style="background-color: #00c0ef !important"
                >Info</span
              >
              <span
                class="prop lables"
                style="background-color: #f39c12 !important"
                >Warning</span
              >
              <span
                class="prop lables"
                style="background-color: #dd4b39 !important"
                >Danger</span
              >
            </div>
            <div class="props">
              <button class="prop btns" style="background-color: #444">
                Default
              </button>
              <button
                class="prop btns"
                style="background-color: #3c8dbc !important"
              >
                Primary
              </button>
              <button
                class="prop btns"
                style="background-color: #00a65a !important"
              >
                Success
              </button>
              <button
                class="prop btns"
                style="background-color: #f39c12 !important"
              >
                Warning
              </button>
              <button
                class="prop btns"
                style="background-color: #dd4b39 !important"
              >
                Danger
              </button>
            </div>
            <div class="props">
              <div class="alts">
                <div
                  class="prop alert"
                  style="background-color: #00a65a !important"
                >
                  Success! Indicates a successful or positive action.
                  <button class="alt-btn">×</button>
                </div>
                <div
                  class="prop alert"
                  style="background-color: #3c8dbc !important"
                >
                  Info! Indicates a neutral informative change or action.
                  <button class="alt-btn">×</button>
                </div>
                <div
                  class="prop alert"
                  style="background-color: #f39c12 !important"
                >
                  Warning! Indicates a warning that might need attention.
                  <button class="alt-btn">×</button>
                </div>
                <div
                  class="prop alert"
                  style="background-color: #dd4b39 !important"
                >
                  Danger! Indicates a dangerous or potentially negative action.
                  <button class="alt-btn">×</button>
                </div>
              </div>
            </div>
            <div class="props">
              <div class="barss">
                <progress
                  class="prop bars"
                  id="pr1"
                  min="0"
                  max="100"
                  value="40"
                ></progress>
                <progress
                  class="prop bars"
                  id="pr2"
                  min="0"
                  max="100"
                  value="20"
                ></progress>
                <progress
                  class="prop bars"
                  id="pr3"
                  min="0"
                  max="100"
                  value="60"
                ></progress>
                <progress
                  class="prop bars"
                  id="pr4"
                  min="0"
                  max="100"
                  value="80"
                ></progress>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="script/css_properties.js"></script>
    <script src="script/script.js"></script>

  </body>
</html>
