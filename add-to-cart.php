<?php
include("./public/connection.php");
if (!empty($_SESSION['auth'])) {
    $userID = $_SESSION['auth']['id_user'];
    $itemID = $_SESSION['items'][0]['id_item'];
    $find = $con->query("select * from cart where cart_user_id = $userID and cart_item_id = $itemID");
    if ($find->num_rows > 0) {
        $res = $con->query("update cart set cart_item_amount = cart_item_amount+1 where cart_user_id = $userID and cart_item_id = $itemID");
    } else {
        $res = $con->query("insert into cart (cart_user_id, cart_item_id) values ($userID, $itemID)");
    }

    if ($res) {
        print json_encode("fix");
    } else {
        print json_encode("failed");
    }
} else {
    print json_encode("no user");
}
