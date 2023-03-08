<?php


session_start();
session_unset();
session_destroy();
header("location: Blood_bank_login.php");
exit;
?>