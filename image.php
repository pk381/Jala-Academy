
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
    <link rel="stylesheet" href="style/style.css"/>
    <link rel="stylesheet" href="style/tabs.css">
    <link rel="stylesheet" href="style/image.css">
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
          <h1 id="page-title">Image</h1>

          <div class="image">
            <div class="part">
                <label for="img">Select File :</label>
                <input type="file">
            </div>
            <div class="part">
                <label for="img">File Name :</label>
                <input type="text">
            </div>

            <div class="part">
                <button>Upload</button>
            </div>

          </div>
          

        </div>


        </div>
      </div>
    </div>
  </body>
</html>
