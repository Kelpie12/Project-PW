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

    .center-container {
        margin-top: 5vh;
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
        padding: 20vh 0vw;
        word-wrap: break-word;
    }

    .center-container {
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
                    <a style="margin-right:15vw;" class="item">
                        <h3 style="color:white;">UWU</h3>
                    </a>
                    <a class="item">
                        <h4>Home</h4>
                    </a>
                    <a class="item">
                        <h4>Men</h4>
                    </a>
                    <a class="item">
                        <h4>Women</h4>
                    </a>
                    <a class="item">
                        <h4>Kids</h4>
                    </a>

                    <div class="right menu">
                        <div class="ui item" style="margin-bottom:1vh;">
                            <div class="ui left search icon input">
                                <i class="search icon"></i>
                                <input type="text" name="search" placeholder="Search...">
                            </div>
                        </div>
                        <a class="ui item">
                            <div class="ui right pointing dropdown icon button" style="margin-bottom:0.5vh;">
                                <i class="user icon"></i>
                                <div class="menu">

                                    <div class="divider"></div>
                                    <div class="header">
                                        <i class="tags icon"></i>
                                        Filter by tag
                                    </div>
                                    <div class="item">
                                        <div class="ui red empty circular label"></div>
                                        Important
                                    </div>
                                    <div class="item">
                                        <div class="ui blue empty circular label"></div>
                                        Announcement
                                    </div>
                                    <div class="item">
                                        <div class="ui black empty circular label"></div>
                                        Discussion
                                    </div>
                                </div>
                            </div>
                        </a>
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
                    <p>We are a university students from ISTTS who create this website for our projects</p>

                </div>
            </center>
        </div>
        <div class="middle">
            <center>
                <h3 class="title">Our Website Feature</h3>
                <div class="menu-box">
                    <div class="border">
                        <center>
                            <div class="icon"></div>
                            <p>ABOGO BOGA</p>
                        </center>
                    </div>
                    <div class="border">
                        <center>
                            <div class="icon"></div>
                            <p>ABOGO BOGA</p>
                        </center>
                    </div>
                    <div class="border">
                        <center>
                            <div class="icon"></div>
                            <p>ABOGO BOGA</p>
                        </center>
                    </div>
                </div>
            </center>
        </div>
    </div>
    <footer>
        <div class="ui bottom fixed large menu">
            <a class="item">
                <h3>UWU-SHOP</h3>
            </a>
            <a class="item">
                <h5 class="bottom-item">About Us</h5>
            </a>
            <a class="item">
                <h5 class="bottom-item">Create Account</h5>
            </a>
            <a class="item">
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