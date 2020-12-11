<?php
session_start();
print json_encode(empty($_SESSION['auth']));
