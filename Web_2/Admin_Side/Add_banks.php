<html>


<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

  <style>
    body {
      color: white;

      font-family: Georgia, serif;
      font-size: 24px;
      /* text-align: center; */

    }

    #op {
      /* margin-top: 100; */
      padding-top: 5%;
      padding-left: 20%;
      padding-right: 30%;
      /* align-items: center; */
    }

    #opx,
    figure {
      padding-top: 3%;
      padding-left: 10%;
      padding-right: 30%;
    }

    #opo {
      /* margin-top: 100; */
      padding-top: 8%;
      padding-left: 20%;
      padding-right: 30%;
      /* align-items: center; */
    }

    .bg {

      background-image: url('https://wallpaperaccess.com/full/16671.jpg');
      height: 100%;

      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    #exampleInputEmail1,
    #exampleInputPassword1 {
      width: 50%;
    }

    #card {
      padding-left: 20%;

      margin-left: 30%;
    }

    #pi {
      height: 30%;
      width: 40%;
    }
  </style>
</head>

<body>

  <div class="bg">
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <?php

          session_start();
          $username = $_SESSION['Admin_username'];

          echo ("$username");
          ?>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
          aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
          aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
              <?php


              echo ("<font>  $username </font>");
              ?>
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="Admin_page.php">Home</a>
                <a class="nav-link " href="View_Basic_reports.php">View Basic Report</a>
                <a class="nav-link active" href="Add_banks.php">Create Banks</a>

                <a class="nav-link" href="Logout.php">Logout</a>

              </li>


            </ul>

          </div>
        </div>
      </div>
    </nav>




    <br />
    <br />



    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $uname = trim($_POST["username"]);
      $pass = trim($_POST["password"]);

      $connect = mysqli_connect("localhost", "root", "", "blooddonerweb");

      $sql = "insert into bank(username,password) values ('$uname','$pass')";


      $sql2 = "create table $uname(donername varchar(50) primary key,bloodquantity INT,time varchar(50),place varchar(50),mobile_number INT unique,adhar_number INT,status INT)";

      try {
        if (mysqli_query($connect, $sql)) {
          mysqli_query($connect, $sql);
          if (mysqli_query($connect, $sql2)) {
            header("location:Admin_page.php");

          }
        } else {
          echo ("fail");
        }



      } catch (\Throwable $th) {
        echo "invalid";
      }

    }
    ?>


    <figure id="figure">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG8gnhOzozuyAeI2ff5M4z-3IeDHreZKcEkQ&usqp=CAU"
        alt="...">
      <br />
      <br />

      <figcaption class="figure-caption">
        <font style="font-weight: bold; color:white; font: size 50px;"> Add Blood Bank Page.</font>
      </figcaption>
    </figure>
    <form id="opx" action="Add_banks.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Username </label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Enter Username">
        <br />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <br />
      </div>


      <button type="submit" class="btn btn-primary">Add Banks</button>
    </form>

</body>

</html>