<?php
include("./public/connection.php");
if (empty($_SESSION['category_ID'])) {
    $result = $con->query("select * from category");
} else {
    $result = $con->query("select * from category where id_category = $_SESSION[category_ID]");
}
print json_encode($result->fetch_all(MYSQLI_ASSOC));
