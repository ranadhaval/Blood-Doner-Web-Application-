<html>


<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<style>
   #op {
   
      padding-top: 15%;
       padding-left: 15%;
      padding-right: 25%; */
  
    }

    body {
                color: black;
               
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
                
            }
      body
      {
        background-color:slategray ;
      }
</style>
    <body>
        
    <?php
session_start();

$mobile=$_SESSION['Mobile'];


$connect= mysqli_connect("localhost","root","","blooddonerweb");





$name=$_SESSION['donername'] ;
$adhar= $_SESSION['adhar_number'] ;
$quantity=$_SESSION['bloodquantity']  ;
$bank_name=$_SESSION['bank']  ;
$time =$_SESSION['time'];
$place=$_SESSION['place'];
$status=$_SESSION['status'];




?>

  
<nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><?php  echo($name) ?></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><?php  echo($name) ?></h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="Doner_Homepage.php">Home</a>
                    <a class="nav-link " href="Certificate_page.php">Certificate</a>

                      <a class="nav-link  active" href="Status_page.php">Status</a>
                      <a class="nav-link " href="Logout.php">Logout</a>
                    
                    </li>
                  
                    
                  </ul>
                 
                </div>
              </div>
            </div>
          </nav>


          <div id="op">






          <h5> Your data</h5>




          <table class="table" align="center" width="60%">
  <!-- <caption>List of users</caption> -->
  
  
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Feild</th>
      <th scope="col">Data</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Doner Name</td>
      <td> <?php echo($name) ?> </td>
     


    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Adhar Number</td>
      <td><?php echo($adhar) ?></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mobile Number</td>
      <td><?php echo($mobile) ?></td>
     
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Blood Quantity</td>

      <td><?php echo($quantity." ml") ?></td>
    
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Bank</td>
      <td><?php echo($bank_name) ?></td>
 
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Time</td>
      <td><?php echo($time) ?></td>
   
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Place</td>
      <td><?php echo($place) ?></td>

    </tr>

    <tr>
      <th scope="row">8</th>
      <td>Status</td>
      <td><?php 
      
      
      if($status ==0)
      {
       echo(' <div  style="border: radius 80px; background-color:blue ;hight: 20px; width: 70px;"> <center> <span class="badge badge-pill badge-primary">Pending</span> </center></div>');
      }
      else if($status ==1)
      {
       echo(
        '<font style="font: size 20px;color:white;">Congratulations you can download and view your certificate</font> '.
       
       '<div data-inline="true">'


       .'
       <br/> 
       <form action="Certificate_page.php">

       <button type="submit" value= '. $name .' name="co" style="color: black; background-color: rgb(235, 235, 67); border-color: azure;">

        view
       </button>
       
  &nbsp; <font style="font-weight:bold;"> Or </font>  &nbsp;
       <button type="submit" formaction="/Web/new.php" name="co"  value= '. $name .' style="color: white; background-color: rgb(218, 112, 42); border-color: azure;">
Download </button>
       </form> '  
       );
      }
      else
      {
       echo(' <div  style="border: radius 50px; background-color:red ;hight: 20px; width: 70px;"> <center> <span class="badge badge-pill badge-primary">Reject</span> </center></div>');

      }
      
      ?></td>

    </tr>
  </tbody>
</table>
          </div>
    
    </body>
</html>