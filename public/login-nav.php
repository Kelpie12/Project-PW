<?php
include("connection.php");
include("function.php");

if (isset($_REQUEST['login_btn'])) {
    $username = $_REQUEST['login_username'];
    $password = $_REQUEST['login_password'];

    $result = $con->query("select * from users");

    $msg = "";
    $found = false;
    $correctPass = false;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['username_user'] == $username) {
                $found = true;
                if ($row['password_user'] == $password) {
                    $correctPass = true;
                    alert("SUKSES LOGIN");
                }
            }
        }
    }
}
if (isset($_REQUEST['login_forgot_btn'])) {
    alert("PINDAH PAGE");
}
