
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $pass = $_POST['password'];

// database connection
    include 'connect.php';

    $sql = "SELECT * FROM `user` WHERE `email` LIKE '$email' AND `password` LIKE '$pass'";

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
        JALA Academy
    </div>
    <div class="container">
        Sign In
        <div class="form">           
            <form action="login.php" method="post">
                <div class="inpt">
                    <input name="email" type="email" placeholder="Email">
                    <input name="password" type="password" placeholder="password">
                </div>

                <div class="buttons">
                    <div class="reme">     
                        <input type="checkbox">
                         <p>Remember Me</p>
                    </div>
                    <button class="hov" type="submit">Sign In</button>
                </div>
            </form>
        </div>
        <div class="or">
            - OR -
        </div>

        <div class="admin">
            <button class="hov">Forget Password</button>
            <div id="a">
                <a href="/Project/admin_login.php">Admin Login</a>
            </div>
        </div>
    </div>
    
</body>
</html>
