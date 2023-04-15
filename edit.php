
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
else{

  include 'connect.php';

  $first = "";
  $last = "";
  $email = "";
  $mobile_no = "";
  $date = "";
  $gender = "";
  $address = "";
  $country = "";
  $city = "";

  if($_SERVER['REQUEST_METHOD'] == 'GET'){


    if(!isset($_GET['email'])){
        header("location: /Project/search.php");
    }

    $email = $_GET["email"];
  

    $sql = "select * from employee where `email` like '$email'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    $num = mysqli_num_rows($result);

    $first = $row['first_name'];
    $last = $row['last_name'];
    $email = $row['email'];
    $mobile_no = $row['mobile_no'];
    $date = $row['dob'];
    $gender = $row['gender'];
    $address = $row['address'];
    $country = $row['country'];
    $city = $row['city'];

  }
  else if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $skill = $_POST['skill'];

    $sql = "UPDATE `employee` SET `first_name` = '$first', `last_name` = '$last', `mobile_no` = '$mobile_no', `dob` = '$date', `gender` = '$gender', `address` = '$address', `country` = '$country', `city` = '$city'  WHERE `employee`.`email` = '$email'";
    $result = mysqli_query($conn, $sql);

    if($result){
      header("location: /Project/search.php");
    }
    else{
      echo "alert('Somthing went wrong')";
    }

  }
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/create_employee.css" />
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
        
      <?php include 'side.php';?>

        <div class="contant">
          <form action="edit.php" method="post">
            <div class="message">
              <h1>Employee</h1>
            </div>

            <div class="mb3">
              <div class="input">
                <label  for="name"> First Name</label>
                <input name="first" type="text" value="<?php echo $first ?>" />
              </div>

              <div class="input">
                <label for="last">Last Name</label>
                <input name="last" type="text" value="<?php echo $last ?>" />
              </div>

              <div class="input">
                <label for="email">Email</label>
                <input name="email" type="email" value="<?php echo $email ?>" />
              </div>
            </div>

            <div class="mb3">
              <div class="input">
                <label for="phone">Mobile Number</label>
                <input name="mobile_no" type="text" value="<?php echo $mobile_no ?>" />
              </div>

              <div class="input">
                <label for="date">Date Of Birth</label>
                <input name="date" type="date" value="<?php echo $date ?>" />
              </div>

              <div class="input">
                <div class="gender">
                  <label for="gender">Gender</label>
                  <h3>Male</h3>
                  <input value="male" class="radiobtn" type="radio" name="gender" />
                  <h3>Female</h3>
                  <input value="female" class="radiobtn" type="radio" name="gender" />
                </div>
              </div>
            </div>

            <div class="mb3 address">
              <div class="input">
                <label for="address">Address</label>
                <textarea  name="address" id="" cols="30" rows="10" value="<?php echo $address ?>"></textarea>
              </div>
            </div>

            <div class="mb3">
              <div class="input">
                <label for="country">Country</label>
                <input name="country"  type="text"  value="<?php echo $country ?>"/>
              </div>

              <div class="input">
                <label for="city">City</label>
                <input name="city" type="text"  value="<?php echo $city ?>"/>
              </div>
            </div>

            <div class="mb3 skill">

              <div>Skills</div>

              <div class="skills">
                <div class="input">
                  <input name="skill" type="checkbox" value="AWS" />
                  <label for="country">AWS</label>
                </div>

                <div class="input">
                  <input name="skill" type="checkbox" value="DepOps" />
                  <label for="country">DevOps</label>
                </div>
                <div class="input">
                  <input name="skill" type="checkbox" value="Full Stack Developer" />
                  <label for="country">Full Stack Developer</label>
                </div>
                <div class="input">
                  <input name="skill" type="checkbox" value="Middleware" />
                  <label for="country">Middleware</label>
                </div>
                <div class="input">
                  <input name="skill" type="checkbox" value="QA-Automation" />
                  <label for="country">QA-Automation</label>
                </div>
                <div class="input">
                  <input name="skill" type="checkbox" value="WebServies" />
                  <label for="country">WebServices</label>
                </div>
              </div>
            </div>

            <div class="mb3 msg"></div>

            <div id="btn">
            <button type="submit" class="formbtn" style="background-color: green; border: 1px solid transparent">Save</button>
            <a href="/Project/search.php" class="formbtn" style="background-color: blue;">Cancle</a>
            </div>
          </form>
        </div>
      </div>  
    </div>

    <script src="script/script.js"></script>
  </body>
</html>
