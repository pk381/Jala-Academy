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
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="tabs.css">
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
        <h1 id="page-title">Auto Complete</h1>
          <div class="tab-nav">
            <button class="btn" onclick="choose_one(this)">Single values</button>
            <button class="btn" onclick="choose_many(this)">Multiple values</button>
          </div>
          <div class="result">
            <div class="display">
                <input id="search" type="text">
            </div>
            <div class="display" id="result">

            </div>
          </div>

          <script src="script/auto.js"></script>
          <script src="script/script.js"></script>

         
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
