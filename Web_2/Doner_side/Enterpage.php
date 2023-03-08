<?php
session_start();
if (isset($_SESSION['Mobile'])) {
    $login = true;
}


if (!$login) {
    header("location: Login_page.php");
} else {
    header("location: Doner_Homepage.php");


}



?>