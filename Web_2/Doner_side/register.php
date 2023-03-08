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


  <figure id="figure">
    <img
      src="https://m.economictimes.com/thumb/msid-83502809,width-100,height-100,resizemode-4,imgsize-353228/blood-donation_istock.jpg"
      class="figure-img img-fluid rounded" alt="...">
    <figcaption class="figure-caption"> Blood Doner Register Page.</figcaption>
  </figure>
  <form id="op" action="check.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Mobile Number </label>
      <input type="number" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Enter Mobile Number">
      <br />
    </div>
    <div class="form-group">
      <label for="exampleAdhar">Adhar Number </label>
      <input type="number" name="adhar_number" class="form-control" id="exampleAdhar" placeholder="Enter Adhar Number">
      <br />
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      <br />
    </div>
    <div class="text-center">
      <p> If you are member? <a href="Login_page.php">Login</a></p>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>




</body>

</html>