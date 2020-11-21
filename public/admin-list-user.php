<?php
include("connection.php");
include("function.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List User</title>
</head>
<link rel="stylesheet" href="../Semantic/semantic.min.css">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<style>
    .uwu {
        font-family: 'Permanent Marker',
            cursive;
    }
</style>

<body>
    <div class="segments ui">
        <div class="ui segment inverted">
            <div class="ui secondary pointing menu inverted">
                <a href="#" class="item uwu"> UWU </a>
                <a href="admin-list-user.php" class="item active"> Users </a>
                <a href="admin-list-item.php" class="item"> Shops Item </a>
            </div>
        </div>
        <div class="segment ui">
            <h2>LIST USER</h2>
            <table class='table ui celled green'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Saldo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class='listUser'>
                </tbody>
            </table>
        </div>
    </div>
</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../Semantic/semantic.min.js"></script>
<script>
    function load() {
        $(".modal").show();
        $.ajax({
            type: "POST",
            url: "./admin-load-all-user.php",
            dataType: "JSON",
            success: function(response) {
                $(".listUser").html("");
                response.forEach(element => {
                    if (element['status'] == 1) {
                        addElement(element);
                    }
                });
            }
        });
    }

    function addElement(element) {
        let tr = `
            <tr>
            <td> ${element['id_user']}</td>
            <td> ${element['username_user']}</td>
            <td> ${element['password_user']}</td>
            <td> ${element['saldo_user']}</td>
            <td><button value='${element['id_user']}' class='delete-user button ui red'> Delete </button></td>
            </tr>
            `;

        $(".listUser").append(tr);
    }

    $(document).ready(function() {
        load();

        $(".listUser").on("click", ".delete-user", function() {
            let id = $(this).val();
            $.ajax({
                type: "POST",
                url: "admin-delete-user.php",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    if (response == "SUKSES") {
                        alert("Sukses Mendelete User");
                    }
                }
            });
            load();
        });
    });
</script>

</html>