<?php
session_start();
unset($_SESSION['category_ID']);

if (!empty($_GET['q'])) {
    $_SESSION['category_ID'] = $_GET["q"];
}
