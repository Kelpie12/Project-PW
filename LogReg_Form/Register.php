<?php
include("../public/register-nav.php");
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

    <title>Register</title>

    <style>
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
            <div class="regis-content">
                <div class="regis-image">
                    <figure><img src="register.png" width="400" height="300"></figure>
                </div>

                <div class="regis-form">
                    <form method="post" class="ui form" id="login-form" style="padding-top: 100px;">
                        <h2><b>Register</b></h2>
                        <div class="two fields">
                            <div class="field">
                                <input type="text" name="register_fname" id="register_fname" placeholder="First Name" />
                            </div>
                            <div class="field">
                                <input type="text" name="register_lname" id="register_lname" placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="register_username" id="register_username" placeholder="Username" />
                        </div>
                        <div class="field">
                            <input type="password" name="register_password" id="register_password" placeholder="Password" />
                        </div>
                        <div class="field">
                            <input type="password" name="register_confirm" id="register_confirm" placeholder="Confirm Password" />
                        </div>
                        <div class="field">
                            <input type="text" name="register_email" id="register_email" placeholder="E-mail" />
                        </div>
                        <div class="field">
                            <input type="date" name="register_birthdate" id="register_birthdate" placeholder="mm/dd/yyyy" />
                        </div>
                        <button type="submit" name="register_btn" class="ui button">Register</button>
                        <a href="./Login.php" type="button" class="ui button" style="margin-left: 5px;">Go to Login</a>
                    </form>
                </div>
            </div>
            </div>
</body>

</html>