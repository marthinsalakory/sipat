<?php
include "../app_sipat/config.php";

session_start();

unset($_SESSION['login']);
unset($_SESSION['user']);

header("Location: login.php");
exit;
