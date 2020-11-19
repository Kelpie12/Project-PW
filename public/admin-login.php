<?php
include("connection.php");
$username = $_REQUEST['login_username'];
$password = $_REQUEST['login_password'];


$data = $con->query("select * from users where username='$username'");

$valid = false;

if ($data) {
    while ($row = $data->fetch_assoc()) {
        if (password_verify(hash("sha512", $password), $row['password_user'])) {
            $valid =  true;
        }
    }
}

if ($valid) {
    header("location: user.php");
} else {
    header("location: login.php");
}

/* 
    if (password_verify(hash('sha512', $password), $row['password_user'])) {
        return true;
    }
*/