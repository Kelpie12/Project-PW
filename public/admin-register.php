<?php
include("connection.php");


$username = $_REQUEST['register_username'];
$first = $_REQUEST['register_fname'];
$last = $_REQUEST['register_lname'];
$email = $_REQUEST['register_email'];
$password = $_REQUEST['register_password'];
$birthdate = $_REQUEST['register_birthdate'];

$hashedPass = password_hash(hash('sha512', $password), PASSWORD_DEFAULT);

$con->query("insert into user (username_user, first_name_user, last_name_user, email_user, password_user, birthdate_user, saldo_user, status) values ('$username','$first','$last','$email','$hashedPass','$birthdate',0,1)");


/* 
    to verify password user 
    while($row = $res->fetch_assoc()) {
        if (password_verify(hash('sha512', $password), $row['password_user'])) {
            return true;
        }
    }
*/
