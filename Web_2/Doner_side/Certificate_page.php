<html>


<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>


<style>
     body, html {
                margin: 0;
                padding-left: 13%;
                padding-top:5%;
            }
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
                
            }
            .container {
                border: 20px solid tan;
                width: 750px;
                height: 563px;
                display: table-cell;
                
                vertical-align: middle;
            }
            .logo {
                color: tan;
            }

            .marquee {
                color: tan;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
            .center {
  margin: auto;
  width: 60%;

  padding: 150px;
}
            
</style>
    <body >

<?php
session_start();
$name=$_SESSION['donername'] ;
$bank_name=$_SESSION['bank'] ;
?>


        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><?php echo("$name") ?></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><?php echo("$name") ?></h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="Doner_Homepage.php">Home</a>
                    <a class="nav-link  active" href="Certificate_page.php">Certificate</a>

                      <a class="nav-link" href="Status_page.php">Status</a>
                      <a class="nav-link" href="Logout.php">Logout</a>
                    
                    </li>
                  
                    
                  </ul>
                 
                </div>
              </div>
            </div>
          </nav>



      <?php
      
      
     $html=
     
     '<div >


     <div class="container">
         <div class="logo">
             Blood Doner Organization
         </div>

         <div class="marquee">
             Certificate of Completion
         </div>

         <div class="assignment">
             This certificate is presented to
         </div>

         <div class="person">
         '.$name.'
         </div>

         <div class="reason">
             For Donating Blood to 
             
        <font style="font-weight:bold;"> '.$bank_name.'
</font>             
             Blood Bank <br/>
            
         </div>
     </div>

 
     </div>'; 


      $status=$_SESSION['status'];
      if($status==1)
      {
echo($html);
      }
      else
      {
        echo('<div class="center">
        
        
        <img src="https://st.depositphotos.com/2274151/2766/i/600/depositphotos_27660123-stock-photo-pending-stamp.jpg" style="width: 150; height: 150" alt="">
        <tr> Your Certificate Still Pending </tr> </div>');
      }
      ?>


    </body>
</html>
