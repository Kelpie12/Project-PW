<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOPS</title>
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
                    <div class="item">
                        <a style="margin-right:15vw;">
                            <h3 style="color:white;">UWU</h3>
                        </a>
                    </div>

                    <a class="active item">
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

    <div class="segment ui myCards">

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
<script src="./public/function.js"></script>
<script>
    function printCards(response) {
        response.forEach(element => {
            if (element['status'] == 1) {
                let card = ` <div class="card ui fluid">
                <div class="blurring dimmable image" id='${element['id_item']}'>
                    <div class="ui inverted dimmer">
                        <div class="content">
                            <div class="center">
                                <div class="ui primary button">Check Details</div>
                            </div>
                        </div>
                    </div>
                    <img src="./assets/items/${element['image']}.jpg">
                </div>
                <div class="content">
                    <a class="header">${element['name_item']}</a>
                    <div class="meta">
                        <span class="date" style='color: green;'>Available</span>
                    </div>
                </div>
                <div class="extra content">
                    <a>
                        <i class="money icon"></i>
                        Rp ${format(element['price_item'])}
                    </a>
                </div>
            </div>`;
                let col = `<div class='column'> ${card}</div>`;

                $(`.${element['category_id_item']}`).append(col);
            }

        });
    }

    function loadCards() {
        $.ajax({
            type: "POST",
            url: "load-shop.php",
            dataType: "JSON",
            success: function(response) {
                $(".grid").html("");
                printCards(response);
            }
        });
    }

    function printCategoryForCards() {
        $.ajax({
            type: "POST",
            url: "./public/admin-load-all-category.php",
            dataType: "JSON",
            success: function(response) {
                $(".myCards").html("");
                response.forEach(element => {
                    let category = `<div style='margin-top: 30px'>
                    <h2> ${element['name_category']} </h2>
                    <div class="ui link cards">
                    <div class='five column grid ui ${element['id_category']}'>
                     </div>
                     </div>
                    </div>`;
                    $(".myCards").append(category);
                });
            }
        });
    }

    $(document).ready(function() {
        printCategoryForCards();
        loadCards();
        $(".grid").on("click", ".image", function() {
            let id = ($(this).attr("id"));
            console.log(id);
        });
    });
</script>

</html>