<?php
include("connection.php");

$id = $_POST["id"];

$result = $con->query("update items set status = 0 where id_item = $id");

print json_encode($result ? "sukses" : "gagal");
