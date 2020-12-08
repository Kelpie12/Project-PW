<?php
include("./public/connection.php");

$ID = $_SESSION['items'][0]['category_id_item'];
$myID = $_SESSION['items'][0]['id_item'];
print json_encode($con->query("select * from items where category_id_item = $ID and id_item <> $myID")->fetch_all(MYSQLI_ASSOC));
