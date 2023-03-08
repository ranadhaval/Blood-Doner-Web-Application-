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
                <a class="nav-link active" aria-current="page" href="blood_bank_page.php">Home</a>
                <a class="nav-link" href="issue_certificate.php">Issue Certificates</a>

                <a class="nav-link" href="logout.php">Logout</a>

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
        <font style="color:white;">Hello
          <?php echo ($username) ?> Welcome 👋👋To the Blood Bank Page
        </font>
      </h3>



    </div>



</body>

</html>