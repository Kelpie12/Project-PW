<?php

function alert($msg)
{
    print("<script> alert('$msg') </script>");
}

function checkExtension($photo)
{
    $imageFileType = strtolower(pathinfo($photo['name'], PATHINFO_EXTENSION));

    $extensions_arr = ["jpg"];

    return in_array($imageFileType, $extensions_arr);
}
