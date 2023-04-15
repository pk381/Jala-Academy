
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
else{



  // database connection
  include 'connect.php';

  $sql = "SELECT * FROM `employee`";
  $result = mysqli_query($conn, $sql);

  $num = mysqli_num_rows($result);

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];

    $sql1 = "SELECT * FROM `employee` WHERE `first_name` LIKE '$name'";

    $result = mysqli_query($conn, $sql1);

  }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/search.css" />

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
          <div class="search">
            <form action="search.php" method="post">
              <div class="input">
                <label for="name">Name</label>
                <input name="name"type="text" />
              </div>
              <div class="input">
                <label for="name">Mobile No</label>
                <input name="number" type="text" />
              </div>

              <div class="input">
              <button type="submit" class="sear" style="background-color: green; border: 1px solid transparent">Search</button>
              <a href="" class="sear"  style="background-color: red;">Clear</a>
              </div>
            </form>
          </div>

          <table class="styled-table">
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Mobile Number</th>
              <th>Email Id</th>
              <th>Gender</th>
              <th>Birth Date</th>
              <th>Country</th>
              <th>City</th>
              <th>Action</th>
            </tr>

            <?php 
            
                while($row = mysqli_fetch_assoc($result)){

                  echo "<tr " . 'class="active-row"' .">";

                  echo "<td>" . $f_name = $row['first_name'];
                  echo "<td>" . $l_name = $row['last_name'];
                  echo "<td>" . $no = $row['mobile_no'];
                  echo "<td>" . $em = $row['email'];
                  echo "<td>" . $gen = $row['gender'];
                  echo "<td>" . $dob = $row['dob'];
                  echo "<td>" . $con = $row['country'];
                  echo "<td>" . $city = $row['city'];

                  echo '<td id="action">
                  <a class="action" href="/Project/edit.php?'. 'email='.$em . '" style="background-color: greenyellow;">Edit</a>
                  <a class="action" href="/Project/delete.php?' .'email=' .$em .'" style="background-color: rgb(238, 57, 93);">Delete</a>
                  </td>';

                  echo "</tr>";

                }
            
            ?>
          </table>
        </div>
      </div>
    </div>

    <script src="script/script.js"></script>
  </body>
</html>
