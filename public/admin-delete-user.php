<?php
include("connection.php");

$id = $_POST["id"];
$sql = "update users set status = 0 where id_user = $id";

$result = $con->query($sql);

if ($result) {
    print json_encode("SUKSES");
}
