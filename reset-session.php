<?php
session_start();
unset($_SESSION['auth']);

print json_encode("success");
