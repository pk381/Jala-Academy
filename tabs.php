
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
    <link rel="stylesheet" href="style/tabs.css">
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
        <h1 id="page-title">Tabs</h1>

          <div class="tab-nav">
            <button class="btn" onclick="openTab(this, 'one')">One</button>
            <button class="btn" onclick="openTab(this, 'two')">Two</button>
            <button class="btn" onclick="openTab(this, 'three')">Three</button>
          </div>

          <div class="tabs">
            <div id="one" class="tab">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
              eum facere, suscipit quo explicabo veritatis quasi libero
              voluptatem repudiandae magni qui ab magnam, delectus iure
              obcaecati earum impedit voluptas. Atque one one one.
            </div>
            <div id="two" class="tab">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
              eum facere, suscipit quo explicabo veritatis quasi libero
              voluptatem repudiandae magni qui ab magnam, delectus iure
              obcaecati earum impedit voluptas. Atque two two two two.
            </div>
            <div id="three" class="tab">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
              eum facere, suscipit quo explicabo veritatis quasi libero
              voluptatem repudiandae magni qui ab magnam, delectus iure
              obcaecati earum impedit voluptas. Atque three three thee.
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="script/tabs.js"></script>
    <script src="script/script.js"></script>
  </body>
</html>
