<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<link rel="stylesheet" href="../assets/Semantic-UI-CSS-master/semantic.min.css">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<style>
    .uwu {
        font-family: 'Permanent Marker',
            cursive;
    }
</style>

<body>
    <div class="ui segment inverted">
        <div class="ui secondary pointing menu inverted">
            <a href="#" class="item uwu"> UWU </a>
            <a href="admin-list-user.php" class="item "> Users </a>
            <a href="admin-list-item.php" class="item"> Shops Item </a>
            <a href="admin-insert-item.php" class="item ">Add New Item</a>
            <a href="admin-show-user-report.php" class="item active">Report</a>
            <div class="right menu">
                <div class="item"><button class="button red ui "><a href="../header.php" style="color:white;">Log Out</a></button></div>
            </div>
        </div>
    </div>
    <div class="segment ui">
        <h1>Search User</h1>
        Username :
        <select name="users" id="users" class='ui dropdown myuser'></select>
    </div>
    <div class="segment ui">
        <h1>User Report</h1>
        <div class="user-report">

        </div>
    </div>
</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "admin-load-all-user.php",
            dataType: "JSON",
            success: function(response) {
                $("#users").html();
                response.forEach(element => {
                    let user = `<option value=${element['id_user']}> ${element['username_user']} </option>`;
                    $("#users").append(user);
                });
            }
        });

        $(".user-report").on("click", "button", function() {
            alert($(this).val());
        });

        $(".segment").on("change", "#users", function() {
            $(".user-report").html("");
            let id = $("#users").val();
            $.ajax({
                type: "POST",
                url: "admin-get-user-report.php",
                data: {
                    id: id,
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.length > 0) {
                        let data = [];
                        $(".user-report").html("");
                        let index = 1;
                        response.forEach(element => {
                            if (!data.includes(element['id_htrans'])) {
                                data.push(element['id_htrans']);
                                let div = `<div class='${element['id_htrans']}'> <h1> Order #${index} </h1> </div>`;
                                $(".user-report").append(div);
                                let item = `<div><h4>${element['item']['name_item']}</h4></div>`;
                                $(`.${element['id_htrans']}`).append(item);
                                index++;
                            } else {
                                let item = `<div><h4>${element['item']['name_item']}</h4></div>`;
                                $(`.${element['id_htrans']}`).append(item);
                            }
                        });

                        data.forEach(element => {
                            $(`.${element}`).append(`<div style='text-align: right;'> <button class='${element} green ui button' value = ${element} > Accept Order </button></div>`);
                        });
                    } else {
                        $(".user-report").append("No Order Yet :(");
                    }
                }
            });
        });
    });
</script>

</html>