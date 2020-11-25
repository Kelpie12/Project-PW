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
        <div class="segments ui horizontal">
            <div class="segment ui">
                <h2>Search Item</h2>
                <div class="ui icon input">
                    <select id="search-by">
                        <option value="id_item">Item ID</option>
                        <option value="name_item">Item Name</option>
                    </select>
                    <input type="text" placeholder="Search..." id='search-item'>
                </div>
                <h2>Category Filter</h2>
                <div class="cont ui vertical menu "></div>
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
                <td> ${element['id_item']} </td>
                <td> <img src='../assets/items/${element['image']}.jpg'/> </td>
                <td> ${element['name_item']} </td>
                <td> ${element['category']} </td>
                <td> Rp ${element['price_item']} </td>
                <td> <button class='delete-item button red ui' value='${element['id_item']}'> Delete </button> </td>
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

    function loadCategoryFilter() {
        $.ajax({
            type: "POST",
            url: "./admin-load-all-category.php",
            dataType: "JSON",
            success: function(response) {
                $(".cont").html("");
                printCategory(response);
            }
        });
    }

    function printCategory(response) {
        response.forEach(element => {
            let input = `<input type='checkbox' value='${element['id_category']}' class='my-item' checked='checked'> <label> ${element['name_category']} </label>`;
            let div = `<div class='checkbox ui'>${input}</div>`;
            let item = `<div class='item'> ${div} </div>`;
            $(".cont").append(item);
        });
    }

    function printFilteredItem(response, data) {
        $(".listItem").html("");
        if (data.length > 0) {
            response.forEach(element => {
                if (data.includes(element['category_id_item'])) {
                    let tr = `<tr> 
                <td> ${element['id_item']} </td>
                <td> <img src='../assets/items/${element['image']}.jpg'/> </td>
                <td> ${element['name_item']} </td>
                <td> ${element['category']} </td>
                <td> Rp ${element['price_item']} </td>
                <td> <button class='delete-item button red ui' value='${element['id_item']}' > Delete </button> </td>
            </tr>`;

                    $(".listItem").append(tr);
                }
            });
        }

    }

    $(document).ready(function() {
        loadItem();
        loadCategoryFilter();

        $(".listItem").on("click", ".delete-item", function() {
            let id = $(this).val();
            $.ajax({
                type: "POST",
                url: "./admin-delete-item.php",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    if (response == "sukses") {
                        loadItem();
                    }
                }
            });
        });

        $(".cont").on("click", '.my-item', function() {
            let test = document.querySelectorAll(".my-item");
            let data = [];
            test.forEach(element => {
                if (element.checked) {
                    data.push(element.value);
                }
            });

            $.ajax({
                type: "POST",
                url: "./admin-load-item.php",
                dataType: "JSON",
                success: function(response) {
                    printFilteredItem(response, data);
                }
            });
        });

        $("#search-item").change(function(e) {
            e.preventDefault();
            let searchBy = $("#search-by").val();
            let text = $("#search-item").val();
            let sqlCond = `${searchBy} == "${text}"`;
            if (text != "") {
                console.log(sqlCond);
            }
        });

        $("#search-by").change(function(e) {
            e.preventDefault();
            let searchBy = $("#search-by").val();
            let text = $("#search-item").val();
            let sqlCond = `${searchBy} == "${text}"`;
            if (text != "") {
                console.log(sqlCond);
            }
        });
    });
</script>

</html>