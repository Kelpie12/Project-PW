<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" type="text/css" href="./assets/Semantic-UI-CSS-master/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
    </script>
    <script src="assets/Semantic-UI-CSS-master/semantic.min.js"></script>
</head>
<style>
    .title {
        background: hsla(21, 100%, 85%, 1);

        background: linear-gradient(to right, hsla(21, 100%, 85%, 1) 0%, hsla(12, 100%, 82%, 1) 25%, hsla(358, 60%, 75%, 1) 50%, hsla(348, 25%, 61%, 1) 75%, hsla(263, 6%, 43%, 1) 100%);

        background: -moz-linear-gradient(to right, hsla(21, 100%, 85%, 1) 0%, hsla(12, 100%, 82%, 1) 25%, hsla(358, 60%, 75%, 1) 50%, hsla(348, 25%, 61%, 1) 75%, hsla(263, 6%, 43%, 1) 100%);

        background: -webkit-linear-gradient(to right, hsla(21, 100%, 85%, 1) 0%, hsla(12, 100%, 82%, 1) 25%, hsla(358, 60%, 75%, 1) 50%, hsla(348, 25%, 61%, 1) 75%, hsla(263, 6%, 43%, 1) 100%);

        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#ffcdb2", endColorstr="#ffb4a2", GradientType=1);

        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .description {
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('./assets/AboutUS/pexels-andrea-piacquadio-3761504.jpg');
        background-size: cover;
        background-repeat: none;

        -ms-background-position-x: center;
        -ms-background-position-y: center;
        background-position: center center;

        max-height: 100vh;
        max-width: 75vw;
    }

    .middle {
        margin-bottom: 100vh;
    }

    .description p {
        font-size: 2rem;
        color: white;
        padding: 20vh 10vw;
        word-wrap: break-word;
    }

    .center-container {
        margin-top: 5vh;
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

    .center {
        height: 75vh;
    }

    .menu-box {
        display: flex;
        max-width: 75vw;
        justify-content: space-evenly;
    }

    .border {
        border: 1px solid black;
    }
</style>

<body>
    <header>
        <div class="header">
            <div class="ui inverted segment">
                <div class="ui inverted secondary pointing menu">

                    <div class="item">
                        <a style="margin-right:15vw;">
                            <h3 style="color:white;">UWU</h3>
                        </a>
                    </div>

                    <a class="active item">
                        <h4>Home</h4>
                    </a>
                    <a class="item">
                        <h4>T-Shirt</h4>
                    </a>
                    <a class="item">
                        <h4>Jacket</h4>
                    </a>
                    <a class="item">
                        <h4>Hoodie</h4>
                    </a>
                    <a class="item">
                        <h4>Pants</h4>
                    </a>
                    <a class="item">
                        <h4>Leggings</h4>
                    </a>
                    <div class="right menu">
                        <div class="ui item" style="margin-bottom:1vh;">
                            <div class="ui left search icon input">
                                <i class="search icon"></i>
                                <input type="text" name="search" placeholder="Search...">
                            </div>
                        </div>
                        <div class="dropdown" style="float:right;">
                            <button class="dropbtn"></button>
                            <div class="dropdown-content">
                                <a href=<?= $link ?>><?php
                                                        if (empty($_SESSION['auth'])) {
                                                            print("Sign In");
                                                        } else {
                                                            $username = $_SESSION['auth']['first_name_user'] . " ";
                                                            $username .= $_SESSION['auth']['last_name_user'];
                                                            print("Welcome, $username");
                                                        }
                                                        ?></a>
                                <a href="./cart.php">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="center-container">
        <div class="center">
            <center>
                <h3 class='title'>Who Are We ?</h3>
                <div class="description">
                    <p>We are a university students from ISTTS who create this website for our project
                        This website is meantfor educational purposes and no items are being sold
                    </p>
            </center>
        </div>
    </div>
    <footer>
        <div class="ui bottom fixed large menu">
            <a class="item" href="header.php">
                <h3>UWU-SHOP</h3>
            </a>
            <a class="item" href="about-us.php">
                <h5 class="bottom-item">About Us</h5>
            </a>
            <a class="item" href='./LogReg_Form/Register.php'>
                <h5 class="bottom-item">Create Account</h5>
            </a>
            <a class="item" href='./shop.php'>
                <h5 class="bottom-item">Home Catalog</h5>
            </a>

            <div class="right menu">
                <div class="ui item">
                    2020, Made by UWU Team
                </div>
            </div>
        </div>
    </footer>
</body>

</html>