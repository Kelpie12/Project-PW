<?php
include("./public/connection.php");
$arrayCart = [];
$id = $_SESSION['auth']['id_user'];
$arrayCart = $con->query("select * from cart where cart_user_id = $id")->fetch_all(MYSQLI_ASSOC);

$total = $_POST["total"];
$userMoney = $con->query("select saldo_user from users where id_user = $id")->fetch_all(MYSQLI_ASSOC);
$userMoney = $userMoney[0]['saldo_user'];

if ($userMoney >= $total) {
    $con->autocommit(false);
    $con->$userMoney -= $total;
    $result = $con->query("update users set saldo_user = $userMoney where id_user = $id");
    if ($result) {
        $date = date("d/m/Y H:i:s");
        $htrans = $con->query("insert into htrans (id_user, date_htrans, subtotal_htrans) value ($id, '$date', $total)");
        if ($htrans) {
            $lastID = $con->insert_id;
            $check = true;

            foreach ($arrayCart as $element) {
                $dtrans = $con->query("insert into dtrans (id_htrans, id_item) value ($lastID, $element[cart_item_id])");
                $check = $dtrans;
            }
            $removeFromCart = $con->query("delete from cart where cart_user_id = $id");

            if ($check) {
                $con->commit();
                $con->autocommit(true);
                print json_encode("success");
            } else {
                $con->rollback();
                $con->autocommit(true);
                print json_encode("gagal");
            }
        } else {
            print json_encode("gagal");
        }
    } else {
        print json_encode("gagal");
    }
} else {
    print json_encode("gagal");
}
