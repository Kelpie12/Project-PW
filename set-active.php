<?php
session_start();
print json_encode($_SESSION['category_ID']);
