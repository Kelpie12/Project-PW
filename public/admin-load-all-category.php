<?php
include("connection.php");

print json_encode($con->query("select * from category")->fetch_all(MYSQLI_ASSOC));
