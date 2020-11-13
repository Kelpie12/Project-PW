<?php
include("connection.php");

$sql = "select * from users";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_all(MYSQLI_ASSOC);
}

print json_encode($data);
