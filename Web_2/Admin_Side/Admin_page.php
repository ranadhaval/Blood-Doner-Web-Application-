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

    #opo {
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
                <a class="nav-link active" aria-current="page" href="Admin_page.php">Home</a>
                <a class="nav-link" href="View_Basic_reports.php">View Basic Report</a>
                <a class="nav-link" href="Add_banks.php">Create Banks</a>

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

      <h3>
        <font style="color:white;">Hello Cheif Welcome 👋👋To the Blood Donation Admin Page</font>
      </h3>
      <br />

    </div>

    <?php


    $connect = mysqli_connect("localhost", "root", "", "blooddonerweb");

    $sql = "select * from bank";
    $sql2 = "select * from doner";


    $d = array();
    $i = 0;
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_row($result)) {


      $d[$i] = $row[0];
      $i++;


    }

    $d1 = array();
    $d2 = array();
    $i = 0;
    $result = mysqli_query($connect, $sql2);
    while ($row = mysqli_fetch_row($result)) {


      $d1[$i] = $row[0];
      $d2[$i] = $row[3];

      $i++;


    }
    ?>
    <div id="opo">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Blood Banks</h5>
              <p class="card-text">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Banks</th>
                  </tr>
                </thead>
                <?php
                $o = 1;
                for ($i = 0; $i < count($d); $i++) {

                  echo ('<tr><th scope="row">' . $i + $o . '</th><td>' . $d[$i] . '</td></tr>');

                }

                ?>
              </table>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Doners</h5>
              <p class="card-text">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doners</th>
                    <th scope="col">Banks</th>

                  </tr>
                </thead>
                <?php
                $o = 1;
                for ($i = 0; $i < count($d1); $i++) {

                  echo ('<tr><th scope="row">' . $i + $o . '</th><td>' . $d1[$i] . '</td> <td>' . $d2[$i] . '</td></tr>');

                }

                ?>


              </table>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>



</body>

</html>