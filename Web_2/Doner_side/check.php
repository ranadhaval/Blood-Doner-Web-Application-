<?php
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
   
    $mobile =intval(trim($_POST["mobile"]));
    $adhar =intval(trim($_POST["adhar_number"]));
    $password =trim($_POST["password"]);
    
    $connect= mysqli_connect("localhost","root","","blooddonerweb");
    


    
    
    $sql_1 ="insert into  doner (mobile_number,adhar_number,password) values ($mobile,$adhar,'$password')";
    
    $result=mysqli_query($connect,$sql_1);
        if($result)
        {
        echo("success");
        session_start();
        $_SESSION['Mobile'] =$mobile;
        $_SESSION['Adhar']=$adhar;
        $_SESSION['PWD']=$password;
        header("location: Add_more_about_you.php");
        }
        else
        {
            print(var_dump($password));
            echo("<br/><br/>fail");

        }
       
    }  
 
    
    ?>
















