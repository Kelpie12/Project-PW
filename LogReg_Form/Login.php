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
    <a href='../header.php' style="text-align: left; font-size: 1.5rem;">
        < back to homepage </a> <div class="container">
            <div class="login-content">
                <div class="login-image">
                    <figure><img src="login.png" width="350px" height="auto" style="padding-top: 30px;"></figure>
                </div>

                <div class="login-form">
                    <h2 class="form-title"><b>Login</b></h2>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" id="username" />
                            <hr>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" />
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