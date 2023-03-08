<html>


<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

  <style>
    #op {
      /* margin-top: 100; */
      padding-top: 5%;
      padding-left: 20%;
      padding-right: 30%;
      /* align-items: center; */
    }

    body {
      color: black;

      font-family: Georgia, serif;
      font-size: 24px;
      text-align: center;

    }

    .bg {

      background-image: url('donation.png');
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
          $mobile = $_SESSION['Mobile'];

          $connect = mysqli_connect("localhost", "root", "", "blooddonerweb");


          $sql2 = "select * from doner where mobile_number =$mobile ";





          if (mysqli_query($connect, $sql2)) {

            $result = mysqli_query($connect, $sql2);
            $row = mysqli_fetch_row($result);
            $bank_name = $row[3];


            $sql = "select * from $bank_name where mobile_number = $mobile";


            $result_2 = mysqli_query($connect, $sql);


            $row_2 = mysqli_fetch_assoc($result_2);



            $name = $row_2['donername'];
            $quantity = $row_2['bloodquantity'];
            $time = $row_2['time'];

            $place = $row_2['place'];
            $status = $row_2['status'];
            $adhar = $row_2['adhar_number'];



            $_SESSION['donername'] = $name;
            $_SESSION['adhar_number'] = $adhar;
            $_SESSION['bloodquantity'] = $quantity;
            $_SESSION['bank'] = $bank_name;
            $_SESSION['time'] = $time;
            $_SESSION['place'] = $place;
            $_SESSION['status'] = $status;
            echo ("<font> $name </font>");
          } else {
            echo ("<font> User_$mobile </font>");
          }

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


              echo ("<font>  $name </font>");
              ?>
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Doner_Homepage.php">Home</a>
                <a class="nav-link" href="Certificate_page.php">Certificate</a>

                <a class="nav-link" href="Status_page.php">Status</a>
                <a class="nav-link" href="Logout.php">Logout</a>

              </li>


            </ul>

          </div>
        </div>
      </div>
    </nav>


    <br />
    <br />

    <div id="op">

      <h2>Welcome 👋👋To the Blood Donation Web</h2>



      <br />
      <img class="d-block w-100"
        src="https://healthmatters.nyp.org/wp-content/uploads/2021/12/nybc-blood-donation-hero.jpg" alt="First slide">

    </div>
</body>

</html>