<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
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
                    <a class="item">
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
    <div class="ui compact segment" style="margin-left:2vw;">
        <h2>Filter</h2>
        <div class="ui checkbox">
            <input type="checkbox" class="selector_category" value="1" id="cb1">
            <label>T-Shirt</label>
        </div>
        <div class="ui checkbox">
            <input type="checkbox" class="selector_category" value="2" id="cb2">
            <label>Jacket</label>
        </div>
        <div class="ui checkbox">
            <input type="checkbox" class="selector_category" value="3" id="cb3">
            <label>Hoodie</label>
        </div>
        <br>
        <div class="ui checkbox">
            <input type="checkbox" class="selector_category" value="4" id="cb4">
            <label>Long Pants</label>
        </div>
        <div class="ui checkbox">
            <input type="checkbox" class="selector_category" value="5" id="cb5">
            <label>Short Pants</label>
        </div>
        <div class="ui checkbox">
            <input type="checkbox" class="selector_category" value="6" id="cb6">
            <label>Leggings</label>
        </div>
        <br><br>

        <input type="hidden" id="hidden_minimum_price" value="0" />
        <input type="hidden" id="hidden_maximum_price" value="2000000" />
        <div id="price_range">
            <div class="ui right labeled input">
                <label for="amount" class="ui label">$</label>
                <input type="number" placeholder="Min Price" id="minprice">
                <div class="ui basic label">.00</div>
            </div><br><br>
            <div class="ui right labeled input">
                <label for="amount" class="ui label">$</label>
                <input type="number" placeholder="Max Price" id="maxprice">
                <div class="ui basic label">.00</div>
            </div>
        </div>
        <br><br>

        <button class="ui black button" id="btnFilter">Go!</button>
        <button class="ui basic button" id="btnClear">Clear</button>
    </div>
    <div class="segment ui myCards" style="width:96vw;margin-left:2vw;margin-bottom:10vh;">

    </div>
    <br><br>
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

<script src="./public/function.js"></script>
<script>
    printCategoryForCards();
    loadCards();

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
                        Rp ${element['price_item']}
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

        $("body").on("click", ".image", function() {
            let id = ($(this).attr("id"));
            $.ajax({
                type: "POST",
                url: "user-detail.php",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    if (response == 'fix') {
                        document.location.href = "./detail.php";
                    }
                }
            });
        });

        $('#btnClear').click(function() {
            $("#cb1").prop("checked", false);
            $("#cb2").prop("checked", false);
            $("#cb3").prop("checked", false);
            $("#cb4").prop("checked", false);
            $("#cb5").prop("checked", false);
            $("#cb6").prop("checked", false);
            $("#maxprice").val("");
            $("#minprice").val("");
            printCategoryForCards();
            loadCards();
        });

        $("#btnFilter").click(function() {
            var action = "fetch_data";
            var minimum_price = $('#minprice').val();
            var maximum_price = $('#maxprice').val();

            // alert(category);
            if (minimum_price == "") {
                minimum_price = 0;
            }
            if (maximum_price == "") {
                maximum_price = 2000000;
            }
            // alert(minimum_price+", "+maximum_price);
            if (minimum_price > maximum_price) {
                alert('Min Price can not be higher than the Max Price');
            } else {
                $(".myCards").html("");
                let c = `<div style='margin-top: 30px'>
                    <h2> Filter Result </h2>
                        <div class="ui link cards">
                            <div class='five column grid ui filtered'>
                            </div>
                        </div>
                    </div>`;
                $(".myCards").append(c);
                var category = get_filter();
                // alert(category);
                $.ajax({
                    url: "load-shop-filter.php",
                    method: "POST",
                    data: {
                        action: action,
                        minimum_price: minimum_price,
                        maximum_price: maximum_price,
                        category: category,
                    },
                    success: function(response) {
                        $(`.filtered`).append(response);
                    },
                });
            }

        });

        function get_filter() {
            var filter = [];
            $(".selector_category:checked").each(function() {
                filter.push($(this).val());
            });
            return filter;
        }

    });
</script>

</html>