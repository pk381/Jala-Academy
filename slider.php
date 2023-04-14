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
        <div class="sidebar">
          <div class="user">
            <h2>User</h2>
          </div>

          <ul class="side">
            <li id="home">Home</li>
            <li>
              <div class="trans">
                Employee
                <ul class="list">
                  <li class="sublist">Crest</li>
                  <li class="sublist">Search</li>
                </ul>
              </div>
            </li>
            <li>
              <div class="trans">
                More
                <ul class="list">
                  <li class="sublist">list</li>
                  <li class="sublist">list</li>
                  <li class="sublist">list</li>
                  <li class="sublist">list</li>
                  <li class="sublist">list</li>
                  <li class="sublist">list</li>
                  <li class="sublist">list</li>
                  <li class="sublist">list</li>
                  <li class="sublist">list</li>
                  <li class="sublist">list</li>
                </ul>
              </div>
            </li>
            <li>
              <div class="trans">
                Setting
                <ul class="list">
                  <li class="sublist">settings</li>
                  <li class="sublist">settings</li>
                  <li class="sublist">settings</li>
                </ul>
              </div>
            </li>
          </ul>
        </div>

        <div class="contant">
          <h1>Tabs</h1>

          <div class="tab-nav">
            <button class="btn" style="background-color: rgb(41, 236, 236);">Slider</button>
            
          </div>
          <div class="tabs">

            <div class="slider">
                <input type="range" min="1" max="100" value="20">
                <p></p>
            </div>

            
            
          </div>

          

        </div>
      </div>
    </div>

    <script>
            let slider = document.getElementsByClassName("slider");
            slider = slider[0].childNodes;

            slider[3].innerHTML = "Current Slider Value: " + slider[1].value;

            slider[1].addEventListener("input", ()=>{

                slider[3].innerHTML = "Current Slider Value: " + slider[1].value;
            })
            

    </script>

    <script src="script/script.js"></script>

  </body>
</html>
