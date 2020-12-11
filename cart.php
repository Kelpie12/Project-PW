<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<link rel="stylesheet" type="text/css" href="./assets/Semantic-UI-CSS-master/semantic.min.css">
<link rel="stylesheet" type="text/css" href="./assets/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
</script>
<script src="assets/Semantic-UI-CSS-master/semantic.min.js"></script>
<link rel="stylesheet" href="./assets/cart_css.css">

<body>
    <div class="segment ui cart-page">
        <h1 style="margin-left: 15vw;">Cart</h1>
        <hr>
        <br>
        <table class="center">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody class="my-cart">

            </tbody>
        </table>
        <div class="total-price">
            <table class="right">
                <tr>
                    <td>Total</td>
                    <td id="total">Rp 0</td>
                </tr>
            </table>
        </div>
        <div class="button">
            <button type="submit" id='checkout'>Check Out</button>
        </div>
    </div>
    <div class="ui modal tiny delete">
        <div class="header">Notification</div>
        <div class="content">
            <p>Item removed from your cart</p>
        </div>
    </div>
    <div class="ui modal tiny alert">
        <div class="header">Notification</div>
        <div class="content">
            <p>You Havent Logged In Yet Please Log In First</p>
            <p><button class="button ui green" id='login'>Log In</button></p>
        </div>
    </div>
</body>
<script>
    printAll();
    $("#login").click(function(e) {
        e.preventDefault();
        document.location.href = "./LogReG_Form/Login.php";
    });
    $.ajax({
        type: "POST",
        url: "get-data.php",
        dataType: "JSON",
        success: function(response) {
            if (response) {
                $(".ui.modal.alert").modal("show");
            }
        }
    });
    $("#checkout").click(function(e) {
        e.preventDefault();
        document.location.href = "./checkout.php";
    });

    function printAll() {
        $.ajax({
            type: "POST",
            url: "get-user-cart.php",
            dataType: "JSON",
            success: function(response) {
                print(response);
            }
        });
    }

    function print(response) {
        $(".my-cart").html("");
        let total = 0;
        response.forEach(element => {
            let tr = `<tr>
                    <td>
                        <div class="cart-info">
                            <img src="./assets/items/${element['item'][0]['image']}.jpg" style='width: 150px; height: auto;'>
                            <div>
                                <p style='font-size: 1.3rem;'>${element['item'][0]['name_item']}</p>
                                <small>Price: Rp ${element['item'][0]['price_item']} </small>
                                <br>
                                <button id='delete' cartID = '${element['cart_id']}'><i class='trash icon'></i></button>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" min=0 value="${element['cart_item_amount']}" cartID = '${element['cart_id']}' class='userCartAmount' style='width: 100px; height: 50px; font-size: 1.1rem;'></td>
                    <td style='font-size: 1.2rem;'>Rp ${element['item'][0]['price_item'] * element['cart_item_amount']}</td>
                </tr>`;
            total += element['item'][0]['price_item'] * element['cart_item_amount'];
            $(".my-cart").append(tr);
        });
        $("#total").html("Rp " + total);
    }

    $("body").on("click", '#delete', function() {
        $(".ui.modal.delete").modal("show");
        let id = ($(this).attr("cartID"));
        $.ajax({
            type: "POST",
            url: "delete-cart.php",
            data: {
                id: id,
            },
            dataType: "JSON",
            success: function(response) {
                print(response);
            }
        });
    });

    $("body").on("change", ".userCartAmount", function() {
        let id = ($(this).attr("cartID"));
        let val = $(this).val();

        $.ajax({
            type: "POST",
            url: "update-cart.php",
            data: {
                id: id,
                val: val
            },
            dataType: "JSON",
            success: function(response) {
                print(response);
            }
        });
    });
</script>

</html>