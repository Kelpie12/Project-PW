<?php
include("shop-stuff.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>

<link rel="stylesheet" type="text/css" href="./assets/Semantic-UI-CSS-master/semantic.min.css">
<link rel="stylesheet" type="text/css" href="./assets/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
</script>
<script src="assets/Semantic-UI-CSS-master/semantic.min.js"></script>

<body>
    <header>
        <div class="header">
            <div class="ui inverted segment">
                <div class="ui inverted secondary pointing menu">
                    <div class="item cant">
                        <a style="margin-right:15vw;">
                            <h3 style="color:white;">UWU</h3>
                        </a>
                    </div>
                    <a class="item cant home" name='home' id='-1'>
                        <h4>Home</h4>
                    </a>
                    <a class="item" name='1' id='item1'>
                        <h4 id=1>T-Shirt</h4>
                    </a>
                    <a class="item" name='2' id='item2'>
                        <h4 id=2>Jacket</h4>
                    </a>
                    <a class="item" name='3' id='item3'>
                        <h4 id=3>Hoodie</h4>
                    </a>
                    <a class="item" name='4' id='item4'>
                        <h4 id=4>Short Pants</h4>
                    </a>
                    <a class="item" name='5' id='item5'>
                        <h4 id=5>Long Pants</h4>
                    </a>
                    <a class="item" name='6' id='item6'>
                        <h4 id=6>Leggings</h4>
                    </a>

                    <div class="right menu">
                        <div class="ui item cant" style="margin-bottom:1vh;">
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
    <div class="segment ui" style="margin-top: 5vh;">
        <div style="padding-left: 200px;">
            <div class="ui items">
                <div class="item">
                    <div class="image medium ui">
                        <img src=" ./assets/items/<?= $_SESSION['items'][0]['image'] ?>.jpg" alt="">
                    </div>
                    <div class="content">
                        <a class="header" style="font-size: 2rem; margin-top: 7px;"> <?= $_SESSION['items'][0]['name_item'] ?> </a>
                        <div class="meta" style="font-size: 1.5rem;">
                            <span> Rp <?= $_SESSION['items'][0]['price_item'] ?></span>
                        </div>
                        <div class="description" style="font-size: 1.5rem;">
                            <p>Available For Your Purchase</p>
                        </div>
                        <div class="extra">
                            <button class="button green large ui icons" id="add-to"> <i class="cart icon"></i> Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 40px; margin-bottom: 50px;">
            <h1>Things You Might Also Like</h1>
            <div class="ui five column grid link cards suggestion">
            </div>
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
    <div class="ui modal tiny confirmation">
        <div class="header">Confirmation</div>
        <div class="content">
            <p>Do You want to add <b><?= $_SESSION['items'][0]['name_item'] ?></b> to your cart ?</p>
            <p style="text-align: right;"><button class="button red ui" id="cancel">Cancel</button> <button class="button green ui" id="confirm" item_id=<?= $_SESSION['items'][0]['id_item'] ?>>Confirm</button></p>
        </div>
    </div>
    <div class="ui modal tiny test">
        <div class="header">Successfully Added</div>
        <div class="content">
            <p>Your item has been succesfully added to your cart </p>
            <p>Press OK to continue Shopping </p>
            <p style="text-align: right;"><button class="button green ui" id="OK">OK</button></p>
        </div>
    </div>
    <div class="ui modal tiny pict">
        <div class="header">Image Preview</div>
        <div class="image content">
            <center>
                <img src=" ./assets/items/<?= $_SESSION['items'][0]['image'] ?>.jpg" alt="" class="image" style="width: 450px; height: auto;">
            </center>
        </div>
    </div>
    <div class="ui modal tiny alert">
        <div class="header">No User :(</div>
        <div class="content">
            <i class="user ui"></i>
            <p>Please log in first to continue your purchase</p>
            <p style="text-align: right;"> <button class="button green ui" id="login"> Log In </button></p>
        </div>
    </div>
</body>
<script>
    $("#add-to").click(function(e) {
        e.preventDefault();
        $('.ui.modal.confirmation').modal('show');
    });
    $("#cancel").click(function(e) {
        e.preventDefault();
        $('.ui.modal.confirmation').modal('hide');
    });

    $("#login").click(function(e) {
        e.preventDefault();
        document.location.href = "./LogReg_Form/Login.php";
    });

    $("#confirm").click(function(e) {
        e.preventDefault();
        let id = $(this).attr("item_id");
        $.ajax({
            type: "POST",
            url: "add-to-cart.php",
            data: {
                id: id,
            },
            dataType: "JSON",
            success: function(response) {
                if (response == "fix") {
                    $('.ui.modal.test').modal('show');
                } else if (response == "no user") {
                    $('.ui.modal.alert').modal('show');
                } else if (response == "failed") {
                    alert("failed");
                }
            }
        });
    });

    $("#OK").click(function(e) {
        e.preventDefault();
        $('.ui.modal.test').modal('hide');
    });

    $("body").on("click", ".image", function() {
        if ($(this).attr('id')) {
            $.ajax({
                type: "POST",
                url: "user-detail.php",
                data: {
                    id: $(this).attr('id'),
                },
                dataType: "JSON",
                success: function(response) {
                    if (response == "fix") {
                        document.location.href = "./detail.php";
                    }
                }
            });
        } else {
            $('.ui.modal.pict').modal({
                blurring: true
            }).modal('toggle');
        }
    });

    $.ajax({
        type: "POST",
        url: "suggestion-item.php",
        dataType: "JSON",
        success: function(response) {
            $(".suggestion").html("");
            response.forEach(element => {
                let card = `<div class="ui fluid card">
                        <div class="image" id = ${element['id_item']}>
                            <img src="./assets/items/${element['image']}.jpg">
                        </div>
                        <div class="content">
                            <div class="header">${element['name_item']}</div>
                            <div class="meta">
                                Rp ${element['price_item']}
                            </div>
                            <div class="description">
                                
                            </div>
                        </div>
                        <div class="extra content">
                            <span style='color: green;'>
                                <i class="check icon"></i>
                                Available
                            </span>
                        </div>
                    </div>`;
                let col = `<div class='column'> ${card} </div>`;
                $(".suggestion").append(col);
            });
        }
    });
</script>

</html>