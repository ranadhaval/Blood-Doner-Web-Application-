<html>


<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</head>

<style>
  #op {
    padding: 200;
  }

  .my-button {
    border-radius: 5px;
    border: 1px solid #000;
    padding: 10px 20px;
    background: slategrey;
    font-size: 2em;
    cursor: pointer;
  }
</style>

<body>



  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Dhaval Rana</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dhaval Rana</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="Doner_Homepage.php">Home</a>
              <a class="nav-link  " href="Certificate_page.php">Certificate</a>

              <a class="nav-link" href="Status_page.php">Status</a>
              <a class="nav-link  active" href="Logout.php">Logout</a>

            </li>


          </ul>

        </div>
      </div>
    </div>
  </nav>


  <div id="op">


    <?php


    session_start();
    session_unset();
    session_destroy();
    header("location: Login_page.php");
    exit;
    ?>
    <center>
      <form method="post" action="Logout.php">
        <font>
          <input type="submit" class="my-button" value="Logout" style="border-radius: cir;">
        </font>
      </form>
    </center>
  </div>





</body>

</html>