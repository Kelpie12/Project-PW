<?php
include("connection.php");
include("function.php");

if (isset($_POST["add-item"])) {
    $name = $_POST["item-name"];
    $price = $_POST["item-price"];
    $category_ID = $_POST["item-category"];
    $photo = $_FILES['item-photo'];
    $condition = checkExtension($photo);
    $itemPic = basename($photo['name'], ".jpg");
    if ($condition) {
        $result = $con->query("insert into items (name_item, category_id_item, price_item, status, image) values ('$name', $category_ID, $price, 1, '$itemPic')");
        if ($result) {
            $target_dir = "../assets/items/" . $photo['name'];
            move_uploaded_file($photo['tmp_name'], $target_dir);
            alert("Success adding new item");
        }
    }
}

if (isset($_POST["add-category"])) {
    $name = $_POST["category-name"];

    $result = $con->query("insert into category (name_category) values ('$name')");
    if ($result) {
        alert("Success adding new category");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add New Item</title>
</head>
<link rel="stylesheet" href="../Semantic/semantic.min.css">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<style>
    .uwu {
        font-family: 'Permanent Marker',
            cursive;
    }

    .remove-arrow::-webkit-outer-spin-button,
    .remove-arrow::-webkit-inner-spin-button {
        -webkit-appearance: none;
        -moz-appearance: textfield;
        margin: 0;
    }
</style>

<body>
    <div class="segments ui">
        <div class="ui segment inverted">
            <div class="ui secondary pointing menu inverted">
                <a href="#" class="item uwu"> UWU </a>
                <a href="admin-list-user.php" class="item"> Users </a>
                <a href="admin-list-item.php" class="item"> Shops Item </a>
                <a href="admin-insert-item.php" class="item active">Add New Item</a>
            </div>
        </div>
    </div>
    <div class="segments horizontal ui">
        <div class="segment ui">
            <h2>Insert New Item</h2>
            <form class="ui form" enctype="multipart/form-data" method="POST">
                <div class="field">
                    <label>Item Name</label>
                    <input type="text" name='item-name' id='item-name'>
                </div>
                <div class="field">
                    <label>Item Category</label>
                    <select name="item-category" id="item-category"></select>
                </div>
                <div class="field">
                    <label>Item Price</label>
                    <input type="number" name='item-price' id='item-price' class='remove-arrow'>
                </div>
                <div class="field">
                    <label>Item Picture</label>
                    <input type="file" name="item-photo" id='item-photo'>
                </div>
                <div class="field">
                    <input type="submit" value="Add" id='add-item' name='add-item' class='ui button black'>
                </div>
            </form>
        </div>

        <div class="segment ui">
            <form class="ui form" enctype="multipart/form-data" method="POST">
                <h2>Insert New Category</h2>
                <div class="field">
                    <label>Category Name</label>
                    <input type="text" name='category-name'>
                </div>
                <div class="field">
                    <input type="submit" value="Add" name='add-category' class='ui button black'>
                </div>
            </form>
        </div>
    </div>

</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../Semantic/semantic.min.js"></script>
<script src="./function.js"></script>

<script>
    function printCategoryOptions(response) {
        response.forEach(element => {
            let option = `<option value= ${element['id_category']}> ${element['name_category']}</option>`;
            $("#item-category").append(option);
        });
    }

    function loadCategory() {
        $.ajax({
            type: "POST",
            url: "admin-load-all-category.php",
            dataType: "JSON",
            success: function(response) {
                $("#item-category").html("");
                printCategoryOptions(response);
            }
        });
    }

    $(document).ready(function() {
        loadCategory();
    });
</script>