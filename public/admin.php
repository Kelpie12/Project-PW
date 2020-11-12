<?php
include("connection.php");
include("function.php");
if (empty($_SESSION['auth'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>LIST USER BELUM AJAX BUT SOON WILL BE</h1>
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
        <tbody>
            <?php
            $sql = "select * from users";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?= $row['id_user'] ?></td>
                        <td><?= $row['username_user'] ?></td>
                        <td><?= $row['password_user'] ?></td>
                        <td><?= $row['saldo_user'] ?></td>
                        <td><button value='<?= $row['id_user'] ?>'> DELETE </button></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>