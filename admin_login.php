<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $pass = $_POST['password'];

// database connection
    include 'connect.php';

    $sql = "SELECT * FROM `admin` WHERE `email` LIKE '$email' AND `password` LIKE '$pass'";

    $result = mysqli_query($conn, $sql);

    $result = mysqli_fetch_assoc($result);

    if($pass == $result['password'] && $email == $result['email']){

        session_start();
        $_SESSION['loggedin'] = true;
        header("location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
</head>
<body>
    <div class="head">
        MAGNUS
    </div>
    <div class="container">
        
        Admin - SignIn
        <div class="form">
            <form action="admin_login.php" method="post">
                <div class="inpt">
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="password">
                </div>

                <div class="buttons">
                    <div class="reme">     
                        <a id="back" href="/Project/login.php">Back</a>
                    </div>
                    <button type = "submit" class="hov">Sign In</button>
                </div>
            </form>
        </div>

        
    </div>
    
</body>
</html>
