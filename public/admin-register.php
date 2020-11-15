<?php
include("connection.php");


$username = $_REQUEST['username_user'];
$first = $_REQUEST['first-name-user'];
$last = $_REQUEST['last-name-user'];
$email = $_REQUEST['email-user'];
$password = $_REQUEST['password-user'];
$birthdate = $_REQUEST['birthdate_user'];

$con->query("insert into user (username_user, first_name_user, last_name_user, email_user, password_user, birthdate_user, saldo)user, status) values ()");
