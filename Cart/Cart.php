<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="cart_css.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous">
    </script>
    <script src="assets/Semantic-UI-CSS-master/semantic.min.js"></script>
    <title>Cart</title>
</head>
<body>
    <div class="small-container cart-page">
        <h1>Cart</h1> <hr>
        <br>
        <table class="center">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="2.jpg">
                        <div>
                            <p>Reds Printed Tshirt</p>
                            <small>Price: Rp 50.000,00</small>
                            <br>
                            <div class="dlt_btn" role="button" tabindex="0"></div>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rp50.000,00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="2.jpg">
                        <div>
                            <p>Reds Printed Tshirt</p>
                            <small>Price: Rp 50.000,00</small>
                            <br>
                            <div class="dlt_btn" role="button" tabindex="0"></div>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rp50.000,00</td>
            </tr>
        </table>
        <div class="total-price">
            <table class="right">
                <tr>
                    <td>Total</td>
                    <td>$50.00</td>
                </tr>
            </table>
        </div>
        <div class="button">
            <button type="submit">Check Out</button>
        </div>
    </div>
</body>
</html>