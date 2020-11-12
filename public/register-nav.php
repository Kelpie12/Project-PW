<?php
include("connection.php");
include("function.php");

if (isset($_REQUEST['register_btn'])) {
    $firstName = $_REQUEST['register_fname'];
    $lastName = $_REQUEST['register_lname'];
    $username = $_REQUEST['register_username'];
    $password = $_REQUEST['register_password'];
    $confirmPass = $_REQUEST['register_confirm'];
    $email = $_REQUEST['register_email'];
    $birthdate = $_REQUEST['register_birthdate'];

    $result = $con->query("SELECT * FROM users");
    $isAvailable = true;

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['username_user'] == $username || $row['email_user'] == $email) {
                $isAvailable = false;
            }
        }
    }

    if ($isAvailable) {
        $isSame = $confirmPass == $password;

        if ($isSame) {
            $sql = "insert into users (username_user,first_name_user,last_name_user,email_user,password_user,birthdate_user, saldo_user, status) values ('$username','$firstName','$lastName','$email','$password','$birthdate',0,1)";
            if ($con->query($sql)) {
                alert("REGISTER SUCCESS");
            } else {
                alert("REGISTER GAGAL");
            }
        } else {
            alert("PASSWORD DAN CONFIRM BERBEDA");
        }
    } else {
        alert("SUDAH ADA DATANYA");
    }
}
