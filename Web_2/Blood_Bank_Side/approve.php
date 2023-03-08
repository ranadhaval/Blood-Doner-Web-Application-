<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "blooddonerweb");
$number = $_GET['co'];
$username = $_SESSION['bank_name'];
$sql_1 = "update $username set status = 1 WHERE  mobile_number = $number ";

if (mysqli_query($connect, $sql_1) == true) {

    if (mysqli_query($connect, $sql_1) == true) {

        header("location: issue_certificate.php");
    } else {
        echo ("fail");
    }

}

?>