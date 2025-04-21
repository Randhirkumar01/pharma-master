<?php

include('server.php'); 
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/FavIcon.jpg" type="image/x-icon">

    <title>login</title>



    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">


        <div class="container">
            <div class="site-logo">
                <a href="index.html">pill &mdash; point</a>
            </div>
        </div>
        <div class="login-box">
            <img src="./images/Avatar.png" class="avatar">
            <h1>Login Here</h1>
            <form method="post" action="login.php">
                <?php include('errors.php'); ?>


                <p>Username</p>
                <input id="name" placeholder="Enter e-mail " type="email" name="email" required />
                <p>Password</p>
                <input id="name" placeholder="Enter Password" type="password" name="password" required />
                <input id="name" type="submit" name="login_user" value="Login" />
                <br />
                <a href=""> Forget password ?</a>
                <br>
                <a href="register_1.php">Don't have an account</a>

            </form>
        </div>


</body>

</html>