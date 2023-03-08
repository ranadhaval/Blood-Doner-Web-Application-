<?php
session_start();
if (isset($_SESSION['Admin_username']) && $_SESSION['Admin_password'] == true) {
    $login = true;
}


if (!$login) {
    header("location: Admin_login.php");
} else {
    header("location: Admin_page.php");


}



?>