<?php
include("./connection.php");
$output = [];

$user_id = $_POST["id"];

$arrayHtrans = [];
$arrayHtrans = $con->query("select * from htrans where id_user = $user_id")->fetch_all(MYSQLI_ASSOC);

$itemArray = [];
$itemArray = $con->query("select * from items")->fetch_all(MYSQLI_ASSOC);
$sortedItemArray = [];
foreach ($itemArray as $key) {
    $sortedItemArray[$key['id_item']] = $key;
}
$index = 0;
foreach ($arrayHtrans as $key) {
    $htransID = $key['id_htrans'];
    $items = $con->query("select * from dtrans where id_htrans = $htransID")->fetch_all(MYSQLI_ASSOC);
    foreach ($items as $keyItem) {
        $output[$index] = $key;
        $output[$index]['item'] = $sortedItemArray[$keyItem['id_item']];
        $index++;
    }
}

print json_encode($output);
