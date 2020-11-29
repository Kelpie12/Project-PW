<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Register</title>

    <style>
        .container{
            margin-top: 0px;
            height: 600px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="regis-content">
            <div class="regis-image">
                <figure><img src="register.png" width="400" height="300" style="padding-top: 100px; margin-right: 100px;"></figure>
            </div>

            <div class="regis-form">
                <h2 class="form-title"><b>Register</b></h2>
                <form method="post" class="register-form" id="login-form">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Your Name"/>
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" id="username" placeholder="Username"/>
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="email" placeholder="E-mail"/>
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Password"/>
                        <hr>
                    </div>                    
                    <div class="form-group">
                        <input type="password" name="conpass" id="conpass" placeholder="Confirm Password"/>
                        <hr>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="register" class="form-submit" value="Register" style="margin-right: 5px;"></input>
                        <a href="./login.php" ><button type="button" class="form-submit">Go to Login</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>