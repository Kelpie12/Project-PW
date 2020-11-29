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
            margin-top: 0px;
            height: 600px;
        }

        body {
            padding-top: 50px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="regis-content">
            <div class="regis-image">
                <figure><img src="register.png" width="300px" height="auto" style="padding-top: 100px; margin-right: 100px;"></figure>
            </div>

            <div class="regis-form">
                <h2 class="form-title" style='font-size: 2.5rem; text-align: left;'><b>Register</b></h2>
                <form method="post" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" />
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" id="username" />
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="text" name="email" id="email" />
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" />
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="conpass" id="conpass" />
                        <hr>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="register" class="form-submit" value="Register" style="margin-right: 5px;"></input>
                        <a href="./login.php"><button type="button" class="form-submit">Go to Login</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>