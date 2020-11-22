<?php
include("connection.php");
include("function.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List Item</title>
</head>

<link rel="stylesheet" href="../Semantic/semantic.min.css">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<style>
    .uwu {
        font-family: 'Permanent Marker',
            cursive;
    }

    img {
        width: 100px;
        height: auto;
    }
</style>

<body>
    <div class="segments ui">
        <div class="ui segment inverted">
            <div class="ui secondary pointing menu inverted">
                <a href="#" class="item uwu"> UWU </a>
                <a href="admin-list-user.php" class="item"> Users </a>
                <a href="admin-list-item.php" class="item active"> Shops Item </a>
            </div>
        </div>
        <div class="segment ui">
            <h2>List Item</h2>
            <table class='table ui celled black'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Item Picture</th>
                        <th>Item Name</th>
                        <th>Item Category</th>
                        <th>Item Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class='listItem'>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../Semantic/semantic.min.js"></script>
<script>
    function printItem(response) {
        $(".listItem").html("");
        response.forEach(element => {
            let tr = `<tr> 
                <td> ${element['id']} </td>
                <td> <img src='${element['image']}'/> </td>
                <td> ${element['category']} </td>
                <td> ${element['price']} </td>
                <td> <button class='delete-item button red ui' value='${element['id']}'> Delete </button> </td>
            </tr>`;

            $(".listItem").append(tr);
        });
    }

    function loadItem() {
        $.ajax({
            type: "POST",
            url: "./admin-load-item.php",
            dataType: "JSON",
            success: function(response) {
                printItem(response);
            }
        });
    }

    $(document).ready(function() {
        loadItem();

        $(".listItem").on("click", ".delete-item", function() {
            alert("delete");
        });
    });
</script>

</html>