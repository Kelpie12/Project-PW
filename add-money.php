<?php
include("./public/connection.php");

$money = $_POST["id"];
$id = $_SESSION['auth']['id_user'];

$result = $con->query("update users set saldo_user = $money + saldo_user where id_user = $id");

if ($result) {
    $money = $con->query("select saldo_user from users where id_user = $id");
    $money = $money->fetch_all(MYSQLI_ASSOC);

    print json_encode($money[0]['saldo_user']);
}
