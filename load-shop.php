<?php
include("./public/connection.php");

$result = $con->query("select * from items");

if ($result) {
    print json_encode($result->fetch_all(MYSQLI_ASSOC));
}
