
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
            <li id="home">
              <li class="sublist"> <a href="index.php">Home</a></li>
            </li>
            <li>
              <div class="trans">
                <div class="coll-menu">Employee</div>
                <ul class="list">
                  <li class="sublist"> <a href="create_employee.php">Creat</a></li>
                  <li class="sublist"> <a href="search.php">Search</a></li>
                </ul>
              </div>
            </li>
            <li>
              <div class="trans">
                <div class="coll-menu">More</div>
                <ul class="list">
                  <li class="sublist"><a href="tabs.php">Multiple Tabs</a></li>
                  <li class="sublist"><a href="menu.php">Menu</a></li>
                  <li class="sublist"><a href="autocomplete.php">Autocomplete</a></li>
                  <li class="sublist"><a href="collaps.php">Collapsible Content</a></li>
                  <li class="sublist"><a href="image.php">Images</a></li>
                  <li class="sublist"><a href="slider.php">Slider</a></li>
                  <li class="sublist"><a href="tooltips.php">Tooltips</a></li>
                  <li class="sublist"><a href="popups.php">Popups</a></li>
                  <li class="sublist"><a href="links.php">Links</a></li>
                  <li class="sublist"><a href="css_properties.php">CSS Properties</a></li>
                  <li class="sublist"><a href="iframe.php">iFrames</a></li>

                </ul>
              </div>
            </li>
            <li>
              <div class="trans">
                Setting
                <ul class="list">
                </ul>
              </div>
            </li>
          </ul>
        </div>

        

        <div class="contant">
        <h1 id="page-title">Main Page Of the Website</h1>
        </div>
      </div>
    </div>

    <script src="script/script.js"></script>
  </body>
</html>
