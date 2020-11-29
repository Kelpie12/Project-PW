<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="login-content">
            <div class="login-image">
                <figure><img src="login.png" width="400" height="300" style="padding-top: 30px;"></figure>
            </div>

            <div class="login-form">
                <h2 class="form-title"><b>Login</b></h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <input type="text" name="username" id="username" placeholder="Username" />
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Password" />
                        <hr>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="login" id="login" class="form-submit" value="Log in" />
                        <a href="./register.php"><button type="button" class="form-submit" style="margin-left: 5px; margin-top: 16px;">Go to Register</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>