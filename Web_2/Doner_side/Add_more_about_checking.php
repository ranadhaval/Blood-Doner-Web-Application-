<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $donor_name = trim($_POST["Doner_name"]);
    $b = trim($_POST["Blood_Quantity"]);
    $Blood_Quantity = number_format($b);
    $Time = date('m/d/Y', time());
    $place = trim($_POST["place"]);
    $Mobile = $_SESSION['Mobile'];
    $Adhar = $_SESSION['Adhar'];
    $b = trim($_POST["bank"]);
    $bank = "$b";
    $value = 0;
    $connect = mysqli_connect("localhost", "root", "", "blooddonerweb");


    $sql_1 = "update doner set bank = '$bank' WHERE  mobile_number = $Mobile ";


    $sql2 = "insert into $bank values ('$donor_name',$Blood_Quantity,'$Time','$place',$Mobile,$Adhar,$value)";

    try {


        if (mysqli_query($connect, $sql_1) == true) {


            if (mysqli_query($connect, $sql2) == true) {

                session_start();
                $_SESSION['bank'] = $bank;
                $_SESSION['name'] = $donor_name;
                header("location: Doner_Homepage.php");
            }





        } else {
            echo "fail";
        }


    } catch (\Throwable $th) {
        echo "invalid data";
    }

}
?>