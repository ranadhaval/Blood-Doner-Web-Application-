<html>
<style>
  #op,
  figure {
    padding-top: 5%;
    padding-left: 30%;
    padding-right: 30%;
  }
</style>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</head>

<body>


  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    $mobile = trim($_POST["mobile"]);
    $password = trim($_POST["password"]);

    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Login fail!</strong> Something went wrong

</div>';

    $connect = mysqli_connect("localhost", "root", "", "blooddonerweb");


    $sql2 = "select * from doner";

    $result = mysqli_query($connect, $sql2);
    $u = true;
    while ($row = mysqli_fetch_array($result)) {

      if ($row[0] == $mobile && $row[2] == $password) {
        session_start();
        $_SESSION['Mobile'] = $mobile;
        $_SESSION['password'] = $password;

        header("location: Doner_Homepage.php");

      } else {
        echo ("fail");
      }

    }


  }

  ?>





  <figure id="figure">
    <img
      src="https://m.economictimes.com/thumb/msid-83502809,width-100,height-100,resizemode-4,imgsize-353228/blood-donation_istock.jpg"
      class="figure-img img-fluid rounded" alt="...">
    <figcaption class="figure-caption"> Blood Doner Login Page.</figcaption>
  </figure>
  <form id="op" action="Login_page.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Mobile Number </label>
      <input type="number" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Enter Mobile Number">
      <br />
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      <br />
    </div>
    <div class="text-center">
      <p>Not a member? <a href="register.php">Register</a></p>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>






</body>

</html>