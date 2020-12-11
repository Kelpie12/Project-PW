<?php
include("../public/login-nav.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../assets/Semantic-UI-CSS-master/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
    </script>
    <script src="assets/Semantic-UI-CSS-master/semantic.min.js"></script>

    <title>Login</title>
    <style>
        .login-content,
        .login-form {
            animation: fadeInAnimation ease 3s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }

        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <a href="../header.php" style="text-align:left; font-size: 1.1em;">
        < Back To Homepage</a> <div class="container">
            <div class="login-content">
                <div class="login-image">
                    <figure><img src="login.png" width="400" height="300" style="padding-top: 30px;"></figure>
                </div>
                <div class="login-form">
                    <form method="POST" class="ui form" id="login-form" style="padding-top: 110px;">
                        <h2><b>Login</b></h2>
                        <div class="field">
                            <input type="text" name="login_username" id="login_username" placeholder="Username" />
                        </div>
                        <div class="field">
                            <input type="password" name="login_password" id="login_password" placeholder="Password" />
                        </div>
                        <button type="submit" name="login_btn" id="login" class="ui button">Login</button>
                        <a href="./Register.php" type="button" class="ui button" style="margin-left: 5px;">Go to Register</a>
                    </form>
                </div>
            </div>
            </div>
</body>

</html>