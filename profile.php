<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<link rel="stylesheet" type="text/css" href="./assets/Semantic-UI-CSS-master/semantic.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
</script>
<script src="assets/Semantic-UI-CSS-master/semantic.min.js"></script>

<body>
    <div class="ui segment inverted">
        <div class="ui inverted pointing secondary menu">
            <a class="item active">
                <h4> Home </h4>
            </a>
            <div class="right menu">
                <a class="item">
                    <h4><?= $_SESSION['auth']['first_name_user'] . " " . $_SESSION['auth']['last_name_user'] ?></h4>
                </a>
                <a class="item">
                    <button class="button ui red" id='logout'>Logout</button>
                </a>
            </div>
        </div>
    </div>
    <div class="ui segment">
        <h2>Add my Fund</h2>
        <div class="form ui">
            <h4 id="my-money">My Money : Rp <?= $_SESSION['auth']['saldo_user'] ?> </h4>
            <div class="field">
                <div class="ui right labeled input">
                    <div class="ui label">
                        Rp
                    </div>
                    <input type="text" id='amount' placeholder="Amount">
                    <div class="label basic ui">
                        .00
                    </div>
                </div>
            </div>
            <div class="field" style="text-align: right;">
                <button class="button ui green" id="fund">Add Fund</button>
            </div>
        </div>
        <hr>
        <h2 id="my-cart"> My Cart </h2>
        <table class="ui table celled ">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Item Quantity</th>
                    <th>Item Sub Total</th>
                </tr>
            </thead>
            <tbody id="myItems"></tbody>
        </table>
    </div>
    <div class="modal ui tiny alert">
        <div class="header">Confirmation</div>
        <div class="content">
            <p id="added"> </p>
            <p style="text-align: right;"><button class="button ui green" id="ok">OK</button></p>
        </div>
    </div>
</body>
<script>
    load(0);
    loadmycart();

    function loadmycart() {
        $.ajax({
            type: "POST",
            url: "get-user-cart.php",
            dataType: "JSON",
            success: function(response) {
                $("#myItems").html("");
                let total = 0;
                response.forEach(element => {
                    let tr = `<tr> 
                        <td> ${element['item'][0]['name_item']} </td>
                        <td> Rp ${element['item'][0]['price_item']} </td>
                        <td style='text-align: right;'> ${element['cart_item_amount']} </td>
                        <td> Rp ${element['cart_item_amount'] * element['item'][0]['price_item']} </td>
                    </tr>`;
                    $("#myItems").append(tr);
                    total += element['cart_item_amount'] * element['item'][0]['price_item'];
                });
                let col = `<tr>
                <td colspan='3'>Total </td>
                <td> Rp ${total} </td>
                </tr>`;
                $("#myItems").append(col);
            }
        });
    }

    function load(id) {
        $.ajax({
            type: "POST",
            url: "add-money.php",
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(response) {
                $("#my-money").html(`My Money : Rp ${response}`);
            }
        });
    }

    $("#logout").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "reset-session.php",
            dataType: "JSON",
            success: function(response) {
                if (response == "success") {
                    document.location.href = "./header.php";
                }
            }
        });
    });

    $("#fund").click(function(e) {
        e.preventDefault();
        let id = parseFloat($("#amount").val());
        if (Number.isFinite(id)) {
            load(id);
            $("#added").html(`${id} have been added to your account`);
            $(".modal.ui").modal("show");
            $("#amount").val("");
        }
    });
    $(".modal").on("click", "#ok", function() {
        $(".modal.ui").modal("hide");
    });
</script>

</html>