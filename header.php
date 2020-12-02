<?php
include("./public/connection.php");
include("./public/function.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="./assets/Semantic-UI-CSS-master/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
    </script>
    <script src="assets/Semantic-UI-CSS-master/semantic.min.js"></script>

</head>

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
                                <a href="#">Sign In</a>
                                <a href="#">Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="banner_container">
        <div id="banner_left">
            <img src="./assets/left.png" />
        </div>

        <div id="rotator1_div"></div>

        <div id="banner_right">
            <img src="./assets/right.png" />
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


    <script>
        var rotator1imgs = new Array("assets/SmallImage/Univ/pexels-andrea-piacquadio-2672979.jpg", "assets/SmallImage/Univ/pexels-andrea-piacquadio-3775539.jpg", "assets/SmallImage/Univ/pexels-andrea-piacquadio-3775568.jpg");
        var rotator1lnks = new Array("", "");
        var rotator1alt = new Array("banner1.jpg", "banner2.jpg", "banner3.jpg");
        var rotatorHtml = "";
        var endJs = "";

        for (var img in rotator1imgs) {
            var thisImg = new Image();
            thisImg.src = rotator1imgs[img];
        }
        var rotator1imgCt = 2;
        var rotator1currentAd = 0;
        var target = "";
        var rotator1banner = document.getElementById('rotator1');
        var rotator1link = document.getElementById('rotator1adLink');

        function rotator1cycle() {
            var rotatorHtml = "";
            var endJs = "";
            if (rotator1currentAd == rotator1imgCt) {
                rotator1currentAd = 0;
            }

            if (rotator1lnks[rotator1currentAd] != "") {
                rotatorHtml += '<a href="./' + rotator1lnks[rotator1currentAd] + '" id="rotator1adLink"  target="_blank">';
                endJs = "</a>";
            }

            document.getElementById("banner_left").addEventListener("click", function() {
                if (rotator1currentAd == 0) {
                    rotator1currentAd = rotator1imgCt;
                } else {
                    rotator1currentAd--;
                }
                rotatorHtml = '<img src="./' + rotator1imgs[rotator1currentAd] + '" alt = "' + rotator1alt[rotator1currentAd] + '" id="rotator1">' + endJs;
                document.getElementById("rotator1_div").innerHTML = rotatorHtml;

            });

            document.getElementById("banner_right").addEventListener("click", function() {
                if (rotator1currentAd == rotator1imgCt) {
                    rotator1currentAd = 0;
                } else {
                    rotator1currentAd++;
                }
                rotatorHtml = '<img src="./' + rotator1imgs[rotator1currentAd] + '" alt = "' + rotator1alt[rotator1currentAd] + '" id="rotator1">' + endJs;
                document.getElementById("rotator1_div").innerHTML = rotatorHtml;

            });

            rotatorHtml += '<img src="./' + rotator1imgs[rotator1currentAd] + '" alt = "' + rotator1alt[rotator1currentAd] + '" id="rotator1">' + endJs;
            document.getElementById("rotator1_div").innerHTML = rotatorHtml;
            rotator1currentAd++;
            window.setTimeout(rotator1cycle, 5000);
        }
        rotator1cycle();
    </script>
</body>

</html>