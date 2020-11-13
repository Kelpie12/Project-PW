<?php
include("connection.php");

$id = $_POST["id"];
$sql = "delete from users where id_user = $id";

$result = $con->query($sql);

$result = $con->query("SELECT * FROM users");

$data = $result->fetch_all(MYSQLI_ASSOC);

print json_encode($data);
