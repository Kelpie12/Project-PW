<?php
session_start();
$server = "localhost";
$username = "root";
$psw = "";
$db = "uwu-shop";

$con = new mysqli($server, $username, $psw, $db);

if ($con->connect_error) {
    die("koneksi gagal : " . $con->connect_error);
}
