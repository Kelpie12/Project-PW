<?php
include("./public/connection.php");

$id = $_POST["id"];

$res = $con->query("delete from cart where cart_id = $id");

$USERID = $_SESSION['auth']['id_user'];

$arrayItems = $con->query("select * from items where status = 1")->fetch_all(MYSQLI_ASSOC);
$arrayCart = $con->query("select * from cart where cart_user_id = $USERID")->fetch_all(MYSQLI_ASSOC);

for ($i = 0; $i < count($arrayCart); $i++) {
    $itemNow = $arrayCart[$i]["cart_item_id"];
    $item = $con->query("select * from items where status = 1 and id_item = $itemNow")->fetch_all(MYSQLI_ASSOC);
    if ($item) {
        $thisItem = $item[0];
        $arrayCart[$i]['item'][] = $thisItem;
    }
}

print json_encode($arrayCart);
