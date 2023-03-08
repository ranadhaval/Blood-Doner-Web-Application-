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
      padding: 8%;

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

    body {
      color: black;

      font-family: Georgia, serif;
      font-size: 24px;


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
          $username = $_SESSION['bank_name'];


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
                <a class="nav-link " aria-current="page" href="blood_bank_page.php">Home</a>

                <a class="nav-link active" href="issue_certificate.php">Issue Certificates</a>

                <a class="nav-link" href="logout.php">Logout</a>

              </li>


            </ul>

          </div>
        </div>
      </div>
    </nav>

    <?php


    $connect = mysqli_connect("localhost", "root", "", "blooddonerweb");

    $sql = "select * from $username";


    $d1 = array();
    $d2 = array();
    $d3 = array();
    $d4 = array();
    $d5 = array();
    $d6 = array();
    $d7 = array();

    $i = 0;
    $result = mysqli_query($connect, $sql);

    if ($result = mysqli_query($connect, $sql)) {
      while ($row = mysqli_fetch_row($result)) {


        $d1[$i] = $row[0];
        $d2[$i] = $row[1];
        $d3[$i] = $row[2];
        $d4[$i] = $row[3];
        $d5[$i] = $row[4];
        $d6[$i] = $row[5];
        $d7[$i] = $row[6];


        $i++;


      }
    } else {
      echo "in valid";
    }




    ?>


    <div id="op">



      <table class="table table-dark" align="center" height="60%">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Doner Name</th>
            <th scope="col">Blood Quantity</th>

            <th scope="col">time</th>
            <th scope="col">place</th>
            <th scope="col">Mobile</th>
            <th scope="col">Adhar</th>

            <th scope="col">Approval Status</th>


          </tr>
        </thead>
        <tbody>

          <?php
          $o = 1;


          for ($i = 0; $i < count($d1); $i++) {
            // session_start();
            // $_SESSION['mobile'] = $d7[$i];
            if ($d7[$i] == 0) {

              echo ('<tr><th scope="row">' . $i + $o . '</th> <td>' . $d1[$i] . '</td> <td>' . $d2[$i] . '</td>  <td>' . $d3[$i] . '</td> <td>' . $d4[$i] . '</td> <td>' . $d5[$i] . '</td> <td>' . $d6[$i] . '</td>' . '<td>' .
                '<div data-inline="true">'


                . '<form action="approve.php">

            <button type="submit" value= ' . $d5[$i] . ' name="co" style="color: black; background-color: rgb(235, 235, 67); border-color: azure;">

             approve
            </button>
            
       &nbsp; <font style="font-weight:bold;"> Or </font>  &nbsp;
            <button type="submit" formaction="Reject.php" name="co"  value= ' . $d5[$i] . ' style="color: white; background-color: rgb(218, 112, 42); border-color: azure;">
    Reject </button>
            </form> ' .
                '</td> ' . '</tr>');
            } else if ($d7[$i] == 1) {


              echo ('<tr><th scope="row">' . $i + $o . '</th> <td>' . $d1[$i] . '</td> <td>' . $d2[$i] . '</td>  <td>' . $d3[$i] . '</td> <td>' . $d4[$i] . '</td> <td>' . $d5[$i] . '</td> <td>' . $d6[$i] . '</td>' . '<td>'

                . '<form action="">

            <input type="submit" value="Request Approve" style="color: black; background-color: greenyellow; border-color: azure;">
        </form> ' .

                '</td> ' . '</tr>');
            } else {
              echo ('<tr><th scope="row">' . $i + $o . '</th> <td>' . $d1[$i] . '</td> <td>' . $d2[$i] . '</td>  <td>' . $d3[$i] . '</td> <td>' . $d4[$i] . '</td> <td>' . $d5[$i] . '</td> <td>' . $d6[$i] . '</td>' . '<td>'

                . '<form action="">

          <input type="submit" value="Request Rejected" style="color: black; background-color: rgb(218, 112, 42); border-color: azure;">
      </form> ' . '</tr>');
            }
          }

          ?>




        </tbody>
      </table>



    </div>






</body>

</html>