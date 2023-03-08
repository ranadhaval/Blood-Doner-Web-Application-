<html>
<style>
    #op,
    figure {
        padding-top: 2%;
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
        $connect = mysqli_connect("localhost", "root", "", "blooddonerweb");
        $sql = "select * from admin";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_row($result);

        $data_username = "$row[0]";
        $data_password = "$row[1]";

        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        if ($username == $data_username && $password == $data_password) {

            session_start();
            $_SESSION['Admin_username'] = $username;
            $_SESSION['Admin_password'] = $password;

            header("location:Admin_page.php");
        } else {
            echo "<center> invalid</center>";
        }


    }

    ?>
    <figure id="figure">
        <img src="admin.png" alt="...">
        <figcaption class="figure-caption">
            <font style="font-weight: bold;"> Admin Login Page.</font>
        </figcaption>
    </figure>
    <form id="op" action="Admin_login.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username </label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Username">
            <br />
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                placeholder="Password">
            <br />
        </div>


        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</body>

</html>