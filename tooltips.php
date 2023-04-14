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
        <h1 id="page-title">Tool Tips</h1>

          <div class="tab-nav">
            <button class="btn" style="background-color: rgb(41, 236, 236)">
              ToolTips
            </button>
          </div>
          <div class="tabs">
            <div class="tooltips">
              <div class="tooltip">
                Check The Tooltip Before You Click.
                <span class="tooltiptext">Thank You For Being Here</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="script/script.js"></script>

  </body>
</html>
