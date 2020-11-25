<?php
include("connection.php");

//getting all the items
$arr = [];
$result = $con->query("select * from items");
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
    }
}

//getting all the category
$arrCat = [];
$result = $con->query("select * from category");
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $arrCat[$row['id_category']] = $row;
        }
    }
}

//combining category id from the items to check the name
for ($i = 0; $i < count($arr); $i++) {
    $arr[$i]["category"] = $arrCat[$arr[$i]['category_id_item']]['name_category'];
}

print json_encode($arr);
