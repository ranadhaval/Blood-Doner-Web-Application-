<?php
session_start();
if (isset($_SESSION['bank_name']) && $_SESSION['password_x'] == true) {
    $login = true;
}


if (!$login) {
    header("location: Blood_bank_login.php");
} else {
    header("location: Blood_bank_page.php");


}



?>