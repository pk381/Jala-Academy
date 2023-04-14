
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
else{

  include 'connect.php';

  if($_SERVER['REQUEST_METHOD'] == 'GET'){

   

    if(!isset($_GET['email'])){
        header("location: /Project/search.php");
    }

    $email = $_GET["email"];

    $sql = "DELETE FROM `employee` WHERE `employee`.`email` = '$email'";

    $result = mysqli_query($conn, $sql);

    if($result){

       header("location: /Project/search.php");
      
    }

    }
}

?>