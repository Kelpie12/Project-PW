<?php
include("connection.php");
include("function.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>LIST USER</h1>
    <table border="1">
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
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
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
                    $(".listUser").html("");
                    response.forEach(element => {
                        addElement(element);
                    });

                    alert("Sukses Mendelete User");
                }
            });
        });

        function load() {
            $.ajax({
                type: "POST",
                url: "admin-load-all-user.php",
                dataType: "JSON",
                success: function(response) {
                    $(".listUser").html("");
                    response.forEach(element => {
                        addElement(element);
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
            <td><button value='${element['id_user']}' class='delete-user'> Delete </button></td>
            </tr>
            `;

            $(".listUser").append(tr);
        }
    });
</script>

</html>