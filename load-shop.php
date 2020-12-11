<?php
include("./public/connection.php");

if (empty($_SESSION['category_ID'])) {
    $result = $con->query("select * from items");
} else {
    $id = $_SESSION["category_ID"];
    $result = $con->query("select * from items where category_id_item = $id");
}

if ($result) {
    print json_encode($result->fetch_all(MYSQLI_ASSOC));
}
