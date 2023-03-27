<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<style>
  #op,
  figure {
    padding-top: 5%;
    padding-left: 30%;
    padding-right: 30%;
  }
</style>

<body>

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
  <form id="op" action="add_more_about_checking.php" method="post">


    <h2> Add more About You</h1>
      <br />

      <div class="form-group">
        <label for="exampleInputEmail1">Doner Name </label>
        <input type="text" name="Doner_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Enter Name">
        <br />
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Choose Blood Quantity for Donation </label>
        <select class="form-control" name="Blood_Quantity">
          <option value="select:selected">Select Blood Quantity</option>
          <option value="200">200 ml</option>
          <option value="250">250 ml</option>
          <option value="300">300 ml</option>
          <option value="350">350 ml</option>
          <option value="400">400 ml</option>
          <option value="450">450 ml</option>
        </select>

      </div>
      <br />
      <label for="exampleInputEmail1">Places: </label>
      <select class="form-control" name="place" value="place">
        <option value="select:selected">Select place</option>
        <option value="Ambawadi, Ahmadabad City">Ambawadi, Ahmadabad City</option>
        <option value="Ambli, Daskroi, Ahmedabad">Ambli, Daskroi, Ahmedabad</option>
        <option value="Amraiwadi, Ahmadabad City, Ahmedabad">Amraiwadi, Ahmadabad City, Ahmedabad</option>
        <option value="Zezra, Viramgam, Ahmedabad">Zezra, Viramgam, Ahmedabad</option>
        <option value="Virdi, Dholka, Ahmedabad">Virdi, Dholka, Ahmedabad</option>
        <option value="Tagdi, Dhandhuka, Ahmedabad">Tagdi, Dhandhuka, Ahmedabad</option>

      </select>
      <br />
      <label for="exampleInputEmail1">Available Banks: </label>
      <div class="form-group">
        <select name="bank" class="form-control">
          <?php



          for ($i = 0; $i < count($d); $i++) {

            print("<option >$d[$i]</option>");

          }

          ?>



        </select>

        <br />
      </div>




      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</body>

</html>
