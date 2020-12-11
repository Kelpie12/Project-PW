<?php
$link = "./profile.php";
if (empty($_SESSION['auth'])) {
    $link = "./LogReg_Form/Login.php";
}
