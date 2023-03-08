<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

  <style>
    body {
      color: black;

      font-family: Georgia, serif;
      font-size: 24px;


    }

    #op {
      /* margin-top: 100; */
      padding-top: 15%;
      padding-left: 20%;
      padding-right: 25%;
      /* align-items: center; */
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


          <?php


          $connect = mysqli_connect("localhost", "root", "", "blooddonerweb");

          $sql = "select * from bank";

          $d = array();
          $i = 0;
          $result = mysqli_query($connect, $sql);
          while ($row = mysqli_fetch_row($result)) {


            $d[$i] = $row[0];
            $i++;


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
                <a class="nav-link active" href="View_Basic_reports.php">View Basic Report</a>
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

      <table class="table table-dark" height="30%">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Banks</th>
            <th scope="col">Total Todays Blood Donation Quantity</th>
            <th scope="col"> Total Blood Per Bank</th>
            <th scope="col"> Total Blood Doners</th>


          </tr>
        </thead>

        <tbody>


          <?php
          //time that shows current time
          $Time = date('m/d/Y', time());




          $d_today_count = array();
          $d_total_per_bank = array();

          // for todays count
          for ($i = 0; $i < count($d); $i++) {
            // todays blood count
          
            $sql_check = "select count(1) where exists (select * from $d[$i])";
            $result_check = mysqli_query($connect, $sql_check);
            $row_check = mysqli_fetch_row($result_check);
            // for empty situation
            if ($row_check[0] == 1) {




              $sql_x = "select SUM(bloodquantity) from $d[$i] where time = '$Time' ";
              $result_x = mysqli_query($connect, $sql_x);
              $row_x = mysqli_fetch_row($result_x);



              if ($row_x[0] == 0) {
                $d_today_count[$i] = 0;
              } else {
                $d_today_count[$i] = $row_x[0];
              }



            } else {
              $d_today_count[$i] = 0;

            }
          }

          // for total count
          for ($i = 0; $i < count($d); $i++) {


            $sql_check = "select count(1) where exists (select * from $d[$i])";
            $result_check = mysqli_query($connect, $sql_check);
            $row_check = mysqli_fetch_row($result_check);





            // for empty situation
            if ($row_check[0] == 1) {




              $sql_x = "select SUM(bloodquantity) from $d[$i] ";
              $result_x = mysqli_query($connect, $sql_x);
              $row_x = mysqli_fetch_row($result_x);



              if ($row_x[0] == 0) {
                $d_total_per_bank[$i] = 0;
              } else {
                $d_total_per_bank[$i] = $row_x[0];
              }



            } else {
              $d_total_per_bank[$i] = 0;

            }





          }
          $d_total_doners = array();


          // for total doners
          

          for ($i = 0; $i < count($d); $i++) {


            $sql_check = "select count(1) where exists (select * from $d[$i])";
            $result_check = mysqli_query($connect, $sql_check);
            $row_check = mysqli_fetch_row($result_check);





            // for empty situation
            if ($row_check[0] == 1) {



              $sql_final = "select count(donername)  from $d[$i]";

              $result_final = mysqli_query($connect, $sql_final);
              $row_final = mysqli_fetch_row($result_final);



              if ($row_final[0] == 0) {
                $d_total_doners[$i] = 0;
              } else {
                $d_total_doners[$i] = $row_final[0];
              }



            } else {
              $d_total_doners[$i] = 0;

            }

          }

          // $sql_final="select count(donername)  from ";
          
          ?>


        <tbody>

          <?php
          $o = 1;
          for ($i = 0; $i < count($d); $i++) {

            echo ('<tr><th scope="row">' . $i + $o . '</th><td>' . $d[$i] . '</td> <td>' . $d_today_count[$i] . ' ml' . '</td><td>' . $d_total_per_bank[$i] . ' ml' . '</td><td>' . $d_total_doners[$i] . '</td></tr>');

          }

          ?>


        </tbody>
      </table>


    </div>
</body>

</html>