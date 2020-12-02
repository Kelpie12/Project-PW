<?php
include("../public/register-nav.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Register</title>

    <style>
        .container {
            margin-top: 60px;
            height: 650px;
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
    <div class="container">
        <div class="regis-content">
            <div class="regis-image">
                <figure><img src="register.png" width="400" height="300" style="padding-top: 125px; margin-right: 100px;"></figure>
            </div>

            <div class="regis-form">
                <h2><b>Register</b></h2>
                <form method="post" class="register-form" id="login-form">
                    <div class="form-group">
                        <input type="text" name="register_fname" id="register_fname" style="width: 140px;" placeholder="First Name" />
                        <input type="text" name="register_lname" id="register_lname" style="width: 140px;" placeholder="Last Name" />
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="text" name="register_username" id="register_username" style="width: 140px;" placeholder="Username" />
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="password" name="register_password" id="register_password" placeholder="Password" />
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="password" name="register_confirm" id="register_confirm" placeholder="Confirm Password" />
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="text" name="register_email" id="register_email" placeholder="E-mail" />
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="date" name="register_birthdate" id="register_birthdate" placeholder="mm/dd/yyyy" />
                        <hr>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="register_btn" class="form-submit" value="register" style="margin-right: 5px;"></input>
                        <a href="./login.php"><button type="button" class="form-submit">Go to Login</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>