<?php
include("./public/connection.php");
include("./public/function.php");

$id = $_POST["id"];

$_SESSION['items'] = $con->query("select * from items where id_item = $id")->fetch_all(MYSQLI_ASSOC);

if ($_SESSION['items']) {
    print json_encode("fix");
}
